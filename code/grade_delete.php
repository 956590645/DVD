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
    <!--Amaze UI 文字列表-->
    <!--</div>-->
    <!--<ol class="am-breadcrumb">-->
    <!--<li><a href="#" class="am-icon-home">首页</a></li>-->
    <!--<li><a href="#">Amaze UI CSS</a></li>-->
    <!--<li class="am-active">文字列表</li>-->
    <!--</ol>-->
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 删除级别
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <!--<i class="am-icon-search"></i>-->
                        <input type="hidden" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>


        </div>
        <div class="tpl-block">
            <div class="am-g">
                <!--<div class="am-u-sm-12 am-u-md-6">-->
                <!--<div class="am-btn-toolbar">-->
                <!--<div class="am-btn-group am-btn-group-xs">-->
                <!--<button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button>-->
                <!--&lt;!&ndash;<button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>&ndash;&gt;-->
                <!--&lt;!&ndash;<button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>&ndash;&gt;-->
                <!--&lt;!&ndash;<button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>&ndash;&gt;-->

                <!--</div>-->
                <!--</div>-->
                <!--</div>-->

                <div class="am-u-sm-12 am-u-md-3">
                    <h3 class="am-form-group" style="color: red;">提示：删除级别对应级别下面的所有班级和学生信息也会被删除，删除后数据不可恢复</h3>
                    <!--<div class="am-form-group" style="float: inherit" >-->
                    <!--<select data-am-selected="{btnSize: 'sm'}">-->
                    <!--<option value="option1">所有类别</option>-->
                    <!--<option value="option2">IT业界</option>-->
                    <!--<option value="option3">数码产品</option>-->
                    <!--<option value="option3">笔记本电脑</option>-->
                    <!--<option value="option3">平板电脑</option>-->
                    <!--<option value="option3">只能手机</option>-->
                    <!--<option value="option3">超极本</option>-->
                    <!--</select>-->

                    <!--</div>-->
                    <!--<div class="am-form-group" style="float: inherit">-->
                    <!--<select data-am-selected="{btnSize: 'sm'}">-->
                    <!--<option value="option1">所有类别</option>-->
                    <!--<option value="option2">IT业界</option>-->
                    <!--<option value="option3">数码产品</option>-->
                    <!--<option value="option3">笔记本电脑</option>-->
                    <!--<option value="option3">平板电脑</option>-->
                    <!--<option value="option3">只能手机</option>-->
                    <!--<option value="option3">超极本</option>-->
                    <!--</select>-->

                    <!--</div>-->
                    <!--<div class="am-form-group" style="float: inherit">-->
                    <!--<select data-am-selected="{btnSize: 'sm'}">-->
                    <!--<option value="option1">所有类别</option>-->
                    <!--<option value="option2">IT业界</option>-->
                    <!--<option value="option3">数码产品</option>-->
                    <!--<option value="option3">笔记本电脑</option>-->
                    <!--<option value="option3">平板电脑</option>-->
                    <!--<option value="option3">只能手机</option>-->
                    <!--<option value="option3">超极本</option>-->
                    <!--</select>-->

                    <!--</div>-->
                    <!--</div>-->

                    <!--<div class="am-u-sm-12 " style="width: 25%">-->
                    <!--<div class="am-input-group am-input-group-sm">-->
                    <!--<input type="text" class="am-form-field">-->
                    <!--<span class="am-input-group-btn">-->
                    <!--<button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>-->
                    <!--</span>-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
                <div class="am-g">
                    <div class="am-u-sm-12">
                        <form class="am-form">
                            <table class="am-table am-table-striped am-table-hover table-main">
                                <thead>
                                <tr>
                                    <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                    <th class="table-id">ID</th>
                                    <th class="table-title">级别</th>
                                    <!--<th class="table-type">今日请假</th>-->
                                    <th class="table-author am-hide-sm-only">添加时间</th>
                                    <!--<th class="table-author am-hide-sm-only">本周请假</th>-->
                                    <!--<th class="table-author am-hide-sm-only">本月请假</th>-->
                                    <!--<th class="table-date am-hide-sm-only">最近请假日期</th>-->
                                    <th class="table-set">操作</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                require ('database.php');
                                $databse = new database();
                                if(!empty($_GET['type'])){
                                    $type = $_GET['type'];
                                    if ($type=='delete'){
                                        if(!empty($_GET['g_id'])){
                                            $g_id = $_GET['g_id'];
                                            $databse->grade_delete($g_id);
                                            echo "<script>location.href='grade_delete.php';</script>";
                                        }
                                    }
                                }
                                $list = $databse->grade_ListInfo();
                                while($line = mysqli_fetch_array($list)){
                                ?>
                                    <tr>
                                        <td><input type="checkbox"></td>
                                        <td><?php echo $line['g_id'];?></td>
                                        <td><?php echo $line['g_name'];?></td>
                                        <td class="am-hide-sm-only"><?php echo $line['g_addtime'];?></td>
                                        <td>
                                            <div class="am-btn-toolbar">
                                                <div class="am-btn-group am-btn-group-xs">
                                                    <a href="grade_delete.php?type=delete&g_id=<?php echo $line['g_id']?>" style="color: red;" ><span class="am-icon-trash-o"></span> 删除</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php }?>

                                </tbody>
                            </table>
                        <hr>

                    </form>
                </div>

            </div>
        </div>
        <div class="tpl-alert"></div>
    </div>


</div>

</div>


<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/amazeui.min.js"></script>
<script src="/static/js/app.js"></script>
<script>

    function get_ClassList(){
        var c_g_id = document.getElementById('c_g_id').value;
        location.href = "/index.php?c=class&a=delete&c_g_id="+c_g_id;
    }

</script>
</body>

</html>