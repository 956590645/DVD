<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>请假管理系统</title>
    <meta name="description" content="请假管理系统">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/static/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/static/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="/static/css/amazeui.min.css" />
    <link rel="stylesheet" href="/static/css/admin.css">
    <link rel="stylesheet" href="/static/css/app.css">
</head>

<body data-type="generalComponents">
<?php
require 'header.php';
require 'menu.php';
?>

        <div class="tpl-content-wrapper">
            <!--<div class="tpl-content-page-title">-->
                <!--Amaze UI 表单-->
            <!--</div>-->
            <!--<ol class="am-breadcrumb">-->
                <!--<li><a href="#" class="am-icon-home">首页</a></li>-->
                <!--<li><a href="#">表单</a></li>-->
                <!--<li class="am-active">Amaze UI 表单</li>-->
            <!--</ol>-->
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 申请假条
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <!--<i class="am-icon-search"></i>-->
                                <input type="hidden" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>

                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form class="am-form am-form-horizontal" method="post" id="my_form" action="leave_apply.php">
                                <div class="am-form-group">
                                    <label  class="am-u-sm-3 am-form-label"></label>
                                    <div class="am-u-sm-9">
                                        <?php
                                        require ('database.php');
                                        $database = new database();
                                        if(!empty($_POST['flag'])){
                                            $data['l_s_card'] = $_POST['l_s_card'];
                                            $data['l_begintime'] = $_POST['l_begintime'];
                                            $data['l_endtime'] = $_POST['l_endtime'];
                                            $data['l_address'] = $_POST['l_address'];
                                            $data['l_cause'] = $_POST['l_cause'];
                                            $database->leave_InsertInfo($data);
                                            ?><small id="state" style="color: #F7B824;font-size: 16px;">添加成功</small><?php
                                        }else{
                                            ?><small id="state" style="color: #F7B824;font-size: 16px;"></small><?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="l_s_card" class="am-u-sm-3 am-form-label">学号</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="l_s_card" id="l_s_card" value="" placeholder="请输入学号">
<!--                                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button" onclick="get_Student()"></button>-->
                                        <small>输入学号，其他信息会自动填写。</small>
                                    </div>

                                </div>
                                <input type="hidden" value="1" name="flag">
<!--                                <input type="hidden" value="" name="l_s_id" id="l_s_id">-->
<!--                                <input type="hidden" value="" name="l_c_id" id="l_c_id">-->
<!--                                <input type="hidden" value="" name="l_g_id" id="l_g_id">-->
<!--                                <input type="hidden" value="1" name="l_status" id="l_status">-->
<!--                                <div class="am-form-group">-->
<!--                                    <label for="l_s_username" class="am-u-sm-3 am-form-label">姓名</label>-->
<!--                                    <div class="am-u-sm-9">-->
<!--                                        <input type="text" name="l_s_username" value="" id="l_s_username" placeholder="请输入姓名">-->
<!--                                        <small></small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="am-form-group">-->
<!--                                    <label for="l_s_grade" class="am-u-sm-3 am-form-label">级别</label>-->
<!--                                    <div class="am-u-sm-9">-->
<!--                                        <input type="text" name="l_s_grade" id="l_s_grade" value="" placeholder="请输入级别,例如2015,2016">-->
<!--                                        <small></small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="am-form-group">-->
<!--                                    <label for="l_s_class" class="am-u-sm-3 am-form-label">班级</label>-->
<!--                                    <div class="am-u-sm-9">-->
<!--                                        <input type="text" name="l_s_class" id="l_s_class" value="" placeholder="请输入班级">-->
<!--                                        <small></small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="am-form-group">-->
<!--                                    <label for="l_s_phone" class="am-u-sm-3 am-form-label">手机号</label>-->
<!--                                    <div class="am-u-sm-9">-->
<!--                                        <input type="tel" name="l_s_phone" id="l_s_phone" value="" placeholder="输入手机号">-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="am-form-group">
                                    <label for="l_begintime" class="am-u-sm-3 am-form-label">开始时间 <span class="tpl-form-line-small-title"></span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="l_begintime" id="l_begintime" value="" class="am-form-field tpl-form-no-bg" placeholder="开始时间" data-am-datepicker="" />
                                        <small></small>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="l_endtime" class="am-u-sm-3 am-form-label">结束时间 <span class="tpl-form-line-small-title"></span></label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="l_endtime" id="l_endtime"  value="" class="am-form-field tpl-form-no-bg" placeholder="结束时间" data-am-datepicker="" />
                                        <small></small>
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="l_address" class="am-u-sm-3 am-form-label">前往地点</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="l_address" id="l_address" value="" placeholder="输入请假去往地点">
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label for="l_cause" class="am-u-sm-3 am-form-label">请假原因</label>
                                    <div class="am-u-sm-9">
                                        <textarea class="" name="l_cause" rows="5" id="l_cause"   placeholder="输入请假原因"></textarea>
                                        <small></small>
                                    </div>
                                </div>
<!--                                <div class="am-form-group">-->
<!--                                    <label for="l_charge" class="am-u-sm-3 am-form-label">请假负责人</label>-->
<!--                                    <div class="am-u-sm-9">-->
<!--                                        <input type="text" name="l_charge" id="l_charge" value="{$l_charge}" placeholder="" disabled>-->
<!--                                    </div>-->
<!--                                </div>-->

                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="button" class="am-btn am-btn-primary" onclick="validate()">提交假条</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/js/amazeui.min.js"></script>
    <script src="/static/js/app.js"></script>
<script>

    function validate() {
        var l_s_card = document.getElementById('l_s_card').value;
        var l_begintime = document.getElementById('l_begintime').value;
        var l_endtime = document.getElementById('l_endtime').value;
        var l_address = document.getElementById('l_address').value;
        var l_cause = document.getElementById('l_cause').value;
        if (l_s_card == ''){
            document.getElementById('state').innerHTML = '学号未填写';
        }else if (l_begintime == ''){
            document.getElementById('state').innerHTML = '开始时间未选择';
        }else if (l_endtime == ''){
            document.getElementById('state').innerHTML = '结束时间未选择';
        }else if (l_address == ''){
            document.getElementById('state').innerHTML = '前往地点未填写';
        }else if (l_cause == ''){
            document.getElementById('state').innerHTML = '请假原因未填写';
        }else {
            document.getElementById('my_form').submit();
        }
    }

</script>
</body>

</html>