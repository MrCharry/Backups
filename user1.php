<!-- 此页面为用户中心 -->
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>个人中心</title>
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
    <script src="/Public/js/user_center.js"></script>

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="min-height: 660px; cursor: auto;" class="edit" background="/Public/images/bg1.jpg">
<!--<button id="startWindow" type="button" data-toggle="modal" data-target="#myModal" class="hidden">Launch modal</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static" aria-hidden="true">

</div>-->
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12">
            <ul class="nav nav-pills">
              <li role="presentation" class="active"><a id="personalCenter" href="#">个人中心</a></li>
              <li role="presentation" class="pull-right"><a id="logout" href="#">退出登录</a></li>
              <li role="presentation" class="pull-right"><a id="alterPassword" href="#">修改密码</a></li>
              <li role="presentation" class="pull-right"><a id="backHome" href="#">返回主页</a></li>
            </ul>
        </div>
    </div>
</div>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="">
                <input type="file" name="imgOne" id="imgOne" onchange="preImg(this,'imgPre');" class="hidden"/>
                <div id="preview" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale); width:200px;height:200px;  border:solid 0px black;">
                    <img id="imgPre" src="/Public/images/photo1.jpg" width="200px" height="200px" style="display: block;" class="img-circle" />
                </div>
                <a id="changePhoto" href="#" role="button" class="btn btn-mini btn-primary">更换头像</a>
                <input type="submit" value="确认上传" class="btn btn-mini btn-primary">
            </form>
            <hr>
            <table class="table table-hover table-striped">
                <tbody>
                    <tr class="info">
                        <td>账户名：</td>
                        <td>kobebryant505935728@gmail.com</td>
                    </tr>
                    <tr class="info">
                        <td>积分：</td>
                        <td>99999</td>
                    </tr>
                    <tr class="info">
                        <td>账户状态：</td>
                        <td>正常</td>
                    </tr>
                    <tr class="info">
                        <td>注册时间：</td>
                        <td>2015年8月3日16:51:40</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-block btn-primary" type="button">修改信息</button>
        </div>
        <div class="col-md-7">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a id="resume" href="#">简历状态</a></li>
                <li role="presentation"><a id="favo" href="#">收藏夹</a></li>
                <li role="presentation"><a id="history" href="#">搜索历史</a></li>
            </ul>
            <table id="resume_content" class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>
                        编号
                    </th>
                    <th>
                        产品
                    </th>
                    <th>
                        交付时间
                    </th>
                    <th>
                        状态
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="info">
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Default
                    </td>
                </tr>
                <tr class="info">
                    <td>
                        1
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        01/04/2012
                    </td>
                    <td>
                        Approved
                    </td>
                </tr>
                <tr class="info">
                    <td>
                        2
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        02/04/2012
                    </td>
                    <td>
                        Declined
                    </td>
                </tr>
                <tr class="info">
                    <td>
                        3
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        03/04/2012
                    </td>
                    <td>
                        Pending
                    </td>
                </tr>
                <tr class="info">
                    <td>
                        4
                    </td>
                    <td>
                        TB - Monthly
                    </td>
                    <td>
                        04/04/2012
                    </td>
                    <td>
                        Call in to confirm
                    </td>
                </tr>
                </tbody>
            </table>
            <dl  id="favo_content" class="text-info">
                <dt>
                    Rolex
                </dt>
                <dd>
                    劳力士创始人为汉斯.威尔斯多夫，1908年他在瑞士将劳力士注册为商标。
                </dd>
                <dt>
                    Vacheron Constantin
                </dt>
                <dd>
                    始创于1775年的江诗丹顿已有250年历史，
                </dd>
                <dd>
                    是世界上历史最悠久、延续时间最长的名表之一。
                </dd>
                <dt>
                    IWC
                </dt>
                <dd>
                    创立于1868年的万国表有“机械表专家”之称。
                </dd>
                <dt>
                    Cartier
                </dt>
                <dd>
                    卡地亚拥有150多年历史，是法国珠宝金银首饰的制造名家。
                </dd>
            </dl>
            <div id="history_content">
                <p class="text-info">这里是搜索记录</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>