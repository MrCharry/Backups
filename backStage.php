<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="/Public/js/jquery.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.min.js"></script>
    <script src="/Public/js/backStageIndex.js"></script>
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/css/screen1.css">
    <title>后台管理</title>
</head>
<body class="home-template">
<!--start header-->
<header class="main-header" style='background-image: url("/Public/images/top1.jpg");'>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 style="color: white;">后台管理页面</h1>
            </div>
        </div>
    </div>
</header>
<nav class="main-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="navbar-header">
					<span class="nav-toggle-button collapsed" data-toggle="collapse" data-target="#main-menu">
					<span class="sr-only">Toggle navigation</span>
					<i class="fa fa-bars"></i>
					</span>
                </div>
                <div id="main_menu">
                    <ul class="menu">
                        <li class="nav-current pull-left" role="presentation"><a href="#">后台管理</a></li>
                        <li class="pull-right" role="presentation"><a title="退出登录" href="#">退出登录</a></li>
						<li id="alterPassword" class="pull-right" role="presentation"><a href="#myModal" data-toggle="modal">修改密码</li>
                        <if condition="$adminName eq 'admin'">
                        <li id="superAdmin" class="pull-right" role="presentation"><a title="超级管理员" href="#"><u class="text-danger">超级管理员</u></a></li>
                        </if>
                        <li class="pull-right" role="presentation"><a title="查看信息" id="lookInfo" href="#">@用户名</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-sm-4">
            <ul id="tabs" class="nav nav-pills">
                <li id="userList" role="presentation" class="active"><a href="#">用户列表</a></li>
                <li id="resumeForSolve" role="presentation"><a href="#">待审核简历</a></li>
                <li id="resumeHasSolve" role="presentation"><a href="#">已审核简历</a></li>
                <div class="text-right">
                    <form class="form-search">
                        <input class="input-medium search-query" type="text" /> <button class="btn btn-info" type="submit">查找</button>
                    </form>
                </div>
            </ul>
            <div id="userList_content">
                <table class="table table-hover table-striped">
                    <thead class="container-fluid">
                    <tr class="row-fluid">
                        <th class="col-sm-6">
                            用户名
                        </th>
                        <th class="col-sm-6">
                            最后登录时间
                        </th>
                    </tr>
                    </thead>
                    <tbody id="userListTbody">
                        {$userList}
                    </tbody>
                </table>
                <div class="row-fluid">
                    <nav class="col-sm-12 col-sm-offset-4">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous" id="userPage_prev"><span aria-hidden="true">&laquo;</span></a></li>
                            <for start="1" end="userCount">
                                <li class="active"><a href="#">{$i}</a></li>
                            </for>
                            <li><a id="userPage_next" href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="resumeForSolve_content">
                <table class="table table-hover table-striped">
                    <thead class="container-fluid">
                    <tr class="row-fluid">
                        <th class="col-sm-3">
                            简历智者姓名
                        </th>
                        <th class="col-sm-4">
                            创建简历作者
                        </th>
                        <th class="col-sm-5">
                            简历创建时间
                        </th>
                    </tr>
                    </thead>
                    <tbody id="resumeForSolveTbody">
                            {$forSolveList}
                    </tbody>
                </table>
                <div class="row-fluid">
                    <nav class="col-sm-12 col-sm-offset-4">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous" id="resumeForPage_prev"><span aria-hidden="true">&laquo;</span></a></li>
                             <for start="1" end="forSolveCount">
                                <li class="active"><a href="#">{$i}</a></li>
                            </for>
                            <li><a id="resumeForPage_next" href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="resumeHasSolve_content">
                <table id="table_1" class="table table-hover table-striped">
                    <thead class="container-fluid">
                    <tr class="row-fluid">
                        <th class="col-sm-3">
                            简历智者姓名
                        </th>
                        <th class="col-sm-4">
                            创建简历作者
                        </th>
                        <th class="col-sm-5">
                            简历创建时间
                        </th>
                    </tr>
                    </thead>
                    <tbody id="resumeHasSolveTbody">
                            {$hasSolveList}
                    </tbody>
                </table>
                <div class="row-fluid">
                    <nav class="col-sm-12 col-sm-offset-4">
                        <ul class="pagination">
                            <li class="disabled"><a href="#" aria-label="Previous" id="resumeHasPage_prev"><span aria-hidden="true">&laquo;</span></a></li>
                            <for start="1" end="hasSolveCount">
                                <li class="active"><a href="#">{$i}</a></li>
                            </for>
                           <li><a id="resumeHasPage_next" href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div id="showContent" class="hidden">
                <div class="row-fluid">
                   <div class="col-sm-5">
                        <div id="userInfo">
                            <form action="" class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-sm-5">
                                        <img id="imgPre" src="/Public/images/photo1.png" style="display: block; width:180px;height:180px;" class="hidden-xs img-rounded" />
                                        <img id="imgPre" src="/Public/images/photo1.png" class="img-responsive visible-xs-inline-block img-rounded" />
                                        <br>
                                        <button id="sendMsg" type="button" class="btn btn-mini btn-default" data-toggle="collapse" data-target="#msgPanel" aria-expanded="false" aria-controls="msgPanel">站内信</button>
                                        <button id="changePermission" type="button" class="btn btn-mini btn-danger">用户权限</button>
                                    </div>
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">用户名</h4>
                                          </div>
                                          <div class="panel-body">
                                            <h4>Charry</h4>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">用户状态</h4>
                                          </div>
                                          <div id="userStatus" class="panel-body">
                                             <h4 id="normal"><em>正常</em></h4>
                                             <h4 id="limited"><em>受限的</em></h4>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="collapse" id="msgPanel">
                              <div class="well">
                                <textarea placeholder="请输入..."></textarea>
                                <div class="text-right">
                                    <button id="submitMsg" type="button" class="btn btn-mini btn-primary">发送</button>
                                </div>
                              </div>
                            </div>
                            <div id="personalInfo">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">手机号码</h4>
                                  </div>
                                  <div class="panel-body">
                                    <h4><ins>13725576479</ins></h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">注册时间</h4>
                                  </div>
                                  <div class="panel-body">
                                    <h4><ins>2015年8月5日17:42:18</ins></h4>
                                  </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-7">
                        <ul id="tabs1" class="nav nav-pills">
                            <li id="forSolve" role="presentation" class="active"><a href="#">待审核简历</a></li>
                            <li id="hasSolve" role="presentation"><a href="#">已审核简历</a></li>
                            <div class="text-right">
                                <form class="form-search">
                                    <input class="input-medium search-query" type="text" /> <button class="btn btn-info" type="submit">查找</button>
                                </form>
                            </div>
                        </ul>
                        <div id="forSolve_content">
                            <table class="table table-hover table-striped">
                                <thead class="container-fluid">
                                <tr class="row-fluid">
                                    <th class="col-sm-5">
                                        简历智者姓名
                                    </th>
                                    <th class="col-sm-7">
                                        简历创建时间
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="forSolveTbody">

                                </tbody>
                            </table>
                            <div class="row-fluid">
                                <nav class="col-sm-12 col-sm-offset-4">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a id="forPage_1" href="#">2 <span class="sr-only">(second)</span></a></li>
                                        <li><a id="forPage_2" href="#">3 <span class="sr-only">(third)</span></a></li>
                                        <li><a id="forPage_3" href="#">4<span class="sr-only">(forth)</span></a></li>
                                        <li><a id="forPage_4" href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div id="hasSolve_content">
                            <table class="table table-hover table-striped">
                                <thead class="container-fluid">
                                <tr class="row-fluid">
                                    <th class="col-sm-5">
                                        简历智者姓名
                                    </th>
                                    <th class="col-sm-7">
                                        简历创建时间
                                    </th>
                                </tr>
                                </thead>
                                <tbody id="hasSolveTbody">

                                </tbody>
                            </table>
                            <div class="row-fluid">
                                <nav class="col-sm-12 col-sm-offset-4">
                                    <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
                                        <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a id="hasPage_1" href="#">2 <span class="sr-only">(second)</span></a></li>
                                        <li><a id="hasPage_2" href="#">3 <span class="sr-only">(third)</span></a></li>
                                        <li><a id="hasPage_3" href="#">4<span class="sr-only">(forth)</span></a></li>
                                        <li><a id="hasPage_4" href="#" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<!-- AlterPasswordModal -->
