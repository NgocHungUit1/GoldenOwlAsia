<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>

<head>
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}">


    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{asset('public/backend/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css" />
    <link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css" />

    <!-- calendar -->
    <link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/backend/js/morris.js')}}"></script>
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="index.html" class="logo">
                    Admin
                </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-success">8</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <li>
                                <p class="">You have 8 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Target Sell</h5>
                                            <p>25% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="45">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Product Delivery</h5>
                                            <p>45% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="78">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Payment collection</h5>
                                            <p>87% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="60">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="task-info clearfix">
                                        <div class="desc pull-left">
                                            <h5>Target Sell</h5>
                                            <p>33% , Deadline 12 June’13</p>
                                        </div>
                                        <span class="notification-pie-chart pull-right" data-percent="90">
                                            <span class="percent"></span>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="external">
                                <a href="#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-important">4</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have 4 Mails</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                    <span class="subject">
                                        <span class="from">Jonathan Smith</span>
                                        <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Hello, this is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="images/1.png"></span>
                                    <span class="subject">
                                        <span class="from">Jane Doe</span>
                                        <span class="time">2 min ago</span>
                                    </span>
                                    <span class="message">
                                        Nice admin template
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                    <span class="subject">
                                        <span class="from">Tasi sam</span>
                                        <span class="time">2 days ago</span>
                                    </span>
                                    <span class="message">
                                        This is an example msg.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                    <span class="subject">
                                        <span class="from">Mr. Perfect</span>
                                        <span class="time">2 hour ago</span>
                                    </span>
                                    <span class="message">
                                        Hi there, its a test
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                    <!-- notification dropdown start-->
                    <li id="header_notification_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <i class="fa fa-bell-o"></i>
                            <span class="badge bg-warning">3</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>Notifications</p>
                            </li>
                            <li>
                                <div class="alert alert-info clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Server #1 overloaded.</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-danger clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Server #2 overloaded.</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="alert alert-success clearfix">
                                    <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                                    <div class="noti-info">
                                        <a href="#"> Server #3 overloaded.</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </li>
                    <!-- notification dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <li>
                        <input type="text" class="form-control search" placeholder=" Search">
                    </li>
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{('public/backend/images/2.png')}}">
                            <span class="username">
                                <?php

                                $name = Auth::user()->admin_name;
                                if ($name) {
                                    echo $name;
                                }
                                ?>

                            </span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                            <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{URL::to('/logout-auth')}}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{url('/dashboard')}}">
                                <i class="fa fa-dashboard"></i>
                                <span>Tổng quan</span>
                            </a>
                        </li>


                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Slider</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/manage-slider')}}">Liệt kê slider</a></li>
                                <li><a href="{{URL::to('/add-slider')}}">Thêm slider</a></li>
                            </ul>
                        </li>

                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Đơn hàng</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/manage-order')}}">Quản lý đơn hàng</a></li>


                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Mã giảm giá</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/insert-coupon')}}">Quản lý mã giảm giá</a></li>
                                <li><a href="{{URL::to('/list-coupon')}}">Liệt kê mã giảm giá</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Vận chuyển</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/delivery')}}">Quản lý vận chuyển</a></li>
                                <li><a href="{{URL::to('/select-feeship')}}">Liệt kê vận chuyển</a></li>


                            </ul>
                        </li>

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Danh mục sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/add-category-product')}}">thêm sản phẩm</a></li>
                                <li><a href="{{url('/all-category-product')}}">danh mục sản phẩm</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Thương hiệu sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-brand-product')}}">Thêm hiệu sản phẩm</a></li>
                                <li><a href="{{URL::to('/all-brand-product')}}">Liệt kê thương hiệu sản phẩm</a></li>

                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span> Sản phẩm</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-product')}}">Thêm sản phẩm</a></li>
                                <li><a href="{{URL::to('/all-product')}}">Liệt kê sản phẩm</a></li>


                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span> Video</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/video')}}">Thêm Video</a></li>



                            </ul>
                        </li>
                        @hasrole(['admin'])
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Users</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{URL::to('/add-users')}}">Thêm user</a></li>
                                <li><a href="{{URL::to('/users')}}">Liệt kê user</a></li>

                            </ul>
                        </li>
                        @endhasrole

                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">

                @yield('admin_content')



            </section>
            <!--main content end-->
        </section>
        <script src="{{asset('public/backend/js/bootstrap.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.dcjqaccordion.2.7.js')}}"></script>
        <script src="{{asset('public/backend/js/scripts.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.form-validator.min.js')}}"></script>
        <script src="{{asset('public/backend/js/jquery.dataTables.min.js')}}"></script>
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                var donut = Morris.Donut({
                    element: 'donut',
                    resize: true,
                    colors: [
                        '#ce616a',
                        '#61a1ce',
                        '#ce8f61',
                        '#f5b942',


                    ],
                    data: [{
                            label: "Sản phẩm",
                            value: <?php echo $product ?>
                        },
                        {
                            label: "Khách hàng",
                            value: <?php echo $customer ?>
                        },
                        {
                            label: "Video",
                            value: <?php echo $videoo ?>
                        },
                        {
                            label: "Đơn hàng",
                            value: <?php echo $order ?>
                        }


                    ]


                });
            });
        </script>
        <script type="text/javascript">
            $(function() {
                $("#datepicker").datepicker({
                    dateFormat: "yy-mm-dd",


                });
                $("#datepicker2").datepicker({
                    dateFormat: "yy-mm-dd",

                });

            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                chart30daysorder();
                var chart = new Morris.Bar({

                    element: 'myfirstchart',
                    lineColors: ['#819C79', '#fc8710', '#FF6541', 'A4ADD3', '766B56'],
                    parseTime: false,
                    hideHover: 'auto',
                    xkey: 'period',
                    ykeys: ['order', 'sales', 'profit', 'quantity'],
                    labels: ['Đơn hàng', 'Doanh số', 'Lợi nhuận', 'Số lượng'],



                });

                function chart30daysorder() {
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{url('/days-order')}}",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            _token: _token,

                        },

                        success: function(data) {


                            chart.setData(data);



                        }
                    });

                }
                $('.dashboard-filter').change(function() {
                    var dashboard_value = $(this).val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{url('/dashboard-filter')}}",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            _token: _token,
                            dashboard_value: dashboard_value

                        },

                        success: function(data) {


                            chart.setData(data);



                        }
                    });

                });
                $('#btn-dashboard-filter').click(function() {
                    var from_date = $('#datepicker').val();
                    var to_date = $('#datepicker2').val();
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{url('/filter-by-date')}}",
                        method: "POST",
                        dataType: "JSON",
                        data: {
                            _token: _token,
                            from_date: from_date,
                            to_date: to_date
                        },

                        success: function(data) {


                            chart.setData(data);



                        }
                    });

                });

            });
        </script>





        <script type="text/javascript">
            $(document).ready(function() {
                load_gallery();

                function load_gallery() {

                    var pro_id = $('.pro_id').val();;
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: "{{url('/select-gallery')}}",
                        method: "POST",

                        data: {
                            _token: _token,
                            pro_id: pro_id
                        },

                        success: function(data) {


                            $('#gallery_load').html(data);



                        }
                    });
                }
                $('#file').change(function() {
                    var error = '';
                    var files = $('#file')[0].files;
                    if (files.length > 3) {
                        error += '<p>Bạn chỉ được chọn tối đa 3 ảnh</p>';
                    } else if (files.length == '') {
                        error += '<p>Bạn không được bỏ trống</p>';
                    } else if (files.size > 2000000) {
                        error += '<p>file ảnh quá lớn</p>';
                    }
                    if (error == '') {

                    } else {
                        $('#file').val('');
                        $('#error_gallery').html('<span class="text-danger">' + error + '</span>');
                        return false;
                    }
                });
                $(document).on('blur', '.edit_gal_name', function() {
                    var gal_id = $(this).data('gal_id');
                    var gal_text = $(this).text();
                    var _token = $('input[name="_token"]').val();

                    $.ajax({
                        url: "{{url('/update-gallery-name')}}",
                        method: "POST",

                        data: {
                            _token: _token,
                            gal_id: gal_id,
                            gal_text: gal_text
                        },

                        success: function(data) {
                            load_gallery();

                            $('#error_gallery').html('<span class="text-danger">cập nhật thành công</span>');



                        }
                    });
                });
                $(document).on('click', '.delete_gallery', function() {
                    var gal_id = $(this).data('gal_id');

                    var _token = $('input[name="_token"]').val();
                    if (confirm('Are You Sure?')) {

                        $.ajax({
                            url: "{{url('/delete-gallery')}}",
                            method: "POST",

                            data: {
                                _token: _token,
                                gal_id: gal_id

                            },

                            success: function(data) {
                                load_gallery();

                                $('#error_gallery').html('<span class="text-danger">Xoa thanh cong</span>');



                            }
                        });
                    }
                });
                $(document).on('change', '.file_image', function() {
                    var gal_id = $(this).data('gal_id');
                    var image = document.getElementById("file-" + gal_id).files[0];
                    var form_data = new FormData();
                    form_data.append("file", document.getElementById("file-" + gal_id).files[0]);
                    form_data.append("gal_id", gal_id);





                    $.ajax({
                        url: "{{url('/update-gallery')}}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,

                        success: function(data) {
                            load_gallery();

                            $('#error_gallery').html('<span class="text-danger">update thanh cong</span>');



                        }
                    });

                });




            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {



                $(document).on('blur', '.fee_feeship_edit', function() {

                    var feeship_id = $(this).data('feeship_id');
                    var fee_value = $(this).text();
                    var _token = $('input[name="_token"]').val();
                    // alert(feeship_id);
                    // alert(fee_value);
                    $.ajax({
                        url: "{{url('/update-delivery')}}",
                        method: 'POST',
                        data: {
                            feeship_id: feeship_id,
                            fee_value: fee_value,
                            _token: _token
                        },
                        success: function(data) {
                            fetch_delivery();
                        }
                    });

                });

                $('.add_delivery').click(function() {

                    var city = $('.city').val();
                    var province = $('.province').val();
                    var wards = $('.wards').val();
                    var fee_ship = $('.fee_ship').val();
                    var _token = $('input[name="_token"]').val();
                    // alert(city);
                    // alert(province);
                    // alert(wards);
                    // alert(fee_ship);
                    $.ajax({
                        url: "{{url('/insert-delivery')}}",
                        method: 'POST',
                        data: {
                            city: city,
                            province: province,
                            _token: _token,
                            wards: wards,
                            fee_ship: fee_ship
                        },
                        success: function(data) {
                            alert('Thêm vận chuyển thành công')
                        }
                    });


                });
                $('.choose').on('change', function() {
                    var action = $(this).attr('id');
                    var ma_id = $(this).val();
                   
                    var _token = $('input[name="_token"]').val();
                    var result = '';
                   

                    if (action == 'city') {
                        result = 'province';
                    } else {
                        result = 'wards';
                    }
                    $.ajax({
                        url: "{{url('/select-delivery')}}",
                        method: 'POST',
                        data: {
                            action: action,
                            ma_id: ma_id,
                            _token: _token
                        },
                        success: function(data) {
                            $('#' + result).html(data);
                        }
                    });
                });
            })
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                load_video();

                function load_video() {



                    $.ajax({
                        url: "{{url('/select-video')}}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        success: function(data) {


                            $('#video_load').html(data);



                        }
                    });

                }
                $(document).on('click', '.btn-add-video', function() {
                    var video_title = $('.video_title').val();
                    var video_slug = $('.video_slug').val();
                    var video_link = $('.video_link').val();
                    var video_desc = $('.video_desc').val();


                    var form_data = new FormData();
                    form_data.append("file", document.getElementById("file_img_video").files[0]);
                    form_data.append("video_title", video_title);
                    form_data.append("video_slug", video_slug);
                    form_data.append("video_link", video_link);
                    form_data.append("video_desc", video_desc);


                    $.ajax({
                        url: "{{url('/insert-video')}}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,
                        success: function(data) {
                            load_video();
                            $('#message').html('<span class="text text-success">Thêm Video thành công</span>');

                        }
                    });

                });
                $(document).on('blur', '.video_edit', function() {
                    var video_id = $(this).data('video_id');
                    var video_type = $(this).data('video_type');
                    if (video_type == "video_title") {
                        var video_update = $('#' + video_type + '_' + video_id).text();
                        var video_check = video_type;
                    } else if (video_type == "video_slug") {
                        var video_update = $('#' + video_type + '_' + video_id).text();
                        var video_check = video_type;
                    } else if (video_type == "video_link") {
                        var video_update = $('#' + video_type + '_' + video_id).text();
                        var video_check = video_type;
                    } else {
                        var video_update = $('#' + video_type + '_' + video_id).text();
                        var video_check = video_type;
                    }

                    $.ajax({
                        url: "{{url('/update-video')}}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },

                        data: {
                            video_id: video_id,
                            video_check: video_check,
                            video_update: video_update
                        },

                        success: function(data) {
                            load_video();

                            $('#message').html('<span class="text-success">Update Video thành công</span>');



                        }
                    });
                });
                $(document).on('change', '.file_img_video', function() {
                    var video_id = $(this).data('video_id');
                    var image = document.getElementById("file-video-" + video_id).files[0];
                    var form_data = new FormData();
                    form_data.append("file", document.getElementById("file-video-" + video_id).files[0]);
                    form_data.append("video_id", video_id);

                    $.ajax({
                        url: "{{url('/update-video-img')}}",
                        method: "POST",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: form_data,
                        contentType: false,
                        cache: false,
                        processData: false,

                        success: function(data) {
                            load_video();
                            $('#message').html('<span class="text-success">Update Video thành công</span>');



                        }
                    });



                });
                $(document).on('click', '.btn-delete-video', function() {
                    var video_id = $(this).data('video_id');

                    if (confirm('Are you sure?')) {


                        $.ajax({
                            url: "{{url('/delete-video')}}",
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },

                            data: {
                                video_id: video_id,

                            },
                            success: function(data) {
                                load_video();
                                $('#message').html('<span class="text-success">Xóa Video thành công</span>');

                            }
                        });
                    }

                });



            });
        </script>



        <script type="text/javascript">
            $('.update_quantity_order').click(function() {
                var order_product_id = $(this).data('product_id');
                var order_qty = $('.order_qty_' + order_product_id).val();
                var order_code = $('.order_code').val();
                var _token = $('input[name="_token"]').val();
                // alert(order_product_id);
                // alert(order_qty);
                // alert(order_code);
                $.ajax({
                    url: "{{url('/update-qty')}}",

                    method: 'POST',

                    data: {
                        _token: _token,
                        order_product_id: order_product_id,
                        order_qty: order_qty,
                        order_code: order_code
                    },
                    // dataType:"JSON",
                    success: function(data) {

                        alert('Cập nhật số lượng thành công');

                        location.reload();




                    }
                });

            });
        </script>


        <script type="text/javascript">
            $('.order_details').change(function() {
                var order_status = $(this).val();
                var order_id = $(this).children(":selected").attr("id");
                var _token = $('input[name="_token"]').val();

                //lay ra so luong
                quantity = [];
                $("input[name='product_sales_quantity']").each(function() {
                    quantity.push($(this).val());
                });
                //lay ra product id
                order_product_id = [];
                $("input[name='order_product_id']").each(function() {
                    order_product_id.push($(this).val());
                });
                j = 0;
                for (i = 0; i < order_product_id.length; i++) {
                    //so luong khach dat
                    var order_qty = $('.order_qty_' + order_product_id[i]).val();
                    //so luong ton kho
                    var order_qty_storage = $('.order_qty_storage_' + order_product_id[i]).val();

                    if (parseInt(order_qty) > parseInt(order_qty_storage)) {
                        j = j + 1;
                        if (j == 1) {
                            alert('Số lượng bán trong kho không đủ');
                        }
                        $('.color_qty_' + order_product_id[i]).css('background', '#000');
                    }
                }


                $.ajax({
                    url: "{{url('/update-order-qty')}}",
                    method: 'POST',
                    data: {
                        _token: _token,
                        order_status: order_status,
                        order_id: order_id,
                        quantity: quantity,
                        order_product_id: order_product_id
                    },
                    success: function(data) {
                        alert('Thay đổi tình trạng đơn hàng thành công');
                        location.reload();
                    }
                });



            });
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').DataTable();
            });
        </script>
        <script type="text/javascript">
            $.validate({

            });
        </script>
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('ckeditor');
            CKEDITOR.replace('ckeditor1');
            CKEDITOR.replace('ckeditor2');
            CKEDITOR.replace('ckeditor3');
            CKEDITOR.replace('id4');
        </script>

        <!-- morris JavaScript -->
        <script>
            $(document).ready(function() {
                //BOX BUTTON SHOW AND CLOSE
                jQuery('.small-graph-box').hover(function() {
                    jQuery(this).find('.box-button').fadeIn('fast');
                }, function() {
                    jQuery(this).find('.box-button').fadeOut('fast');
                });
                jQuery('.small-graph-box .box-close').click(function() {
                    jQuery(this).closest('.small-graph-box').fadeOut(200);
                    return false;
                });

                //CHARTS
                function gd(year, day, month) {
                    return new Date(year, month - 1, day).getTime();
                }

                graphArea2 = Morris.Area({
                    element: 'hero-area',
                    padding: 10,
                    behaveLikeLine: true,
                    gridEnabled: false,
                    gridLineColor: '#dddddd',
                    axes: true,
                    resize: true,
                    smooth: true,
                    pointSize: 0,
                    lineWidth: 0,
                    fillOpacity: 0.85,
                    data: [{
                            period: '2015 Q1',
                            iphone: 2668,
                            ipad: null,
                            itouch: 2649
                        },
                        {
                            period: '2015 Q2',
                            iphone: 15780,
                            ipad: 13799,
                            itouch: 12051
                        },
                        {
                            period: '2015 Q3',
                            iphone: 12920,
                            ipad: 10975,
                            itouch: 9910
                        },
                        {
                            period: '2015 Q4',
                            iphone: 8770,
                            ipad: 6600,
                            itouch: 6695
                        },
                        {
                            period: '2016 Q1',
                            iphone: 10820,
                            ipad: 10924,
                            itouch: 12300
                        },
                        {
                            period: '2016 Q2',
                            iphone: 9680,
                            ipad: 9010,
                            itouch: 7891
                        },
                        {
                            period: '2016 Q3',
                            iphone: 4830,
                            ipad: 3805,
                            itouch: 1598
                        },
                        {
                            period: '2016 Q4',
                            iphone: 15083,
                            ipad: 8977,
                            itouch: 5185
                        },
                        {
                            period: '2017 Q1',
                            iphone: 10697,
                            ipad: 4470,
                            itouch: 2038
                        },

                    ],
                    lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
                    xkey: 'period',
                    redraw: true,
                    ykeys: ['iphone', 'ipad', 'itouch'],
                    labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
                    pointSize: 2,
                    hideHover: 'auto',
                    resize: true
                });


            });
        </script>
        <!-- calendar -->
        <script type="text/javascript" src="js/monthly.js"></script>
        <script type="text/javascript">
            $(window).load(function() {

                $('#mycalendar').monthly({
                    mode: 'event',

                });

                $('#mycalendar2').monthly({
                    mode: 'picker',
                    target: '#mytarget',
                    setWidth: '250px',
                    startHidden: true,
                    showTrigger: '#mytarget',
                    stylePast: true,
                    disablePast: true
                });

                switch (window.location.protocol) {
                    case 'http:':
                    case 'https:':
                        // running on a server, should be good.
                        break;
                    case 'file:':
                        alert('Just a heads-up, events will not work when run locally.');
                }

            });
        </script>

        <script type="text/javascript">
            function ChangeToSlug() {
                var slug;

                //Lấy text từ thẻ input title
                slug = document.getElementById("slug").value;
                slug = slug.toLowerCase();
                //Đổi ký tự có dấu thành không dấu
                slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
                slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
                slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
                slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
                slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
                slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
                slug = slug.replace(/đ/gi, 'd');
                //Xóa các ký tự đặt biệt
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //Đổi khoảng trắng thành ký tự gạch ngang
                slug = slug.replace(/ /gi, "-");
                //Đổi nhiều ký tự gạch ngang liên tiếp thành 1 ký tự gạch ngang
                //Phòng trường hợp người nhập vào quá nhiều ký tự trắng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //Xóa các ký tự gạch ngang ở đầu và cuối
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox có id “slug”
                document.getElementById('convert_slug').value = slug;
            }
        </script>
        

        <!-- //calendar -->
</body>

</html>