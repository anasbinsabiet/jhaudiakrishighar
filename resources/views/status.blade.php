@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><br><br><br><br><br>
            <br>
            <div class="alert alert-success bg-success" role="alert" id="alert" style="display: none;"></div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">আবেদনের সর্বশেষ অবস্থা</div>
                </div>
                <div class="box-body">
                    
                    <form class="form-horizontal" method="post" id="check_status">
                        <input type="hidden" name="type" value="">
                        <div class="form-group">
                            <label class="control-label col-sm-4">এপ্লিকেশন আইডি</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="app_id" name="id" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">আবেদনকারীর ইমেইল</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">পাসওয়ার্ড</label>
                            <div class="col-sm-6">
                                <input type="password" class="form-control" id="password" name="pass" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-3">
                                <a href="//efile.dhakaeducationboard.gov.bd/index.php/eservice/menu" class="btn btn-danger btn-block">Back</a>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary btn-block">Find</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.menu-status').addClass('active');
        $('.menu-birth').removeClass('active');
        $('.menu-death').removeClass('active');
        $('.menu-number').removeClass('active');
        $('.menu-certificate').removeClass('active');
        $('.menu-registration').removeClass('active');
        $('.menu-home').removeClass('active');
    });

    $("#check_status").submit(function(e) {
        e.preventDefault();
        var app_id = $('#app_id').val();
        var email = $('#email').val();
        var password = $('#password').val();
        $.ajax({
            url: "{{ route('check.status') }}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                app_id: app_id,
                email: email,
                password: password,
            },
            success: function(response) {
                $('#alert').show();
                $('#alert').html(response);
            },
        });
    });
</script>
@endsection