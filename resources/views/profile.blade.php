@extends('layouts.app')
@section('title','Profile')
@section('content')
<section class="py-5">
    <div class="container">
        <div class="d-flex align-items-start row" style="margin-top: 30px;">
            <!-- ////////////////sidenav here -->
            <div class="aiz-user-sidenav-wrap pt-4 position-relative z-1 shadow-sm col-md-3">
                <div class="absolute-top-right d-xl-none">
                    <button class="btn btn-sm p-2" data-toggle="class-toggle" data-target=".aiz-mobile-side-nav" data-same=".mobile-side-nav-thumb">
                        <i class="las la-times la-2x"></i>
                    </button>
                </div>
                <div class="absolute-top-left d-xl-none">
                    <a class="btn btn-sm p-2" href="https://circle.com.bd/logout">
                        <i class="las la-sign-out-alt la-2x"></i>
                    </a>
                </div>
                <div class="aiz-user-sidenav rounded overflow-hidden  c-scrollbar-light">
                    <div class="px-4 text-left mb-4">
                        <span class="avatar avatar-md mb-3">
                            <img src="https://circle.com.bd/public/assets/img/avatar-place.png" class="image rounded-circle" onerror="this.onerror=null;this.src='https://circle.com.bd/public/assets/img/avatar-place.png';">
                        </span>
                        <h4 class="h5 fw-600">{{auth()->user()->name}}
                            <span class="ml-2">
                                <i class="las la-check-circle" style="color:green"></i>
                            </span>
                        </h4>
                    </div>
                    <div class="sidemnenu mb-3">
                        <ul class="aiz-side-nav-list metismenu" data-toggle="aiz-side-menu" style="padding: 0px; list-style: none;">
                            <li class="aiz-side-nav-item" style="padding: 10px 0px;">
                                <a href="{{url('profile')}}" class="aiz-side-nav-link ">
                                    <i class="las la-user aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Profile</span>
                                </a>
                            </li>
                            <li class="aiz-side-nav-item">
                                <a href="{{url('applications')}}" class="aiz-side-nav-link ">
                                    <i class="las la-money-bill aiz-side-nav-icon"></i>
                                    <span class="aiz-side-nav-text">Applications</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="aiz-user-panel col-md-9">
                <div class="aiz-titlebar mt-2 mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h1 class="h3 m-0 text-left">Profile</h1>
                        </div>
                    </div>
                </div>
                <div id="field_error"></div>
                <form enctype="multipart/form-data" action="{{url('user/update')}}" method="post">
                    @csrf
                    <div class="card">
                    @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{!! \Session::get('success') !!}</li>
                        </ul>
                    </div>
                    @endif
                        <div class="p-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name <span class="text-primary">*</span></label>
                                        <input type="hidden" class="form-control" value="1" placeholder="Enter Name" name="user_id" required="">
                                        <input type="text" class="form-control" value="{{auth()->user()->name}}" placeholder="Enter Name" name="name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mobile Number <span class="text-primary">*</span></label>
                                        <input type="number" class="form-control" placeholder="Enter Mobile Number" value="{{auth()->user()->mobile}}" name="mobile" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email Address <span class="text-primary">*</span></label>
                                        <input type="email" class="form-control" value="{{auth()->user()->email}}" placeholder="Enter Email" name="email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Current Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="currentPassword">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Mew Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="newPassword">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Password" name="confirmPassword">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection