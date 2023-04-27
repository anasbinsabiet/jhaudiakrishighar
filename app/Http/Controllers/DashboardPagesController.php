<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use App\Models\User;
use PDF;
use View;

class DashboardPagesController extends Controller
{   
    public function index(Request $request)
    {   
        $from = date('Y-m-d', strtotime($request->startDate));
        $to = date('Y-m-d', strtotime($request->endDate));
        
        $selling_from = date('Y-m-d', strtotime($request->sellingDateFrom));
        $selling_to = date('Y-m-d', strtotime($request->sellingDateTo));

        $query = Application::where('status', 'Active');
        if($request->productName && $request->productName > 0){
            $query = $query->whereIn('id', $request->productName);
        }
        if($from != null && $from != "1970-01-01"){
            $query = $query->whereDate('purchase_date','>=',$from);
        }
        if($to != null && $to != "1970-01-01"){
            $query = $query->whereDate('purchase_date','<=',$to);
        }
        if($selling_from != null && $selling_from != "1970-01-01"){
            $query = $query->whereDate('selling_date','>=',$selling_from);
        }
        if($selling_to != null && $selling_to != "1970-01-01"){
            $query = $query->whereDate('selling_date','<=',$selling_to);
        }
        $data['applications'] = $query->orderBy('id','ASC')->get();
        $data['products'] = Application::select('*')
                            ->where('product_name', '!=', '')
                            ->whereNotNull('product_name')
                            ->where('status', 'Active')
                            ->orderBy('product_name','ASC')
                            ->get();
        return view('backend.home', $data);
    }
    public function users()
    {   
        $data['users'] = User::orderBy('id', 'ASC')->get();
        return view('backend.users', $data);
    }
    public function update(Request $request)
    {   
        $id = $request->id;
        if ($id && $id > 0) {
            if($request->name == 'purchase_date' || $request->name == 'selling_date'){
                $update = Application::where('id', $id)
                    ->update([$request->name => date('Y-m-d', strtotime($request->value)), 'updated_by' => auth()->user()->id]);
            }else{
                $update = Application::where('id', $id)
                    ->update([$request->name => $request->value, 'updated_by' => auth()->user()->id]);
            }
            
        }
    }
    public function changedData()
    {   
        $data = new Application;
        $data->product_name = '';
        $data->created_by = auth()->user()->id;
        $data->save();

        $applications = Application::where('status', 'Active')->orderBy('id','ASC')->get();
        $incoming = View::make('backend.incoming',compact('applications'))->render();
        $outgoing = View::make('backend.outgoing',compact('applications'))->render();
        $profit = View::make('backend.profit',compact('applications'))->render();
        return response()->json([
            'incoming' => $incoming,
            'outgoing' => $outgoing,
            'profit' => $profit
        ]);
    }
    
    public function deletedData(Request $request)
    {   
        $ids = $request->selectedIds;
        Application::whereIn('id', $ids)->update(['status' => 'Inactive']);
        $applications = Application::where('status', 'Active')->orderBy('id','ASC')->get();
        $incoming = View::make('backend.incoming',compact('applications'))->render();
        $outgoing = View::make('backend.outgoing',compact('applications'))->render();
        $profit = View::make('backend.profit',compact('applications'))->render();
        return response()->json([
            'incoming' => $incoming,
            'outgoing' => $outgoing,
            'profit' => $profit
        ]);
    }
    
    public function applications()
    {   
        $applications = Application::orderBy('id','ASC')->get();
        return view('backend.applications', compact('applications'));
    }
    public function application($id)
    {   
        $data['application'] = Application::find($id);
        $data['data'] = Application::find($id);
        return view('backend.application', $data);
    }
    public function invoice($id)
    {   
        $user_id = Application::find($id)->user_id;
        $data['user'] = User::where('id', $user_id)->first();
        $data['data'] = Application::find($id);
        $pdf = PDF::loadView('backend.order.invoice', $data);
        return $pdf->download('certificate.pdf');
        // return view('backend.order.invoice', $data);
    }
}