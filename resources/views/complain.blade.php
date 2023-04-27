@extends('layouts.app')
@section('content')
<section class="content">
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>

    <!-- <div class="callout callout-info">
        <h4 style="color: red;">নিয়মাবলী !</h4>
        <h4> ফী পরিশোধ হলে অভিযোগের আবেদন পত্র ও অভিযোগের স্বপক্ষে কাগজপত্র সাবমিট করতে পারবেন। আবেদন ফী ৩০০০ টাকা। আবেদনকারী ফরম সঠিক ভাবে পূরণ করে "Submit" বাটনে ক্লিক করবে এবং পরবর্তী প্যানেলে অভিযোগের আবেদন পত্র ও অভিযোগের স্বপক্ষে কাগজপত্র সাবমিট করবে। সোনালী সেবার মাধমে ফী পরিশোধ করতে হবে, অন্যথায় আবেদন গ্রহণযোগ্য হবে না। আবেদনের সর্বশেষ অবস্থা (Last Update) দেখতে View Application status বাটনে ক্লিক করে মোবাইল নম্বর এবং সিকিউরিটি কোড দিয়ে লগইন করতে হবে।
        </h4>
    </div> -->

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">অভিযোগ পত্র</h3>
        </div>
        <div class="box-body">
            <form id="submit_form" method="post" action="" enctype="multipart/form-data">
                <div class="form-horizontal">
                    <div class="col-md-12">
                        <div class="box-body">


                            <div class="col-md-12">


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label text-left">অভিযোগকারীর নাম(English only) :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control txt off" maxlength="50" required="" name="name" id="name" placeholder="অভিযোগকারীর নাম(English only)" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label text-left ">জাতীয় পরিচয়পত্র(NID) নম্বর:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control txt off" maxlength="50" required="" name="nid" id="nid" placeholder="NID" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label text-left">জাতীয় পরিচয়পত্রের স্ক্যান কপি:</label>

                                        <div class="col-sm-9">
                                            <input required="" type="file" name="nid_file" id="nid_file">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label text-left">মোবাইল নাম্বার :</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control number" pattern=".{11,}" required="" title="11 digit minimum" maxlength="13" id="mobile" name="mobile" placeholder="" value="">
                                            <span class="bg-danger"> Important! Security code will be sent to this number.</span>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-3 control-label text-left ">ই-মেইল:</label>
                                        <div class="col-sm-9">
                                            <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" type="text" class="form-control txt off" maxlength="50" name="email" id="email" placeholder="email" value="">
                                        </div>
                                    </div>
                                </div>







                            </div>

                            <div class="col-sm-12">
                                <div class="box-footer">


                                    <a href="//erp.dhakaeducationboard.gov.bd/index.php/complaint_box/login">
                                        <button type="button" class="btn btn-lg btn-info pull-left">View Application status</button>
                                    </a>



                                    <button type="submit" id="submit_application" class="btn btn-lg btn-info pull-right">Submit </button>

                                </div><!-- /.box-footer -->
                            </div>
                        </div>


                        <div id="template" style="display:none">


                            <p>তারিখ:&nbsp;26-11-2021 </p>

                            <p>বরাবর</p>

                            <p>চেয়ারম্যান,</p>

                            <p>মাধ্যমিক ও উচ্চমাধ্যমিক শিক্ষা বোর্ড, ঢাকা</p>

                            <p>&nbsp;</p>

                            <p>বিষয়: <span id="txt_title"></span></p>

                            <p>জনাব,</p>

                            <p>সবিনয় নিবেদন এই যে </p>

                            <p>&nbsp;</p>

                            <p>&nbsp;</p>

                            <p>অতএব বিনীত প্রার্থনা, </p>

                            <p>&nbsp;</p>

                            <p>নিবেদক</p>

                            <p>নাম:&nbsp;<span id="txt_name"></span></p>

                            <p>মোবাইল নম্বর&nbsp;:&nbsp;<span id="txt_mobile_number"></span></p>
                            <p>NID নম্বর&nbsp;:&nbsp;<span id="txt_nid"></span></p>

                            <p>সংযুক্তি:&nbsp;</p>

                            <p>&nbsp;</p>

                            <p>&nbsp;</p>

                            <p>&nbsp;</p>
                        </div>


                        <div style="clear:both"></div>


                    </div><!-- /.box -->


                </div>
            </form>
            <!-- /.box-body -->
        </div><!-- /.box -->


        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.editorConfig = function(config) {
                config.language = 'es';
                config.uiColor = '#F7B42C';
                config.height = 500;
                config.toolbarCanCollapse = true;

            };
            CKEDITOR.replace('details');


            $('input:text').on('keyup', function() {

                $('#txt_title').text($('#title').val());
                $('#txt_name').text($('#name').val());
                $('#txt_mobile_number').text($('#mobile').val());
                $('#txt_nid').text($('#nid').val());


                CKEDITOR.instances.details.setData($('#template').html());
            })


            $('#details').on('click', function() {

                $('#details').val($('#template').html());
            })
        </script>

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title" id="myModalLabel">Notifications</h4>
                    </div>
                    <div class="modal-body">
                        <p id="msg"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <script src="//erp.dhakaeducationboard.gov.bd/assets/js/jquery.maskedinput.min.js"></script>
        <script src="//erp.dhakaeducationboard.gov.bd/assets/js/bootstrap.min.js"></script>
        <script src="//erp.dhakaeducationboard.gov.bd/assets/js/select2/select2.min.js"></script>
        <link href="//erp.dhakaeducationboard.gov.bd/assets/js/select2/select2.css" rel="stylesheet">
        <link href="//erp.dhakaeducationboard.gov.bd/assets/css/select2-bootstrap.css" rel="stylesheet">

        <style>
            .select2-container--default .select2-selection--single {
                height: 46px !important;
                padding: 10px 16px;
                font-size: 18px;
                line-height: 1.33;
                border-radius: 6px;
            }

            .select2-container--default .select2-selection--single .select2-selection__arrow b {
                top: 85% !important;
            }

            .select2-container--default .select2-selection--single .select2-selection__rendered {
                line-height: 26px !important;
            }

            .select2-container--default .select2-selection--single {
                border: 1px solid #CCC !important;
                box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset;
                transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            }

            .select2-container .select2-choice {

                height: 33px !important;
                border-radius: 0px !important;

            }
        </style>

        <script type="text/javascript">
            $('#mobile').mask('01999999999');
            $('#group option[value=5]').hide();
            $('#group option[value=6]').hide();
            $('#group option[value=7]').hide();
            $('#group option[value=11]').hide();
            $('#group option[value=12]').hide();
            $('#group option[value=13]').hide();


            $("#to_eiin").select2();

            //$(".exam_type").text("JSC ");

            var base_url = "//erp.dhakaeducationboard.gov.bd/index.php/";



            $(document).on("keyup", "#regno", function() {
                $('#roll').val('');
            })

            $(document).on("change", "#class", function() {
                $('#roll').val('');
                $('#regno').val('');
                if ($(this).val() == 9) {
                    $(".sub-title").text("Optional and 4th subject code");
                    $(".com-sub").show();
                    $(".exam_type").text("JSC ");

                } else {
                    $(".sub-title").text("Subject code");
                    $(".com-sub").hide();
                }
                if ($(this).val() == 10) {
                    $(".exam_type").text("JSC ");
                }

                if ($(this).val() == 11 || $(this).val() == 12) {
                    $(".exam_type").text("SSC ");
                }

            })

            $(document).on("change", "#to_eiin", function(event) {

                subjectCheck();


            })



            function checkform() {
                //seatCheck();
                subjectCheck();


                if (flag) {
                    $("#submit_application").click();
                }
                return false;
            }

            function subjectCheck() {
                var to_eiin = $("#to_eiin").val();
                if (to_eiin == '') {
                    return false;
                }
                var class_code = $("#class").val();
                $(".all_shift").show();
                $("#shift").val('').show();
                if (class_code == 11 || class_code == 12) {
                    $(".all_shift").hide();
                    $("#loader-holder").show();
                    var subject = $("#subject_code").val()
                    var to_eiin = $("#to_eiin").val();
                    var from_eiin = $("#from_eiin").val();

                    var roll = $("#roll").val();
                    var regno = $("#regno").val();
                    var shift = $("#shift").val();


                    $.post(base_url + "tc/isAllowedSubject", {
                        subject: subject,
                        to_eiin: to_eiin,
                        from_eiin: from_eiin,
                        class_code: class_code,
                        roll: roll,
                        regno: regno,
                        shift: shift
                    }, function(data) {

                        var results = $.parseJSON(data);


                        if (results['status'] == 'true') {
                            $("#loader-holder").hide();

                            var json = results['msg'];

                            $(json).each(function(i, val) {
                                $.each(val, function(k, v) {

                                    if (k == 'shift') {

                                        $("#shift").val(v).show();
                                        $("." + v).show();
                                        console.log(k + " : " + v);
                                    }


                                });
                            });





                        } else {
                            $("#loader-holder").hide();
                            $("#msg").text(results['msg']);
                            $("#myModal").modal('show');
                            $('#to_eiin').val('').trigger('change.select2');
                            return false;
                        }

                    });
                }

            }
            var flag = true;

            function seatCheck() {

                var class_code = $("#class").val();

                if (class_code == 11 || class_code == 12) {

                    $("#loader-holder").show();
                    var subject = $("#subject_code").val()
                    var to_eiin = $("#to_eiin").val();

                    var roll = $("#roll").val();
                    var regno = $("#regno").val();
                    var shift = $("#shift").val();


                    $.post(base_url + "tc/seatCheck", {
                        subject: subject,
                        to_eiin: to_eiin,
                        class_code: class_code,
                        roll: roll,
                        regno: regno,
                        shift: shift
                    }, function(data) {
                        if (data) {
                            $("#loader-holder").hide();
                            $("#msg").text(data);
                            $("#myModal").modal('show');
                            flag = false;
                            return false;


                        } else {
                            $("#loader-holder").hide();
                            flag = true;
                            return true;

                        }

                    });
                }

            }

            $(document).on("keyup", "#eiin", function() {
                var eiin = $(this).val();

                if ((eiin.length == 6)) {
                    $(".loader-holder").show();
                    $.post(base_url + "complaint_box/getInstitutenName", {
                        eiin: eiin
                    }, function(data) {
                        console.log(data);
                        //$("#subject_code").val(data.sub_code);
                        $("#ins_name").text(data.eiin_name);
                        $(".loader-holder").hide();

                    }, 'json');


                }
            })

            $(document).on("keyup", "#roll", function() {
                var roll = $(this).val();
                var regno = $("#regno").val();
                var len = 6;
                if (regno.indexOf('-') == -1) {
                    len = 6;
                } else {
                    len = 15;
                }
                if (roll.length == len) {
                    $("#loader-holder").show();
                    var board = $("#board").val()
                    var passing_year = $("#passing_year").val();
                    var regno = $("#regno").val();

                    if (passing_year < 1) {
                        alert("Please select passing year");
                        $("#loader-holder").hide();
                        return false;
                    }

                    var class_code = $("#class").val();
                    $.post(base_url + "tc/rollSearch", {
                        roll: roll,
                        board: board,
                        class_code: class_code,
                        passing_year: passing_year,
                        regno: regno
                    }, function(data) {



                        if (data.name) {
                            $("#name").val(data.name);
                            $("#fname").val(data.fname);
                            $("#mname").val(data.mname);
                            $("#subject_code").val(data.subject + ' ' + data.optional);
                            $("#group").val(data.group);
                            $("#from_eiin").val(data.eiin);
                            $("#medium").val(data.medium);

                            $("#class_roll").val(data.class_roll);
                            $("#section").val(data.section);

                            $('#to_eiin option[value=' + data.eiin + ']').remove();
                            $("#loader-holder").hide();

                            $('.off').prop('readonly', true);
                            $(".all").hide();

                            if (class_code != 9) {
                                $('#class_roll').prop('readonly', true);
                                $('#subject_code').prop('readonly', true);

                            } else {
                                //$(".all").show();
                            }
                            if (class_code == 9 || class_code == 10) {

                                if (data.group == 1) {
                                    $("#group").val(0);
                                } else if (data.group == 2) {
                                    $("#group").val(2);
                                } else if (data.group == 3) {
                                    $("#group").val(8);
                                }
                                $(".info-head").text("JSC ");
                                $(".exam_type").text("JSC");
                                $(".all_shift").show();


                            } else {
                                $(".info-head").text("SSC ");
                                $(".exam_type").text("SSC");
                            }

                            if (class_code == 9) {
                                $("#from_eiin").select2();
                            } else {

                                //  $('#from_eiin').prop('readonly', true);
                                $('#from_eiin option:not(:selected)').show();
                                $('#from_eiin option:not(:selected)').prop('disabled', true);
                                $('#from_eiin option:not(:selected)').hide();
                                $('#group option:not(:selected)').prop('disabled', true);
                                $('#group option:not(:selected)').show();
                                $('#group option:not(:selected)').hide();
                            }


                        } else {
                            $("#loader-holder").hide();
                            $("#msg").text(data);
                            $("#myModal").modal('show');

                        }



                    }, 'json')
                }



            })
        </script>
    </div>
</section>
<!-- /.content -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.menu-complain').addClass('active');
        $('.menu-reset').removeClass('active');
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