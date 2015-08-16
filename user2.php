<!DOCTYPE html>
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

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1"  data-backdrop="static" data-keyboard=false role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">密码修改</h4>
      </div>
      <div class="modal-body">
            <div class="tab-content">
                <form class="form-group" method="post">
                    <div class="form-group">
                        <label for="orginPassword">原密码：</label>
                        <input type="text" class="form-control" id="orginPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">新密码：</label>
                        <input type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">确认密码：</label>
                        <input type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="text-right">
                        <input type="submit" class="btn btn-primary hidden" value="确认修改">
                        <button type="button" class="btn btn-primary">确认修改</button>
                        <input type="reset" class="btn btn-primary" value="重新输入">
                    </div>
                </form>
            </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-md-12">
            <ul class="nav nav-pills">
              <li role="presentation" class="active"><a id="personalCenter" href="#">个人中心</a></li>
              <li role="presentation" class="pull-right"><a id="logout" href="#">退出登录</a></li>
              <li role="presentation" class="pull-right"><a id="alterPassword" href="#myModal" data-toggle="modal">修改密码</a></li>
              <li role="presentation" class="pull-right"><a id="backHome" href="#">返回主页</a></li>
            </ul>
        </div>
    </div>
</div>
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="" class="form-group">
                <input type="file" name="imgOne" id="imgOne" onchange="preImg(this,'imgPre');" class="hidden">
                <div class="center-block" id="preview" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale); width:200px;height:200px;  border:solid 0px black;">
                    <img id="imgPre" src="/Public/images/photo1.png" width="200px" height="200px" style="display: block;" class="img-circle" />
                    <a id="changePhoto" href="#" role="button" class="btn btn-mini btn-primary">更换头像</a>
                    <input id="confirmChange" type="submit" value="确认上传" class="btn btn-mini btn-primary hidden">
                </div>
            </form>
            <br><br><hr>
           <form class="form-horizontal">
             <div class="form-group">
               <label for="userEmail" class="col-sm-4 control-label">邮 箱：</label>
               <div class="col-sm-8">
                    <input type="email" class="form-control" id="userEmail" placeholder="邮箱" disabled style="background:transparent;border:0px #ffffff">
               </div>
             </div>
             <div class="form-group">
               <label for="userName" class="col-sm-4 control-label">昵 称：</label>
               <div class="col-sm-8">
                    <input type="text" class="form-control" id="userName" placeholder="用户名" disabled  style="background:transparent;border:0px #ffffff">
               </div>
             </div>
             <div class="form-group">
               <label for="userPhone" class="col-sm-4 control-label">手机号：</label>
               <div class="col-sm-8">
                    <input type="text" class="form-control" id="userPhone" placeholder="手机号" disabled  style="background:transparent; border:0px; #ffffff">
               </div>
             </div>
             <div class="form-group">
               <label for="userExp" class="col-sm-4 control-label">积 分：</label>
               <div class="col-sm-8">
                    <input type="text" class="form-control" id="userExp" placeholder="积分" disabled style="background:transparent; border:0px; #ffffff">
               </div>
             </div>
             <div class="form-group">
               <label for="accountStatus" class="col-sm-4 control-label">账户状态：</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="accountStatus" placeholder="账户状态" disabled style="background:transparent; border:0px; #ffffff">
                </div>
             </div>
             <div class="form-group">
               <label for="registerTime" class="col-sm-4 control-label">注册时间：</label>
               <div class="col-sm-8">
                    <input type="text" class="form-control" id="registerTime" placeholder="注册时间" disabled style="background:transparent; border:0px; #ffffff">
               </div>
             </div>
           </form>
            <div class="col-sm-12 text-right">
                <button id="alterInfo" class="btn btn-primary" type="button">修改信息</button>
                <button id="confirmAlter" class="btn btn-primary hidden" type="button">确认修改</button>
            </div>
        </div>


        <div class="col-md-8">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a id="resume" href="#">简历状态</a></li>
                <li role="presentation"><a id="favo" href="#">收藏夹</a></li>
                <li role="presentation"><a id="history" href="#">搜索历史</a></li>
            </ul>
          <div id="resumeContent" >
            <table class="table table-hover table-striped">
                <thead class="container-fluid">
                <tr class="row-fluid">
                    <th class="col-sm-2">
                        简历智者姓名
                    </th>
                    <th class="col-sm-2">
                        创建简历作者
                    </th>
                    <th class="col-sm-2">
                        简历创建时间
                    </th>
                    <th class="col-sm-2">
                        最后编辑作者
                    </th>
                    <th class="col-sm-2">
                        最后编辑时间
                    </th>
                    <th class="col-sm-2">
                        状态
                    </th>
                </tr>
                </thead>
                <tbody id="resumeTbody">

                </tbody>
            </table>
             <nav class="text-center">
               <ul class="pagination">
                 <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                 <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                 <li><a id="resume_1" href="#">2 <span class="sr-only">(second)</span></a></li>
                 <li><a id="resume_2" href="#">3 <span class="sr-only">(third)</span></a></li>
                 <li><a id="resume_3" href="#">4<span class="sr-only">(forth)</span></a></li>
                 <li><a id="resume_4" href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
               </ul>
             </nav>
          </div>
           <div  id="favoContent"><br>
             <table class="table table-hover table-striped">
                 <thead>
                    <tr>
                        <th>智者姓名</th>
                        <th>收藏时间</th>
                        <th><span class="sr-only">(isDelete)</span></th>
                    </tr>
                 </thead>
                 <tbody id="favoTbody">

                 </tbody>
             </table>
             <nav class="text-center">
               <ul class="pagination">
                 <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                 <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                 <li><a href="#">2 <span class="sr-only">(second)</span></a></li>
                 <li><a href="#">3 <span class="sr-only">(third)</span></a></li>
                 <li><a href="#">4<span class="sr-only">(forth)</span></a></li>
                 <li><a href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
               </ul>
             </nav>
           </div>


            <div id="historyContent">
                 <table class="table table-hover table-striped">
                     <thead>
                        <tr>
                            <th>关键字</th>
                            <th>时间</th>
                        </tr>
                     </thead>
                     <tbody id="historyTbody">

                     </tbody>
                 </table>
                 <nav class="text-center">
                   <ul class="pagination">
                     <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                     <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                     <li><a href="#">2 <span class="sr-only">(second)</span></a></li>
                     <li><a href="#">3 <span class="sr-only">(third)</span></a></li>
                     <li><a href="#">4<span class="sr-only">(forth)</span></a></li>
                     <li><a href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                   </ul>
                 </nav>
            </div>
        </div>
    </div>
</div>
</body>
</html>