<div class="modal fade" id="myModal" tabindex="-1"  data-backdrop="static" data-keyboard=false role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">密码修改</h4>
      </div>
      <div class="modal-body">
            <div class="tab-content">
                <form action="#" method="post">
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
                        <input type="password" class="form-control" id="confirmNewPassword">
                    </div>
                    <div class="text-right">
                        <input type="submit" class="hidden"><span class="sr-only">确认修改</span>
                        <button type="button" class="btn btn-primary">确认修改</button>
                        <input type="reset" class="btn btn-primary" value="重新输入">
                    </div>
                </form>
            </div>
      </div>
    </div>
  </div>
</div>

<!-- add admin -->
<if condition="$adminName eq 'admin'" >
    <div id="addAdminPage" class="well hidden">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h3 class="panel-title">添加或删除管理员</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="post" class="form-inline">
                <div class="form-group">
                    <label class="label-control" for="account">账号：</label>
                    <input class="form-control" type="text" id="account" placeholder="账号...">
                </div>
                <div class="form-group">
                    <label class="label-control" for="password" >密码：</label>
                    <input class="form-control" type="password" id="password" placeholder="密码...">
                </div>
                <div class="form-group">
                    <button id="addAdmin" type="button" class="btn btn-primary">添加</button>
                </div>
            </form>
          </div>
        </div>
    </div>
</if>
<!-- Button trigger modal -->
<button id="showReason" type="button" class="hidden" data-toggle="modal" data-target="#myModal2">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">你的理由</h4>
      </div>
      <div class="modal-body">
        <textarea id="reasonContent" placeholder="请在这里输入你的理由，将送达给用户..."></textarea>
        <div class="text-right">
            <button id="submitReason" type=“button" class="btn btn-mini btn-danger">提交理由</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>