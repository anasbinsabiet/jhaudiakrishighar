@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6"><br><br><br><br><br>
            <br>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="box-title">আবেদনের পাসওয়ার্ড পরিবর্তন</div>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label class="control-label col-sm-4">এপ্লিকেশন আইডি</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="id" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4">মোবাইল নম্বর</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="mobile" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-3">
                                <a href="//efile.dhakaeducationboard.gov.bd/index.php/eservice/menu" class="btn btn-danger btn-block">Back</a>
                            </div>
                            <div class="col-sm-3">
                                <button type="submit" class="btn btn-primary btn-block">Change</button>
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
        $('.menu-reset').addClass('active');
        $('.menu-status').removeClass('active');
        $('.menu-birth').removeClass('active');
        $('.menu-death').removeClass('active');
        $('.menu-number').removeClass('active');
        $('.menu-certificate').removeClass('active');
        $('.menu-registration').removeClass('active');
        $('.menu-home').removeClass('active');
    });
</script>
@endsection