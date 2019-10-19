<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Online Skets, Wireframe &amp; UI Prototyping Tool · Skets</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css"/>
    <link href="<?php echo base_url(); ?>assets/css/my_css.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/w3_StyleSheet.css" rel="stylesheet">

    <!--- PAGE 2 links start--->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>


    <!--- PAGE 2 links end --->

    <style>
        table {
            border-collapse: collapse;
        }

        table, td, th {
            border: 1px solid black;
        }

        table thead tr {
            display: block;
        }

        table th, table td {
            width: 900px;
        }

        table tbody {
            display: block;
            height: 581px;
            overflow: auto;
        }

        p {
            font-family: cursive;
            color: #555;
            bottom: .5em;
            left: .5em;
            right: .5em;
            font-size: .8em;
            max-height: 2.5em;
            margin-top: 10px;
        }


    </style>
</head>


<body bgcolor="#f2f2f2">

<div id="loader"></div>

<div class="side_toolsbar">
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3 text-center">
                <div class="dropdown text-center">
                    <img src="<?php echo base_url(); ?>assets/images/sketch.png"
                         class="btn btn-block dropdown-toggle img-responsive" type="button"
                         style="height:120px; background-color:white;" data-toggle="dropdown"/>

                    <ul class="dropdown-menu">
                        <?php
                        $loginsucces = $this->session->userdata('loginsucces');

                        if ($loginsucces == 'loginsucces') {
                            ?>
                            <li><a href="#" class="saveindb" id="save">Save</a></li>
                            <li><a href="#" id="s_as">Save as</a></li>
                            <li><a href="#" id="download">Download <img
                                            src="<?php echo base_url(); ?>assets/Webcons/43-01.png"
                                            class="img-responsive pull-right dropFull"
                                            style="width:1em; margin-top:3px;"/></a></li>
                        <?php } ?>

                        <li><a href="javascript:void(0);" id="print">Print<img
                                        src="<?php echo base_url(); ?>assets/Webcons/34-01.png"
                                        class="img-responsive pull-right dropFull" style="width:1em; margin-top:3px;"/></a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-3">
                <ul class="navbar-nav nav">

                    <li><a data-toggle="tab" href="#home" class="navbar-brand">Stancile</a></li>
                    <li><a data-toggle="tab" href="#menu1" class="navbar-brand">Icons</a></li>
                    <li><a data-toggle="tab" href="#menu2" class="navbar-brand ">Projects</a></li>
                </ul>
            </div>

        </div>

        <div class="row">
            <div class="col-sm-3">
                <div class="tab-content">
                    <div id="home" class="tab-pane fade in active w3-animate-left">

                        <table border="1" class=" w3-table table-bordered">
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/46-01.png"
                                             class="img-responsive avatar dropFull"/>
                                        <p>Avatar</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/44-01.png"
                                             class="img-responsive map dropFull"/>
                                        <p>Map</p>
                                    </div>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/30-01.png"
                                             class="img-responsive tool_1 dropFull"/>
                                        <p>Browser</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/window.png"
                                             class="img-responsive tool_Hoz_scol dropFull"/>
                                        <p>Window</p>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/61-01.png"
                                             class="img-responsive LoginForm dropFull"/>
                                        <p>Login Form</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/62-01.png"
                                             class="img-responsive SignUpForm dropFull"/>
                                        <p>SignUp Form</p>
                                    </div>
                                </td>

                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/34-01.png"
                                             data-toolupdate-id="4" data-name-id="34-01"
                                             class="img-responsive tool_pb dropFull "/>
                                        <p>Audio player</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/33-01.png" data-name-id="33-01"
                                             class="img-responsive tool_33-01 dropFull"/>
                                        <p>Video player</p>
                                    </div>

                                </td>

                            </tr>
                            <tr>

                                <td>

                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/31-01.png"
                                             data-toolupdate-id="5" data-name-id="31-01"
                                             class="img-responsive tool_scrol dropFull"/>
                                        <p>Scroll bar</p>
                                    </div>
                                </td>
                                <td>

                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/32-01.png" data-name-id="32-01"
                                             class="img-responsive tool_32-10 dropFull"/>
                                        <p>Scroll bar veritical</p>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/35-01.png" data-name-id="35-01"
                                             class="img-responsive tool_35-01 dropFull"/>
                                        <p>Menu bar</p>
                                    </div>

                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/36-01.png" data-name-id="36-01"
                                             class="img-responsive tool_36-01 dropFull"/>
                                        <p>Vertical arrow menu</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/37-01.png" data-name-id="37-01"
                                             class="img-responsive tool_37-01 dropFull"/>
                                        <p>Vertical menu</p>
                                    </div>

                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/38-01.png" data-name-id="38-01"
                                             class="img-responsive tool_38-01 dropFull"/>
                                        <p>Navigation</p>
                                    </div>

                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/47-01.png"
                                             class="img-responsive tool_alert_box tool_datepicker dropFull"/>
                                        <p>Date picker</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/49-01.png"
                                             class="img-responsive tool_linkbar dropFull"/>
                                        <p>Link bar</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/50-01.png"
                                             class="img-responsive tool_1 dropFull"/>
                                        <p>Image placeholder </p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/calendar.png"
                                             class="img-responsive tool_canlendar dropFull"/>
                                        <p>Calendar</p>
                                    </div>
                                </td>

                            </tr>
                            <tr>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/39-01.png" data-name-id="39-01"
                                             class="img-responsive tool_39-01 dropFull"/>
                                        <p>Navigation bar</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/checkbox.png"
                                             class="img-responsive tool_CH_box dropFull"/>
                                        <p>Checkbox</p>
                                    </div>
                                </td>


                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/combo box.png"
                                             class="img-responsive tool_Com_Box dropFull"/>
                                        <p>Combo box</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/heart rating.png"
                                             class="img-responsive tool_rating dropFull"/>
                                        <p>Heart rating</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/throwbber.png"
                                             class="img-responsive tool_img_throw dropFull"/>
                                        <p style=" font-size:12px;  margin-top:8px;">Throwbber</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/radio.png"
                                             class="img-responsive tool_radio dropFull"/>
                                        <p>Radio button</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/message box.png"
                                             class="img-responsive tool_msg_box dropFull"/>
                                        <p>Message box</p>
                                    </div>
                                </td>
                                <td>

                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/progress bar.png"
                                             class="img-responsive tool_prgs_bar dropFull"/>
                                        <p>Progress bar</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/rating stars.png"
                                             class="img-responsive tool_star_rating dropFull"/>
                                        <p>Rating stars</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/search bar.png"
                                             class="img-responsive tool_seach dropFull"/>
                                        <p>Search bar</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/text input.png"
                                             class="img-responsive tool_input dropFull"/>
                                        <p style=" font-size:12px;  margin-top:8px;">Image text</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/button-01.png"
                                             class="img-responsive tool_btn-01 dropFull"/>
                                        <p>Rectangle Button</p>
                                    </div>

                                </td>


                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/button-02.png"
                                             class="img-responsive tool_btn-02 dropFull"/>
                                        <p>Bootstrap button</p>
                                    </div>
                                </td>
                                <td>

                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/button-03.png"
                                             class="img-responsive tool_btn-03 dropFull"/>
                                        <p>Simple button</p>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/window alert.png"
                                             class="img-responsive tool_alert_box dropFull"/>
                                        <p>Window alert</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/stepper input.png"
                                             class="img-responsive tool_stepper dropFull"/>
                                        <p>Stepper input</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/51-01.png"
                                             class="img-responsive tool_alert_box dropFull"/>
                                        <p>Text area</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/54-01.png"
                                             class="img-responsive tool_stepper dropFull"/>
                                        <p>Label</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/switch.png"
                                             class="img-responsive tool_images dropFull"/>
                                        <p>iOS Switch</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/tabs.png"
                                             class="img-responsive tool_tabs dropFull"/>
                                        <p>Tabs</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/button-04.png"
                                             class="img-responsive tool_btn-04 dropFull"/>
                                        <p>iOS Button reverse</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/button-05.png"
                                             class="img-responsive tool_btn-05 dropFull"/>
                                        <p>iOS Button forward</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/button-06.png"
                                             class="img-responsive tool_btn-06 dropFull"/>
                                        <p>Square Button</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/42-01.png" data-name-id="42-01"
                                             class="img-responsive tool_42-01 dropFull"/>
                                        <p>Column chart</p>
                                    </div>
                                </td>

                            </tr>
                            <tr>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/43-01.png"
                                             class="img-responsive tool_43-01 dropFull"/>
                                        <p>Line chart</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/41-01.png"
                                             class="img-responsive tool_Note dropFull" id="barchart"
                                             data-name-id="41-01" data-toolupdate-id="1"/>
                                        <p>Bar chart</p>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/shape-01.png"
                                             class="img-responsive tool_shap1 dropFull"/>
                                        <p>Circle</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/shape-02.png"
                                             class="img-responsive tool_shap2 dropFull"/>
                                        <p>Polygon</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/shape-03.png"
                                             class="img-responsive tool_shap3 dropFull"/>
                                        <p>Square</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/shape-04.png"
                                             class="img-responsive tool_shap4 dropFull"/>
                                        <p>Star</p>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/shape-05.png"
                                             class="img-responsive tool_shap5 dropFull"/>
                                        <p>Rectangle</p>
                                    </div>
                                </td>

                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/slider.png"
                                             class="img-responsive tool_slider dropFull"/>
                                        <p>Slider</p>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/17-01.png"
                                             data-toolupdate-id="5" data-name-id="17-01"
                                             class="img-responsive tool_MoB dropFull"/>
                                        <p>Iphone mobile</p>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <img src="<?php echo base_url(); ?>assets/images/16-01.png"
                                             class="img-responsive tool_6101 dropFull" id="iPad" data-name-id="16-01"
                                             data-toolupdate-id="2"/>
                                        <p>iPad</p>
                                    </div>
                                </td>
                            </tr>

                        </table>
                    </div>
                    <!-- tool section End -->


                    <!-- icon section started  -->

                    <div id="menu1" class="tab-pane fade in  w3-animate-left" style="">
                        <table width="200" border="1" class=" w3-table table-bordered">
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/f.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/t.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/w.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/v.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/y.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/s.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/vimeo.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/g.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/p.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/in.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/79-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/78-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/76-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/77-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/1-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></span></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/2-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/3-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/4-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/5-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/6-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/7-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.8em; margin: auto;"/></a></div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/8-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/9-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.6em;height:1.9em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/10-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.4em;height:q.7em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/11-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.4em; height:1.6em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/12-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/13-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/14-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/15-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/16-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.2em; height:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/17-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; height:1.8em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/18-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/19-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/20-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/21-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/22-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1em; height:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/23-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/24-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/25-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/26-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/27-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/28-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/36-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/30-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/31-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/32-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/33-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/34-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/35-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/37-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; height:1.8em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/38-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/39-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/40-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/41-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; height:1.5em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/42-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/43-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/44-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/45-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/46-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/47-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/48-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/49-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/50-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/51-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/52-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/53-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/54-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/55-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/56-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/57-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/58-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; height:1.9em; margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/59-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/60-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/61-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/62-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/63-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/64-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em;  margin: auto;"/></a>
                                    </div>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#"><img src="<?php echo base_url(); ?>assets/Webcons/65-01.png"
                                                         class="img-responsive tool_img_throw dropFull"
                                                         style="width:1.5em; height:2em; margin: auto;"/></a>
                                    </div>
                                </td>
                            </tr>
                        </table>

                    </div>
                    <!-- icon section end -->

                    <div id="menu2" class="tab-pane fade anchor">
                        <table width="" border="1" class=" w3-table table-bordered">
                            <!--   /////////////////       Get Prototypes Names    ///////////////////////////////////////-->
                            <?php
                            if ($loginsucces == 'loginsucces') {
                                foreach ($prototype_name->result() as $row) {

                                    $name = $row->prototype_name;
                                    $row->prototype_id
                                    ?>
                                    <tr>
                                        <td>
                                            <form>
                                                <a href="javascript:" id="<?php echo $row->prototype_id; ?>"
                                                   class="project_name">
                                                    <input type="text" id="update_name"
                                                           value="<?php echo $row->prototype_name; ?>"
                                                           style="width:200px; border:none;" maxlength="20"/>
                                                </a>
                                                <a href="javascript:"><img id="<?php echo $row->prototype_id; ?>"
                                                                           src="<?php echo base_url(); ?>assets/Webcons/9-01.png"
                                                                           class="pull-right prototype_delete"
                                                                           style="width:1em;height:1.5em;"/>
                                                </a>
                                            </form>
                                        </td>
                                    </tr>


                                <?php }  // foreach
                            }   // if($loginsucces == 'loginsucces' || $register == 'register')

                            if ($loginsucces != 'loginsucces') {
                                ?>
                                <tr>
                                    <td>
                                        <div class="text-center">
                                            <h4>Create Skets Account</h4>
                                            <a>Login / Sign Up</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>

                            <tr>

                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>


    </div>
</div><!--- side_toolsbar END --->

<!--- PAGE 1 END --->


<!--- PAGE 2 START --->
<div class="working_area">
    <div class="row" style=" margin-top:20px;">
        <div class="col-sm-12">
            <nav class="navbar navbar-default affix" style="width:75%;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top:30px;">
                        <ul class="nav navbar-nav">
                            <?php if ($loginsucces == 'loginsucces') {
                                ?>

                                <div class="col-sm-12 col-md-12">
                                    <form class="navbar-form" role="search">
                                        <div class="input-group">
                                            <span title='Save Project Name'><input type="text" id="prototypename"
                                                                                   name="prototype_name"
                                                                                   class="form-control"
                                                                                   value="Sample Project"
                                                                                   maxlength="20"></span>
                                            <div class="input-group-btn">

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
                        </ul>
                        <!--Login form start-->
                        <?php
                        $user_name = $this->session->userdata('user_name');

                        if ($loginsucces == 'loginsucces') { ?>

                            <ul class="nav navbar-nav navbar-right">

                                <li>
                                    <a href="javascript:" class="user-profile dropdown-toggle icon-arrow-down"
                                       data-toggle="dropdown" aria-expanded="false">
                                        <i class="glyphicon glyphicon-user"></i> <?php echo $user_name; ?>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href='http://localhost/Skets/index.php/SketsController'>
                                                <i class="glyphicon glyphicon-log-out pull-right"></i> Logout</a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        <?php } else { ?>
                            <ul class="nav navbar-nav navbar-right" style="margin-top:10px;">
                                <a class="btn btn-launch" href="javascript:" data-toggle="modal"
                                   data-target="#loginModal"> Login / Sign Up</a>
                            </ul>
                        <?php }
                        ?>
                        <ul class="nav pull-left" style="margin-top:10px;">
                            <a id="tutorial"><img src="<?php echo base_url(); ?>assets/images/video-play.png"
                                                  style="width:1.1em; height:1.1em; margin: auto;"/>
                                Play Tutorial</a>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <!---Ruler Bar Start--->
            <div class="container-fluid" style="margin-top:75px; ">
                <div class="ruler corner-ruler unselectable" style="height: 18px; width: 18px;"></div>
                <div class="ruler horizontal-ruler unselectable affix"
                     style=" z-index:2; height: 18px; left: 19px; margin-left:330px;">
    <span class="ruler-numbers">
        <span style="width: 100px; left: 95px;">-900 </span>
        <span style="width: 100px; left: 195px;">-800</span>
        <span style="width: 100px; left: 295px;">-700</span>
        <span style="width: 100px; left: 395px;">-600</span>
        <span style="width: 100px; left: 495px;">-500</span>
        <span style="width: 100px; left: 595px;">-400</span>
        <span style="width: 100px; left: 695px;">-300</span>
        <span style="width: 100px; left: 795px;">-200</span>
        <span style="width: 100px; left: 895px;">-100</span>
        <span style="width: 100px; left: 995px;">0</span>
        <span style="width: 100px; left: 1095px;">100</span>
        <span style="width: 100px; left: 1195px;">200</span>
        <span style="width: 100px; left: 1295px;">300</span>
        <span style="width: 100px; left: 1395px;">400</span>
        <span style="width: 100px; left: 1495px;">500</span>
        <span style="width: 100px; left: 1595px;">600</span>
        <span style="width: 100px; left: 1695px;">700</span>
        <span style="width: 100px; left: 1795px;">800</span>
        <span style="width: 100px; left: 1895px;">900</span>
    </span>
                    <svg height="18" width="1070">
                        <path stroke="#006ce5" stroke-width="1" shape-rendering="crispEdges" fill="none"
                              pointer-events="none"
                              d="M 5 18 v -4 Z M 15 18 v -4 Z M 25 18 v -4 Z M 35 18 v -4 Z M 45 18 v -4 Z M 55 18 v -4 Z M 65 18 v -4 Z M 75 18 v -4 Z M 85 18 v -4 Z M 95 18 v -18 Z M 105 18 v -4 Z M 115 18 v -4 Z M 125 18 v -4 Z M 135 18 v -4 Z M 145 18 v -4 Z M 155 18 v -4 Z M 165 18 v -4 Z M 175 18 v -4 Z M 185 18 v -4 Z M 195 18 v -18 Z M 205 18 v -4 Z M 215 18 v -4 Z M 225 18 v -4 Z M 235 18 v -4 Z M 245 18 v -4 Z M 255 18 v -4 Z M 265 18 v -4 Z M 275 18 v -4 Z M 285 18 v -4 Z M 295 18 v -18 Z M 305 18 v -4 Z M 315 18 v -4 Z M 325 18 v -4 Z M 335 18 v -4 Z M 345 18 v -4 Z M 355 18 v -4 Z M 365 18 v -4 Z M 375 18 v -4 Z M 385 18 v -4 Z M 395 18 v -18 Z M 405 18 v -4 Z M 415 18 v -4 Z M 425 18 v -4 Z M 435 18 v -4 Z M 445 18 v -4 Z M 455 18 v -4 Z M 465 18 v -4 Z M 475 18 v -4 Z M 485 18 v -4 Z M 495 18 v -18 Z M 505 18 v -4 Z M 515 18 v -4 Z M 525 18 v -4 Z M 535 18 v -4 Z M 545 18 v -4 Z M 555 18 v -4 Z M 565 18 v -4 Z M 575 18 v -4 Z M 585 18 v -4 Z M 595 18 v -18 Z M 605 18 v -4 Z M 615 18 v -4 Z M 625 18 v -4 Z M 635 18 v -4 Z M 645 18 v -4 Z M 655 18 v -4 Z M 665 18 v -4 Z M 675 18 v -4 Z M 685 18 v -4 Z M 695 18 v -18 Z M 705 18 v -4 Z M 715 18 v -4 Z M 725 18 v -4 Z M 735 18 v -4 Z M 745 18 v -4 Z M 755 18 v -4 Z M 765 18 v -4 Z M 775 18 v -4 Z M 785 18 v -4 Z M 795 18 v -18 Z M 805 18 v -4 Z M 815 18 v -4 Z M 825 18 v -4 Z M 835 18 v -4 Z M 845 18 v -4 Z M 855 18 v -4 Z M 865 18 v -4 Z M 875 18 v -4 Z M 885 18 v -4 Z M 895 18 v -18 Z M 905 18 v -4 Z M 915 18 v -4 Z M 925 18 v -4 Z M 935 18 v -4 Z M 945 18 v -4 Z M 955 18 v -4 Z M 965 18 v -4 Z M 975 18 v -4 Z M 985 18 v -4 Z M 995 18 v -18 Z M 1005 18 v -4 Z M 1015 18 v -4 Z M 1025 18 v -4 Z M 1035 18 v -4 Z M 1045 18 v -4 Z M 1055 18 v -4 Z M 1065 18 v -4 Z M 1075 18 v -4 Z M 1085 18 v -4 Z M 1095 18 v -18 Z M 1105 18 v -4 Z M 1115 18 v -4 Z M 1125 18 v -4 Z M 1135 18 v -4 Z M 1145 18 v -4 Z M 1155 18 v -4 Z M 1165 18 v -4 Z M 1175 18 v -4 Z M 1185 18 v -4 Z M 1195 18 v -18 Z M 1205 18 v -4 Z M 1215 18 v -4 Z M 1225 18 v -4 Z M 1235 18 v -4 Z M 1245 18 v -4 Z M 1255 18 v -4 Z M 1265 18 v -4 Z M 1275 18 v -4 Z M 1285 18 v -4 Z M 1295 18 v -18 Z M 1305 18 v -4 Z M 1315 18 v -4 Z M 1325 18 v -4 Z M 1335 18 v -4 Z M 1345 18 v -4 Z M 1355 18 v -4 Z M 1365 18 v -4 Z M 1375 18 v -4 Z M 1385 18 v -4 Z M 1395 18 v -18 Z M 1405 18 v -4 Z M 1415 18 v -4 Z M 1425 18 v -4 Z M 1435 18 v -4 Z M 1445 18 v -4 Z M 1455 18 v -4 Z M 1465 18 v -4 Z M 1475 18 v -4 Z M 1485 18 v -4 Z M 1495 18 v -18 Z M 1505 18 v -4 Z M 1515 18 v -4 Z M 1525 18 v -4 Z M 1535 18 v -4 Z M 1545 18 v -4 Z M 1555 18 v -4 Z M 1565 18 v -4 Z M 1575 18 v -4 Z M 1585 18 v -4 Z M 1595 18 v -18 Z M 1605 18 v -4 Z M 1615 18 v -4 Z M 1625 18 v -4 Z M 1635 18 v -4 Z M 1645 18 v -4 Z M 1655 18 v -4 Z M 1665 18 v -4 Z M 1675 18 v -4 Z M 1685 18 v -4 Z M 1695 18 v -18 Z M 1705 18 v -4 Z M 1715 18 v -4 Z M 1725 18 v -4 Z M 1735 18 v -4 Z M 1745 18 v -4 Z M 1755 18 v -4 Z M 1765 18 v -4 Z M 1775 18 v -4 Z M 1785 18 v -4 Z M 1795 18 v -18 Z M 1805 18 v -4 Z M 1815 18 v -4 Z M 1825 18 v -4 Z M 1835 18 v -4 Z M 1845 18 v -4 Z M 1855 18 v -4 Z M 1865 18 v -4 Z M 1875 18 v -4 Z M 1885 18 v -4 Z M 1895 18 v -18 Z M 1905 18 v -4 Z M 1915 18 v -4 Z M 1925 18 v -4 Z M 1935 18 v -4 Z M 1945 18 v -4 Z M 1955 18 v -4 Z M 1965 18 v -4 Z M 1975 18 v -4 Z ">
                        </path>
                    </svg>
                </div>

                <div class="ruler vertical-ruler unselectable" style="margin-top:20px;"
                     style="width: 18px; top: 19px; height: 725px;">
        <span class="ruler-numbers">
        <span style="height: 100px; top: 88px;">-1700</span>
        <span style="height: 100px; top: 188px;">-1600</span>
        <span style="height: 100px; top: 288px;">-1500</span>
        <span style="height: 100px; top: 388px;">-1400</span>
        <span style="height: 100px; top: 488px;">-1300</span>
        <span style="height: 100px; top: 588px;">-1200</span>
        <span style="height: 100px; top: 688px;">-1100</span>
        <span style="height: 100px; top: 788px;">-1000</span>
        <span style="height: 100px; top: 888px;">-900</span>
        <span style="height: 100px; top: 988px;">-800</span>
        <span style="height: 100px; top: 1088px;">-700</span>
        <span style="height: 100px; top: 1188px;">-600</span>
        <span style="height: 100px; top: 1288px;">-500</span>
        <span style="height: 100px; top: 1388px;">-400</span>
        <span style="height: 100px; top: 1488px;">-300</span>
        <span style="height: 100px; top: 1588px;">-200</span>
        <span style="height: 100px; top: 1688px;">-100</span>
        <span style="height: 100px; top: 1788px;">0</span>
        </span>
                    <svg width="18" height="690">
                        <path stroke="#006ce5" stroke-width="1" shape-rendering="crispEdges" fill="none"
                              pointer-events="none"
                              d="M 18 8 h -4 Z M 18 18 h -4 Z M 18 28 h -4 Z M 18 38 h -4 Z M 18 48 h -4 Z M 18 58 h -4 Z M 18 68 h -4 Z M 18 78 h -4 Z M 18 88 h -18 Z M 18 98 h -4 Z M 18 108 h -4 Z M 18 118 h -4 Z M 18 128 h -4 Z M 18 138 h -4 Z M 18 148 h -4 Z M 18 158 h -4 Z M 18 168 h -4 Z M 18 178 h -4 Z M 18 188 h -18 Z M 18 198 h -4 Z M 18 208 h -4 Z M 18 218 h -4 Z M 18 228 h -4 Z M 18 238 h -4 Z M 18 248 h -4 Z M 18 258 h -4 Z M 18 268 h -4 Z M 18 278 h -4 Z M 18 288 h -18 Z M 18 298 h -4 Z M 18 308 h -4 Z M 18 318 h -4 Z M 18 328 h -4 Z M 18 338 h -4 Z M 18 348 h -4 Z M 18 358 h -4 Z M 18 368 h -4 Z M 18 378 h -4 Z M 18 388 h -18 Z M 18 398 h -4 Z M 18 408 h -4 Z M 18 418 h -4 Z M 18 428 h -4 Z M 18 438 h -4 Z M 18 448 h -4 Z M 18 458 h -4 Z M 18 468 h -4 Z M 18 478 h -4 Z M 18 488 h -18 Z M 18 498 h -4 Z M 18 508 h -4 Z M 18 518 h -4 Z M 18 528 h -4 Z M 18 538 h -4 Z M 18 548 h -4 Z M 18 558 h -4 Z M 18 568 h -4 Z M 18 578 h -4 Z M 18 588 h -18 Z M 18 598 h -4 Z M 18 608 h -4 Z M 18 618 h -4 Z M 18 628 h -4 Z M 18 638 h -4 Z M 18 648 h -4 Z M 18 658 h -4 Z M 18 668 h -4 Z M 18 678 h -4 Z M 18 688 h -18 Z M 18 698 h -4 Z M 18 708 h -4 Z M 18 718 h -4 Z M 18 728 h -4 Z M 18 738 h -4 Z M 18 748 h -4 Z M 18 758 h -4 Z M 18 768 h -4 Z M 18 778 h -4 Z M 18 788 h -18 Z M 18 798 h -4 Z M 18 808 h -4 Z M 18 818 h -4 Z M 18 828 h -4 Z M 18 838 h -4 Z M 18 848 h -4 Z M 18 858 h -4 Z M 18 868 h -4 Z M 18 878 h -4 Z M 18 888 h -18 Z M 18 898 h -4 Z M 18 908 h -4 Z M 18 918 h -4 Z M 18 928 h -4 Z M 18 938 h -4 Z M 18 948 h -4 Z M 18 958 h -4 Z M 18 968 h -4 Z M 18 978 h -4 Z M 18 988 h -18 Z M 18 998 h -4 Z M 18 1008 h -4 Z M 18 1018 h -4 Z M 18 1028 h -4 Z M 18 1038 h -4 Z M 18 1048 h -4 Z M 18 1058 h -4 Z M 18 1068 h -4 Z M 18 1078 h -4 Z M 18 1088 h -18 Z M 18 1098 h -4 Z M 18 1108 h -4 Z M 18 1118 h -4 Z M 18 1128 h -4 Z M 18 1138 h -4 Z M 18 1148 h -4 Z M 18 1158 h -4 Z M 18 1168 h -4 Z M 18 1178 h -4 Z M 18 1188 h -18 Z M 18 1198 h -4 Z M 18 1208 h -4 Z M 18 1218 h -4 Z M 18 1228 h -4 Z M 18 1238 h -4 Z M 18 1248 h -4 Z M 18 1258 h -4 Z M 18 1268 h -4 Z M 18 1278 h -4 Z M 18 1288 h -18 Z M 18 1298 h -4 Z M 18 1308 h -4 Z M 18 1318 h -4 Z M 18 1328 h -4 Z M 18 1338 h -4 Z M 18 1348 h -4 Z M 18 1358 h -4 Z M 18 1368 h -4 Z M 18 1378 h -4 Z M 18 1388 h -18 Z M 18 1398 h -4 Z M 18 1408 h -4 Z M 18 1418 h -4 Z M 18 1428 h -4 Z M 18 1438 h -4 Z M 18 1448 h -4 Z M 18 1458 h -4 Z M 18 1468 h -4 Z M 18 1478 h -4 Z M 18 1488 h -18 Z M 18 1498 h -4 Z M 18 1508 h -4 Z M 18 1518 h -4 Z M 18 1528 h -4 Z M 18 1538 h -4 Z M 18 1548 h -4 Z M 18 1558 h -4 Z M 18 1568 h -4 Z M 18 1578 h -4 Z M 18 1588 h -18 Z M 18 1598 h -4 Z M 18 1608 h -4 Z M 18 1618 h -4 Z M 18 1628 h -4 Z M 18 1638 h -4 Z M 18 1648 h -4 Z M 18 1658 h -4 Z M 18 1668 h -4 Z M 18 1678 h -4 Z M 18 1688 h -18 Z M 18 1698 h -4 Z M 18 1708 h -4 Z M 18 1718 h -4 Z M 18 1728 h -4 Z M 18 1738 h -4 Z M 18 1748 h -4 Z M 18 1758 h -4 Z M 18 1768 h -4 Z M 18 1778 h -4 Z M 18 1788 h -18 Z M 18 1798 h -4 Z M 18 1808 h -4 Z M 18 1818 h -4 Z M 18 1828 h -4 Z M 18 1838 h -4 Z M 18 1848 h -4 Z M 18 1858 h -4 Z M 18 1868 h -4 Z M 18 1878 h -4 Z M 18 1888 h -18 Z M 18 1898 h -4 Z M 18 1908 h -4 Z M 18 1918 h -4 Z M 18 1928 h -4 Z M 18 1938 h -4 Z M 18 1948 h -4 Z M 18 1958 h -4 Z M 18 1968 h -4 Z M 18 1978 h -4 Z M 18 1988 h -18 Z M 18 1998 h -4 Z M 18 2008 h -4 Z M 18 2018 h -4 Z M 18 2028 h -4 Z M 18 2038 h -4 Z M 18 2048 h -4 Z M 18 2058 h -4 Z M 18 2068 h -4 Z M 18 2078 h -4 Z M 18 2088 h -18 Z M 18 2098 h -4 Z M 18 2108 h -4 Z M 18 2118 h -4 Z M 18 2128 h -4 Z M 18 2138 h -4 Z M 18 2148 h -4 Z M 18 2158 h -4 Z M 18 2168 h -4 Z M 18 2178 h -4 Z M 18 2188 h -18 Z M 18 2198 h -4 Z M 18 2208 h -4 Z M 18 2218 h -4 Z M 18 2228 h -4 Z M 18 2238 h -4 Z M 18 2248 h -4 Z M 18 2258 h -4 Z M 18 2268 h -4 Z M 18 2278 h -4 Z M 18 2288 h -18 Z M 18 2298 h -4 Z M 18 2308 h -4 Z M 18 2318 h -4 Z M 18 2328 h -4 Z M 18 2338 h -4 Z M 18 2348 h -4 Z M 18 2358 h -4 Z M 18 2368 h -4 Z M 18 2378 h -4 Z M 18 2388 h -18 Z M 18 2398 h -4 Z M 18 2408 h -4 Z M 18 2418 h -4 Z M 18 2428 h -4 Z M 18 2438 h -4 Z M 18 2448 h -4 Z M 18 2458 h -4 Z M 18 2468 h -4 Z M 18 2478 h -4 Z M 18 2488 h -18 Z M 18 2498 h -4 Z M 18 2508 h -4 Z M 18 2518 h -4 Z M 18 2528 h -4 Z M 18 2538 h -4 Z M 18 2548 h -4 Z M 18 2558 h -4 Z M 18 2568 h -4 Z M 18 2578 h -4 Z M 18 2588 h -18 Z M 18 2598 h -4 Z M 18 2608 h -4 Z M 18 2618 h -4 Z M 18 2628 h -4 Z M 18 2638 h -4 Z M 18 2648 h -4 Z M 18 2658 h -4 Z M 18 2668 h -4 Z M 18 2678 h -4 Z M 18 2688 h -18 Z M 18 2698 h -4 Z M 18 2708 h -4 Z M 18 2718 h -4 Z M 18 2728 h -4 Z M 18 2738 h -4 Z M 18 2748 h -4 Z M 18 2758 h -4 Z M 18 2768 h -4 Z M 18 2778 h -4 Z M 18 2788 h -18 Z M 18 2798 h -4 Z M 18 2808 h -4 Z M 18 2818 h -4 Z M 18 2828 h -4 Z M 18 2838 h -4 Z M 18 2848 h -4 Z M 18 2858 h -4 Z M 18 2868 h -4 Z M 18 2878 h -4 Z M 18 2888 h -18 Z M 18 2898 h -4 Z M 18 2908 h -4 Z M 18 2918 h -4 Z M 18 2928 h -4 Z M 18 2938 h -4 Z M 18 2948 h -4 Z M 18 2958 h -4 Z M 18 2968 h -4 Z M 18 2978 h -4 Z M 18 2988 h -18 Z M 18 2998 h -4 Z M 18 3008 h -4 Z M 18 3018 h -4 Z M 18 3028 h -4 Z M 18 3038 h -4 Z M 18 3048 h -4 Z M 18 3058 h -4 Z M 18 3068 h -4 Z M 18 3078 h -4 Z M 18 3088 h -18 Z M 18 3098 h -4 Z M 18 3108 h -4 Z M 18 3118 h -4 Z M 18 3128 h -4 Z M 18 3138 h -4 Z M 18 3148 h -4 Z M 18 3158 h -4 Z M 18 3168 h -4 Z M 18 3178 h -4 Z M 18 3188 h -18 Z M 18 3198 h -4 Z M 18 3208 h -4 Z M 18 3218 h -4 Z M 18 3228 h -4 Z M 18 3238 h -4 Z M 18 3248 h -4 Z M 18 3258 h -4 Z M 18 3268 h -4 Z M 18 3278 h -4 Z M 18 3288 h -18 Z M 18 3298 h -4 Z M 18 3308 h -4 Z M 18 3318 h -4 Z M 18 3328 h -4 Z M 18 3338 h -4 Z M 18 3348 h -4 Z M 18 3358 h -4 Z M 18 3368 h -4 Z M 18 3378 h -4 Z M 18 3388 h -18 Z M 18 3398 h -4 Z M 18 3408 h -4 Z M 18 3418 h -4 Z M 18 3428 h -4 Z M 18 3438 h -4 Z M 18 3448 h -4 Z M 18 3458 h -4 Z M 18 3468 h -4 Z M 18 3478 h -4 Z M 18 3488 h -18 Z M 18 3498 h -4 Z M 18 3508 h -4 Z M 18 3518 h -4 Z M 18 3528 h -4 Z M 18 3538 h -4 Z M 18 3548 h -4 Z M 18 3558 h -4 Z ">
                        </path>
                    </svg>
                </div>

            </div>
            <!---Ruler Bar End--->

            <!-- -Login Modal -->
            <div class="modal fade" style="" id="loginModal" tabindex="-1" role="dialog"
                 aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content login-modal">
                        <div class="modal-header login-modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center" id="loginModalLabel">Login & Sign Up Your Skets
                                Account</h4>
                        </div>
                        <div class="modal-body">
                            <div class="text-center">
                                <div role="tabpanel" class="login-tab">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a id="signin-taba" href="#home"
                                                                                  aria-controls="home" role="tab"
                                                                                  data-toggle="tab">Login</a></li>

                                        <li role="presentation"><a id="signup-taba" href="#profile"
                                                                   aria-controls="profile" role="tab" data-toggle="tab">Sign
                                                Up</a></li>

                                        <li role="presentation"><a id="forgetpass-taba" href="#forget_password"
                                                                   aria-controls="forget_password" role="tab"
                                                                   data-toggle="tab">Forget Password</a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active text-center" id="home"> &nbsp;&nbsp;
                                            <?php
                                            $register = $this->session->userdata('register');
                                            $loginfail = $this->session->userdata('loginfail');
                                            if ($loginfail == 'loginfail') { ?>
                                                <span id="login_fail" class="response_error">Loggin failed, please try again.</span>
                                                <div class="clearfix"></div>
                                            <?php } elseif ($register == 'register') {
                                                ?>
                                                <span id="" class="">you are registered now...</span>

                                            <?php }
                                            echo form_open_multipart('create/login');
                                            ?>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i><img style="width:1.3em;"
                                                                                           src="<?php echo base_url(); ?>assets/images/user.png"/></i>
                                                    </div>
                                                    <input required type="text" class="form-control" id="login_username"
                                                           name="email" placeholder="Email">
                                                </div>
                                                <span class="help-block has-error" id="email-error"></span>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i><img style="width:1.3em;"
                                                                                           src="<?php echo base_url(); ?>assets/images/lock.png"/></i>
                                                    </div>
                                                    <input required type="password" class="form-control" id="password"
                                                           name="password" placeholder="Password">
                                                </div>
                                                <span class="help-block has-error" id="password-error"></span>
                                            </div>
                                            <input type="submit" value="Login" id="login_btn"
                                                   class="btn btn-block bt-login" data-loading-text="Signing In...."/>
                                            <div class="clearfix"></div>
                                            <div class="login-modal-footer">
                                                <div class="row">
                                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                                        <i> <img style="width:1em; margin-top:-10px;"
                                                                 src="<?php echo base_url(); ?>assets/images/lock.png"/></i>
                                                        <a href="javascript:" class="forgetpass-tab"> Forgot
                                                            password? </a>

                                                    </div>

                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <i> <img style="width:1.1em; margin-top:-8px;"
                                                                 src="<?php echo base_url(); ?>assets/images/usersignup.png"/></i>
                                                        <a href="javascript:" class="signup-tab"> Sign Up </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            echo form_close();
                                            ?>
                                        </div>

                                        <div role="tabpanel" class="tab-pane" id="profile"> &nbsp;&nbsp;
                                            <div class="clearfix"></div>
                                            <?php
                                            echo form_open_multipart('create/Register_User');
                                            ?>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i><img style="width:1.3em;"
                                                                                           src="<?php echo base_url(); ?>assets/images/user.png"/></i>
                                                    </div>
                                                    <input required type="text" class="form-control" name="username"
                                                           id="username" placeholder="Username">
                                                </div>
                                                <span class="help-block has-error" data-error='0'
                                                      id="username-error"></span>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i><img style="width:1.3em;"
                                                                                           src="<?php echo base_url(); ?>assets/images/@.png"/></i>
                                                    </div>
                                                    <input required type="text" class="form-control" name="email"
                                                           id="remail" placeholder="Email">
                                                </div>
                                                <span class="help-block has-error" data-error='0'
                                                      id="remail-error"></span>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i><img style="width:1.3em;"
                                                                                           src="<?php echo base_url(); ?>assets/images/lock.png"/></i>
                                                    </div>
                                                    <input required type="password" class="form-control" name="password"
                                                           id="remail" placeholder="Password">
                                                </div>
                                                <span class="help-block has-error" data-error='0'
                                                      id="remail-error"></span>
                                            </div>
                                            <input type="submit" value="Sign Up" id="register_btn"
                                                   class="btn btn-block bt-login" data-loading-text="Registering...."/>
                                            <div class="clearfix"></div>
                                            <div class="login-modal-footer">
                                                <div class="row">
                                                    <div class="col-xs-8 col-sm-8 col-md-8">
                                                        <i> <img style="width:1em; margin-top:-10px;"
                                                                 src="<?php echo base_url(); ?>assets/images/lock.png"/></i>
                                                        <a href="javascript:" class="forgetpass-tab"> Forgot
                                                            password? </a>

                                                    </div>

                                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                                        <i> <img style="width:1em; margin-top:-8px;"
                                                                 src="<?php echo base_url(); ?>assets/images/loginuser.png"/></i>
                                                        <a href="javascript:" class="signin-tab"> Login </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            echo form_close();
                                            ?>
                                        </div>
                                        <div role="tabpanel" class="tab-pane text-center" id="forget_password">
                                            &nbsp;&nbsp;
                                            <span id="reset_fail" class="response_error" style="display: none;"></span>
                                            <div class="clearfix"></div>
                                            <?php
                                            echo form_open_multipart('');
                                            ?>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon"><i> <img
                                                                    style="width:1.5em; margin-top:-8px;"
                                                                    src="<?php echo base_url(); ?>assets/images/@.png"/></i>
                                                    </div>
                                                    <input required type="text" class="form-control" id="femail"
                                                           placeholder="Email">
                                                </div>
                                                <span class="help-block has-error" data-error='0'
                                                      id="femail-error"></span>
                                            </div>

                                            <button type="button" id="reset_btn" class="btn btn-block bt-login"
                                                    data-loading-text="Please wait....">Forget Password
                                            </button>
                                            <div class="clearfix"></div>
                                            <div class="login-modal-footer">
                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <i> <img style="width:1.2em; margin-top:-8px;"
                                                                 src="<?php echo base_url(); ?>assets/images/loginuser.png"/></i>
                                                        <a href="javascript:" class="signin-tab"> login </a>

                                                    </div>

                                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                                        <i> <img style="width:1.3em; margin-top:-8px;"
                                                                 src="<?php echo base_url(); ?>assets/images/usersignup.png"/></i>
                                                        <a href="javascript:" class="signup-tab"> Sign Up </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            echo form_close();
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!--Login form END-->


            <div id="render" class="whitepage">


            </div>

        </div>

    </div> <!--- working area div END --->
</div>

<div id="dialog" style="display: none;" align="center">
    <video width="640" height="360" controls>
        <source src="<?php echo base_url(); ?>assets/videos/skets.mp4" type="video/mp4">
    </video>
</div>


<!--- PAGE 2 END --->
<script src="<?php echo base_url(); ?>assets/js/canvastopicture.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/myjs.js"></script>

<script>

    <?php
    if($loginsucces != 'loginsucces'){
    ?>
    $('.modal').modal('show');
    <?php
    } ?>
    //    var myVar;
    //
    //    function myFunction() {
    //    myVar = setTimeout(showPage, 1500);
    //    }
    //
    //    function showPage() {
    //    document.getElementById("loader").style.display = "none";
    //   }

    $("#download").on('click', function () {
        GMPlugins.convertHtmlToImage(".whitepage");
    });


</script>


</body>
</html>