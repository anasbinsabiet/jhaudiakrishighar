@extends('layouts.app')
@section('content')
<section class="content">

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">
                @if($type == 'birth')
                Application for Birth Cirtificate
                @elseif($type == 'death')
                Application for Death Cirtificate
                @elseif($type == 'number')
                Application for Mark Sheet
                @elseif($type == 'certificate')
                Application for Academic Transcript
                @elseif($type == 'registration')
                Application for Registration Card
                @endif
            </h3>
            <div class="box-tools pull-right">
                <button data-widget="collapse" class="btn btn-box-tool"><i class="fa fa-minus"></i></button>
                <button data-widget="remove" class="btn btn-box-tool"><i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- <div class="alert alert-info" style="font-size: 16px;">
                            <h3 style="margin-top: 0; text-align: center;"><b>সমতুল্য সনদের জন্য আবেদনের নিয়মাবলি:</b></h3>
                            <h4><b>প্রয়োজনীয় কাগজপত্র:</b></h4>
                            <b>*** ভারত ও পাকিস্তান কারিকুলামে পাসকৃত ( দশম হতে দ্বাদশ পর্যন্ত ) শিক্ষার্থীদের জন্য : </b><br>
                            পরীক্ষা পাসের সনদপত্র, নম্বরপত্র, মাইগ্রেসন সনদ, পাসপোর্ট ও ভিসা ( শিক্ষাকালীন সময়ের ) ও জন্ম নিবন্ধন অথবা নাগরিকত্ব সনদ এর সত্যায়িত ১২ সেট ফটোকপি সংশ্লিষ্ট শাখায় জমা দিতে হবে।<br><br>
                
                            <b>*** Cambridge  / Edexcel  হতে O’Level &amp; A’Level  পরীক্ষায় পাসকৃত শিক্ষার্থীদের জন্য:</b><br>
                            সনদ ও নম্বরপত্রের ফটোকপি ব্রিটিশ কাউন্সিল হতে সত্যায়িত করে জমা দিতে হবে এবং পাসপোর্ট ( শিক্ষাকালীন সময়ের ) , ভিসা ( শিক্ষাকালীন সময়ের প্রযোজ্য ক্ষেত্রে ) ও জন্ম নিবন্ধন অথবা নাগরিকত্ব সনদ এর সত্যায়িত  ১২ সেট ফটোকপি সংশ্লিষ্ট শাখায় জমা দিতে হবে।<br><br>
                            <b>বি:দ্র:</b><br>
                            O’Level এর ক্ষেত্রে ইংরেজীসহ যেকোন ০৬ (ছয় ) টি বিষয়ে অবশ্যই নূন্যতম গ্রেড “D/3” থাকতে হবে।<br>
                            A’Level এর ক্ষেত্রে (A-2)  যেকোন ০২ (দুই ) টি বিষয়ে অবশ্যই নূন্যতম গ্রেড “D/3” থাকতে হবে।<br><br>
                
                            *** অন্যান্য সকল সার্টিফিকেটের ক্ষেত্রে যে দেশ থেকে আবেদনকারী পাস করেছে সে দেশের দূতাবাস থেকে পরীক্ষা পাসের সনদপত্র, নম্বরপত্রসহ প্রয়োজনীয় কাগজপত্র সত্যায়িত করে অথবা পাসের স্বপক্ষে ঐ দূতাবাসের প্রত্যয়নপত্র জমা দিতে হবে এবং পাসপোর্ট ও ভিসা ( শিক্ষাকালীন সময়ের ) ও জন্ম নিবন্ধন অথবা নাগরিকত্ব সনদ এর সত্যায়িত ফটোকপি জমা দিতে হবে।<br><br>
                
                            <b>বি:দ্র: মূল কাগজাদিসহ  শিক্ষার্থীকে অবশ্যই বোর্ডের সংশ্লিষ্ট শাখার নির্দেশনা অনুযায়ী উপস্থিত হতে হবে।</b>
                        </div> -->
            <div class="alert alert-danger">
                <h3 style="margin: 0; text-align: center;"><b>Application Must be Fill up in English.</b></h3>
            </div>
            @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
            @endif
            <form class="form-horizontal" action="{{url('application-store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" class="form-control" name="certificate_type" value="{{$type}}">
                @if($type == 'birth' || $type == 'death')
                    @if($type == 'birth')
                        <div class="form-group">
                            <label class="control-label col-sm-3">Birth Certificate Number (ব্যাক্তিগত পরিচিত নম্বর):</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="birth_reg_number">
                            </div>
                        </div>
                    @endif
                    @if($type == 'death')
                        <div class="form-group">
                            <label class="control-label col-sm-3">Death Certificate Number (ব্যাক্তিগত পরিচিত নম্বর):</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="death_reg_number">
                            </div>
                        </div>
                    @endif
                @else
                <div class="form-group">
                    <label class="control-label col-sm-3">Registration Number (রেজিস্ট্রেশন নম্বর):</label>
                    <div class="col-sm-6">
                        <input type="number" min="10" class="form-control" name="reg_number">
                    </div>
                </div>
                @endif

                <div class="form-group">
                    <label class="control-label col-sm-3">Incorrect Name (ভুল নাম)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="incorrect_name" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Correct Name (সঠিক নাম)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="correct_name">
                    </div>
                </div>

                @if($type == 'birth')
                <div class="form-group">
                    <label class="control-label col-sm-3">Date of Birth (জন্ম তারিখ)</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="birthdate">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Birth Place (জন্মস্থান)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="birthplace">
                    </div>
                </div>
                @endif

                @if($type == 'death')
                <div class="form-group">
                    <label class="control-label col-sm-3">Date of Death (মৃত তারিখ)</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" name="deathhdate">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Death Place (মৃত স্থান)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="deathplace">
                    </div>
                </div>
                @endif

                <div class="form-group">
                    <label class="control-label col-sm-3">Gender (লিঙ্গ) </label>
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="gender" data-exam="male" id="emale" name="efemale" value="1"> পুরুষ</label></div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="gender" data-exam="female" id="efemale" name="efemale" value="2"> মহিলা</label></div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="gender" data-exam="others" id="eothers" name="efemale" value="3"> অন্যান্য</label></div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Father's Name (পিতার নাম)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="father">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-3">Mother's Name (মাতার নাম)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="mother">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Applicant's Contact Number (আবেদনকারীর মোবাইল)</label>
                    <div class="col-sm-6">
                        <input type="tel" min="11" name="mobile" id="mobile" class="form-control number" maxlength="11" pattern="01[0-9]{9}" title="Please fill with a valid BD mobile number[Without +88]" required>
                    </div>
                </div>
                @guest
                <div class="form-group">
                    <label class="control-label col-sm-3">Email Address (আবেদনকারীর ইমেইল)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Password (পাসওয়ার্ড)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Confirm Password (কন্ফার্ম পাসওয়ার্ড)</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="confirm_password" required>
                    </div>
                </div>
                @endguest
                <div class="form-group">
                    <label class="control-label col-sm-3">Address (আবেদনকারীর পূর্ণ ঠিকানা)</label>
                    <div class="col-sm-6">
                        <textarea class="form-control" style="height: 100px;" name="address"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Applicant's Image (আবেদনকারীর পাসপোর্ট সাইজ ছবি</label>
                    <div class="col-sm-3">
                        <input type="file" name="app_photo" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png" onchange="previewImage(this)"><br>
                        <img src="" alt="" class="img-thumbnail" id="preview_app_photo">
                    </div>
                </div>

                @if($type == 'birth' || $type == 'death')
                @else
                <div class="form-group">
                    <label class="control-label col-sm-3">Name of the Examination (যে পরীক্ষার সমতুল্য সনদ প্রয়োজন</label>
                    <input type="hidden" id="exam_name" name="exam" />
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="eexam" data-exam="jsc" id="ejsc" name="ejsc" value="1"> JSC</label></div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="eexam" data-exam="ssc" id="essc" name="essc" value="1"> SSC</label></div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="eexam" data-exam="hsc" id="ehsc" name="ehsc" value="1"> HSC</label></div>
                    </div>
                    <div class="col-sm-1">
                        <div class="checkbox"><label><input type="checkbox" class="eexam" data-exam="bsc" id="ebsc" name="ebsc" value="1"> BSC</label></div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox"><label><input type="checkbox" class="eexam" data-exam="msc" id="emsc" name="emsc" value="1"> MSC</label></div>
                    </div>
                </div>
                <div class="jsc_group exam_group" style="display: none;">
                    <div class="exam_title">
                        <h4>INFORMATION OF JSC EXAMINATION</h4>
                    </div>
                </div>
                <div class="ssc_group exam_group" style="display: none;">
                    <div class="exam_title">
                        <h4>INFORMATION OF SSC EXAMINATION</h4>
                    </div>
                </div>
                <div class="hsc_group exam_group" style="display: none;">
                    <div class="exam_title">
                        <h4>INFORMATION OF HSC EXAMINATION</h4>
                    </div>
                </div>
                <div class="bsc_group exam_group" style="display: none;">
                    <div class="exam_title">
                        <h4>INFORMATION OF BSC EXAMINATION</h4>
                    </div>
                </div>
                <div class="msc_group exam_group" style="display: none;">
                    <div class="exam_title">
                        <h4>INFORMATION OF MSC EXAMINATION</h4>
                    </div>
                </div>
                <div class="form-group">
                        <!-- <label class="control-label col-sm-3">Name of the Examination (পরীক্ষার নাম)</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="exam_name">
                        </div> -->
                        <label class="control-label col-sm-3" style="white-space: nowrap;">Passing Year (পাসের সাল)</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="year">
                                <option value="">Select</option>
                                <option id="option_2021" draggable="true" ondragstart="drag(event)" value="2021">2021</option>
                                <option id="option_2020" draggable="true" ondragstart="drag(event)" value="2020">2020</option>
                                <option id="option_2019" draggable="true" ondragstart="drag(event)" value="2019">2019</option>
                                <option id="option_2018" draggable="true" ondragstart="drag(event)" value="2018">2018</option>
                                <option id="option_2017" draggable="true" ondragstart="drag(event)" value="2017">2017</option>
                                <option id="option_2016" draggable="true" ondragstart="drag(event)" value="2016">2016</option>
                                <option id="option_2015" draggable="true" ondragstart="drag(event)" value="2015">2015</option>
                                <option id="option_2014" draggable="true" ondragstart="drag(event)" value="2014">2014</option>
                                <option id="option_2013" draggable="true" ondragstart="drag(event)" value="2013">2013</option>
                                <option id="option_2012" draggable="true" ondragstart="drag(event)" value="2012">2012</option>
                                <option id="option_2011" draggable="true" ondragstart="drag(event)" value="2011">2011</option>
                                <option id="option_2010" draggable="true" ondragstart="drag(event)" value="2010">2010</option>
                                <option id="option_2009" draggable="true" ondragstart="drag(event)" value="2009">2009</option>
                                <option id="option_2008" draggable="true" ondragstart="drag(event)" value="2008">2008</option>
                                <option id="option_2007" draggable="true" ondragstart="drag(event)" value="2007">2007</option>
                                <option id="option_2006" draggable="true" ondragstart="drag(event)" value="2006">2006</option>
                                <option id="option_2005" draggable="true" ondragstart="drag(event)" value="2005">2005</option>
                                <option id="option_2004" draggable="true" ondragstart="drag(event)" value="2004">2004</option>
                                <option id="option_2003" draggable="true" ondragstart="drag(event)" value="2003">2003</option>
                                <option id="option_2002" draggable="true" ondragstart="drag(event)" value="2002">2002</option>
                                <option id="option_2001" draggable="true" ondragstart="drag(event)" value="2001">2001</option>
                                <option id="option_2000" draggable="true" ondragstart="drag(event)" value="2000">2000</option>
                                <option id="option_1999" draggable="true" ondragstart="drag(event)" value="1999">1999</option>
                                <option id="option_1998" draggable="true" ondragstart="drag(event)" value="1998">1998</option>
                                <option id="option_1997" draggable="true" ondragstart="drag(event)" value="1997">1997</option>
                                <option id="option_1996" draggable="true" ondragstart="drag(event)" value="1996">1996</option>
                                <option id="option_1995" draggable="true" ondragstart="drag(event)" value="1995">1995</option>
                                <option id="option_1994" draggable="true" ondragstart="drag(event)" value="1994">1994</option>
                                <option id="option_1993" draggable="true" ondragstart="drag(event)" value="1993">1993</option>
                                <option id="option_1992" draggable="true" ondragstart="drag(event)" value="1992">1992</option>
                                <option id="option_1991" draggable="true" ondragstart="drag(event)" value="1991">1991</option>
                                <option id="option_1990" draggable="true" ondragstart="drag(event)" value="1990">1990</option>
                                <option id="option_1989" draggable="true" ondragstart="drag(event)" value="1989">1989</option>
                                <option id="option_1988" draggable="true" ondragstart="drag(event)" value="1988">1988</option>
                                <option id="option_1987" draggable="true" ondragstart="drag(event)" value="1987">1987</option>
                                <option id="option_1986" draggable="true" ondragstart="drag(event)" value="1986">1986</option>
                                <option id="option_1985" draggable="true" ondragstart="drag(event)" value="1985">1985</option>
                                <option id="option_1984" draggable="true" ondragstart="drag(event)" value="1984">1984</option>
                                <option id="option_1983" draggable="true" ondragstart="drag(event)" value="1983">1983</option>
                                <option id="option_1982" draggable="true" ondragstart="drag(event)" value="1982">1982</option>
                                <option id="option_1981" draggable="true" ondragstart="drag(event)" value="1981">1981</option>
                                <option id="option_1980" draggable="true" ondragstart="drag(event)" value="1980">1980</option>
                                <option id="option_1979" draggable="true" ondragstart="drag(event)" value="1979">1979</option>
                                <option id="option_1978" draggable="true" ondragstart="drag(event)" value="1978">1978</option>
                                <option id="option_1977" draggable="true" ondragstart="drag(event)" value="1977">1977</option>
                                <option id="option_1976" draggable="true" ondragstart="drag(event)" value="1976">1976</option>
                                <option id="option_1975" draggable="true" ondragstart="drag(event)" value="1975">1975</option>
                                <option id="option_1974" draggable="true" ondragstart="drag(event)" value="1974">1974</option>
                                <option id="option_1973" draggable="true" ondragstart="drag(event)" value="1973">1973</option>
                                <option id="option_1972" draggable="true" ondragstart="drag(event)" value="1972">1972</option>
                                <option id="option_1971" draggable="true" ondragstart="drag(event)" value="1971">1971</option>
                                <option id="option_1970" draggable="true" ondragstart="drag(event)" value="1970">1970</option>
                                <option id="option_1969" draggable="true" ondragstart="drag(event)" value="1969">1969</option>
                                <option id="option_1968" draggable="true" ondragstart="drag(event)" value="1968">1968</option>
                                <option id="option_1967" draggable="true" ondragstart="drag(event)" value="1967">1967</option>
                                <option id="option_1966" draggable="true" ondragstart="drag(event)" value="1966">1966</option>
                                <option id="option_1965" draggable="true" ondragstart="drag(event)" value="1965">1965</option>
                                <option id="option_1964" draggable="true" ondragstart="drag(event)" value="1964">1964</option>
                                <option id="option_1963" draggable="true" ondragstart="drag(event)" value="1963">1963</option>
                                <option id="option_1962" draggable="true" ondragstart="drag(event)" value="1962">1962</option>
                                <option id="option_1961" draggable="true" ondragstart="drag(event)" value="1961">1961</option>
                                <option id="option_1960" draggable="true" ondragstart="drag(event)" value="1960">1960</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Name of the Institute (যে শিক্ষা প্রতিষ্ঠান থেকে পাস)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="institute">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Board (সংস্থা/বোর্ড)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="board">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Country (দেশের নাম)</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="country">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Division (বিভাগ)</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="group">
                        </div>
                        <label class="control-label col-sm-2" style="white-space: nowrap;">Grade (প্রাপ্ত গ্রেড)</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="result">
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ১ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ২ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৩ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৪ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৫ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub5">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৬ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub6">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৭ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub7">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৮ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub8">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ৯ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub9">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ১০ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub10">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ১১ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub11">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">বিষয় ১২ </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="sub12">
                        </div>
                    </div> -->
                @endif
                <div class="callout callout-info">
                    <h4>
                        Attach Required File (প্রযোজ্য ফাইলগুলো সংযুক্ত করুন)
                    </h4>
                </div>
                @if($type == 'birth')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="">Birth Certificate (জন্ম সনদ - আবশ্যক)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="birth_certificate" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d13"></div>
                </div>
                @endif
                @if($type == 'death')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="">Death Certificate (মৃত সনদ - আবশ্যক)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="death_certificate" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d13"></div>
                </div>
                @endif
                @if($type == 'birth' || $type == 'death')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="" data-original-title="">Citizen Certificate (নাগরিক সনদ)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="citizen_certificate" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d75"></div>
                </div>
                @else
                @if($type == 'registration')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="" data-original-title="">Regisration Card (রেজিস্ট্রেশন কার্ড)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="reg_card" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d75"></div>
                </div>
                @endif
                @if($type == 'admit')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="" data-original-title="">Admit Card (প্রবেশ পত্র)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="admit_card" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d75"></div>
                </div>
                @endif
                @if($type == 'number')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="" data-original-title="">Mark Sheet (নম্বর পত্র)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="marksheet" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d75"></div>
                </div>
                @endif
                @if($type == 'certificate')
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="" data-original-title="SSC/সমমানের সনদ">SSC/সমমানের সনদ</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="ssc_certificate" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d157"></div>
                </div>
                @endif
                <div class="form-group">
                    <label class="control-label col-sm-7"><span data-toggle="tooltip" title="">Board Testimonial (পাসকৃত শিক্ষা প্রতিষ্ঠানের সংশ্লিষ্ট বোর্ডের অনুমতিপত্র - আবশ্যক)</span></label>
                    <div class="col-sm-3" style="position: relative;">
                        <input type="file" name="board_testimonial" data-id="app_photo" class="form-control number" accept=".gif,.jpg,.jpeg,.png">
                    </div>
                    <div class="col-sm-3" id="d158"></div>
                </div>
                @endif
                <input type="hidden" id="total_file" value="10">
                <div class="form-group">
                    <div class="checkbox col-sm-10 col-sm-offset-1"><label><input type="checkbox" id="dataconfirm" style="margin-top: 30px;" value="1">
                            <div class="alert alert-info" data-toggle="tooltip" title="" data-original-title="শর্তটি পড়ে সম্মত হলে বামপাশ থেকে টিক দিন।"><b>I have read the instruction and agreed that all informations are correct otherwise this application can be rejected. (আমি এই মর্মে প্রত্যয়ন করছি যে, উপরে বর্ণিত সমতুল্য সনদের জন্য আবেদনের নিয়মাবলি পড়েছি এবং সেই অনুযায়ী আবেদন ফরম পূরণ করেছি। আবেদনে বর্ণিত সকল তথ্য সঠিক আছে । কোন ভূল বা অসম্পূর্ণ তথ্যের জন্য আবেদনটি বোর্ড কর্তৃপক্ষ বাতিল করতে পারে।)</b></div>
                        </label></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6">
                        <!-- <input type="submit" value="Submit" id="certificate_form_submit" style="display: none;"> -->
                        <input type="submit" class="btn btn-success btn-lg btn-block" value="Submit" id="certificate_form_save" data-toggle="tooltip" title="" data-original-title="উপরের শর্তটি পড়ে সম্মত হলে বামপাশ থেকে টিক দিন।">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style type="text/css">
        .exam_title {
            width: 250px;
            border: 1px solid;
            text-align: center;
            margin: 30px auto 10px auto;
        }

        .exam_group {
            display: none;
        }
    </style>
</section>
<!-- /.content -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.gender').on('change', function() {
            $('.gender').not(this).prop('checked', false);
        });
        $('.eexam').on('change', function() {
            $('.eexam').not(this).prop('checked', false);
            if(this.id=='ejsc'){
                $('.exam_group').hide();
                $('.jsc_group').show();
                $('#exam_name').val('jsc');
            }
            if(this.id=='essc'){
                $('.exam_group').hide();
                $('.ssc_group').show();
                $('#exam_name').val('ssc');
            }
            if(this.id=='ehsc'){
                $('.exam_group').hide();
                $('.hsc_group').show();
                $('#exam_name').val('hsc');
            }
            if(this.id=='ebsc'){
                $('.exam_group').hide();
                $('.bsc_group').show();
                $('#exam_name').val('bsc');
            }
            if(this.id=='emsc'){
                $('.exam_group').hide();
                $('.msc_group').show();
                $('#exam_name').val('msc');
            }
        });
        @if($type == 'birth')
        $('.menu-birth').addClass('active');
        $('.menu-death').removeClass('active');
        $('.menu-number').removeClass('active');
        $('.menu-certificate').removeClass('active');
        $('.menu-registration').removeClass('active');
        $('.menu-home').removeClass('active');

        @elseif($type == 'death')
        $('.menu-death').addClass('active');
        $('.menu-birth').removeClass('active');
        $('.menu-number').removeClass('active');
        $('.menu-certificate').removeClass('active');
        $('.menu-registration').removeClass('active');
        $('.menu-home').removeClass('active');

        @elseif($type == 'number')
        $('.menu-number').addClass('active');
        $('.menu-birth').removeClass('active');
        $('.menu-death').removeClass('active');
        $('.menu-certificate').removeClass('active');
        $('.menu-registration').removeClass('active');
        $('.menu-home').removeClass('active');

        @elseif($type == 'certificate')
        $('.menu-certificate').addClass('active');
        $('.menu-birth').removeClass('active');
        $('.menu-death').removeClass('active');
        $('.menu-number').removeClass('active');
        $('.menu-registration').removeClass('active');
        $('.menu-home').removeClass('active');

        @elseif($type == 'registration')
        $('.menu-registration').addClass('active');
        $('.menu-certificate').removeClass('active');
        $('.menu-birth').removeClass('active');
        $('.menu-death').removeClass('active');
        $('.menu-number').removeClass('active');
        $('.menu-home').removeClass('active');
        @endif
    });
</script>
@endsection