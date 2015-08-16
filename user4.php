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
    <link href="/Public/css/screen.css" rel="stylesheet">
</head>

<body class="home-template">
<!--start header-->
<header class="main-header" style='background-image: url("/Public/images/top2.jpg");'>
	<div class="container">
		<div class="row-fluid text-center">
			<div class="col-sm-12">
			<h1 style="color: white;" id="{$test}">欢迎来到个人中心</h1>
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
				<div id="main-menu">
					<ul class="menu">
						<li id="personCenter" class="nav-current" role="presentation"><a href="#center">个人中心</a></li>
						<li id="record" role="presentation"><a href="#record">操作记录</a></li>
						<li role="presentation"><a title="返回到首页" href="#home">返回首页</a></li>
						<li id="personCenter" class="nav-current" role="presentation"><a href="#">个人中心</a></li>
						<li id="record" role="presentation"><a href="#record">操作记录</a></li>
						<li role="presentation"><a title="返回到首页" href="#">返回首页</a></li>
						<li role="presentation"><a title="修改信息"  href="#myModal1" id="alterInfo" data-toggle="modal">修改信息</a></li>
						<li id="alterPassword" role="presentation"><a href="#myModal" data-toggle="modal">修改密码</li>
						<li role="presentation"><a title="退出登录" href="#logout">退出登录</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</nav>
<div class="container-fluid">
    <div class="row-fluid">
        <div class="col-sm-4">
            <div id="userInfo">
                <form action="" class="form-horizontal">
                    <div class="form-group">
                        <div class="col-sm-5">
                            <input type="file" name="imgOne" id="imgOne" onchange="preImg(this,'imgPre');" class="hidden">
                            <div id="preview" style="filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale); border:solid 0px black;" class="img-responsive">
                                <img id="imgPre" style="width:100%; height:100%;" src="/Public/images/photo1.png" class="img-rounded" />
                            </div>
                            <a id="changePhoto" href="#" role="button" class="btn btn-mini btn-default"><span style="font-size: 12px;">更换头像</span></a>
                            <button id="confirmChange" type="button" class="btn btn-mini btn-default hidden"><span style="font-size: 12px;">确认上传</span></button>
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
                              </div>
                            </div>
                        </div>
                    </div>
                </form>
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

        <div class="col-sm-8">
            <div id="myResume">
                <div class="panel panel-default">
                  <div class="panel-heading text-center">
                    <h1 class="panel-title">我的简历</h1>
                  </div>
                  <div class="panel-body">
                    <h1>暂无内容...</h1>
                  </div>
                </div>
            </div>
            <div id="operationRecord" class="hidden">
                <div class="row-fluid">
                     <div class="col-sm-12">
                        <ul class="nav nav-pills">
                            <li role="presentation" class="active"><a id="resume" href="#record#status">简历状态</a></li>
                            <li role="presentation"><a id="favo" href="#record#favorites">收藏夹</a></li>
                            <li role="presentation"><a id="history" href="#record#historys">搜索历史</a></li>
                        </ul>
                     </div>
                </div>
                <div id="resumeContent" >
                    <div class="row-fluid">
                        <div class="col-sm-12">
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
                        </div>
                    </div>
                    <div class="row-fluid">
                         <nav class="col-sm-12 col-sm-offset-4">
                           <ul class="pagination">
                           <!-- ---------------------------有后台代码 ------------------------------------- -->
                             <li ><a id="prev" aria-label="Previous" <eq name="currentPage" value="1">disabled='disabled'</eq> ><span aria-hidden="true">&laquo;</span></a></li>
                             <for start="1" end="$recordCount+1">
                             <li <eq name="i" value="$currentPage">class='active'</eq>><a id="record_{$i}" href="#center">{$i}</a></li>
                             </for>
                             <li><a id="next" href="#center" aria-label="After"><span aria-hidden="true">&raquo;</span></a></li>
                           </ul>
                         </nav>
                    </div>
                </div>

                <div  id="favoContent"><br>
                    <div class="row-fluid">
                        <div class="col-sm-12">
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
                        </div>
                    </div>
                    <div class="row-fluid">
                         <nav class="col-sm-12 col-sm-offset-4">
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

                <div id="historyContent">
                    <div class="row-fluid">
                        <div class="col-sm-12">
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
                        </div>
                    </div>
                    <div class="row-fluid">
                         <nav class="col-sm-12 col-sm-offset-4">
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
    </div>
</div>
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


<!-- AlterInfoModal -->
<div class="modal fade" id="myModal1" tabindex="-1"  data-backdrop="static" data-keyboard=false role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">信息修改</h4>
      </div>
      <div class="modal-body">
            <div class="tab-content">
                <form class="form-group" method="post">
                    <div class="form-group">
                        <label for="userNewNickName">用户名</label>
                        <input type="text" class="form-control" id="userNewPhone" placeholder="Charry">
                    </div>
                    <div class="form-group">
                        <label for="userNewPhone">手机号码</label>
                        <input type="text" class="form-control" id="userNewPhone" placeholder="13725576479">
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
</body>
</html>