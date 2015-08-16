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
    <title>��̨����</title>
</head>
<body class="home-template">
<!--start header-->
<header class="main-header" style='background-image: url("/Public/images/top1.jpg");'>
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h1 style="color: white;">��̨����ҳ��</h1>
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
                        <li class="nav-current pull-left" role="presentation"><a href="#">��̨����</a></li>
                        <li class="pull-right" role="presentation"><a title="�˳���¼" href="#">�˳���¼</a></li>
						<li id="alterPassword" class="pull-right" role="presentation"><a href="#myModal" data-toggle="modal">�޸�����</li>
                        <if condition="$adminName eq 'admin'">
                        <li id="superAdmin" class="pull-right" role="presentation"><a title="��������Ա" href="#"><u class="text-danger">��������Ա</u></a></li>
                        </if>
                        <li class="pull-right" role="presentation"><a title="�鿴��Ϣ" id="lookInfo" href="#">@�û���</a></li>
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
                <li id="userList" role="presentation" class="active"><a href="#">�û��б�</a></li>
                <li id="resumeForSolve" role="presentation"><a href="#">����˼���</a></li>
                <li id="resumeHasSolve" role="presentation"><a href="#">����˼���</a></li>
                <div class="text-right">
                    <form class="form-search">
                        <input class="input-medium search-query" type="text" /> <button class="btn btn-info" type="submit">����</button>
                    </form>
                </div>
            </ul>
            <div id="userList_content">
                <table class="table table-hover table-striped">
                    <thead class="container-fluid">
                    <tr class="row-fluid">
                        <th class="col-sm-6">
                            �û���
                        </th>
                        <th class="col-sm-6">
                            ����¼ʱ��
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
                            ������������
                        </th>
                        <th class="col-sm-4">
                            ������������
                        </th>
                        <th class="col-sm-5">
                            ��������ʱ��
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
                            ������������
                        </th>
                        <th class="col-sm-4">
                            ������������
                        </th>
                        <th class="col-sm-5">
                            ��������ʱ��
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
                                        <button id="sendMsg" type="button" class="btn btn-mini btn-default" data-toggle="collapse" data-target="#msgPanel" aria-expanded="false" aria-controls="msgPanel">վ����</button>
                                        <button id="changePermission" type="button" class="btn btn-mini btn-danger">�û�Ȩ��</button>
                                    </div>
                                    <div class="col-sm-6 col-sm-offset-1">
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">�û���</h4>
                                          </div>
                                          <div class="panel-body">
                                            <h4>Charry</h4>
                                          </div>
                                        </div>
                                        <div class="panel panel-default">
                                          <div class="panel-heading">
                                            <h4 class="panel-title">�û�״̬</h4>
                                          </div>
                                          <div id="userStatus" class="panel-body">
                                             <h4 id="normal"><em>����</em></h4>
                                             <h4 id="limited"><em>���޵�</em></h4>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="collapse" id="msgPanel">
                              <div class="well">
                                <textarea placeholder="������..."></textarea>
                                <div class="text-right">
                                    <button id="submitMsg" type="button" class="btn btn-mini btn-primary">����</button>
                                </div>
                              </div>
                            </div>
                            <div id="personalInfo">
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">�ֻ�����</h4>
                                  </div>
                                  <div class="panel-body">
                                    <h4><ins>13725576479</ins></h4>
                                  </div>
                                </div>
                                <div class="panel panel-default">
                                  <div class="panel-heading">
                                    <h4 class="panel-title">ע��ʱ��</h4>
                                  </div>
                                  <div class="panel-body">
                                    <h4><ins>2015��8��5��17:42:18</ins></h4>
                                  </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class="col-sm-7">
                        <ul id="tabs1" class="nav nav-pills">
                            <li id="forSolve" role="presentation" class="active"><a href="#">����˼���</a></li>
                            <li id="hasSolve" role="presentation"><a href="#">����˼���</a></li>
                            <div class="text-right">
                                <form class="form-search">
                                    <input class="input-medium search-query" type="text" /> <button class="btn btn-info" type="submit">����</button>
                                </form>
                            </div>
                        </ul>
                        <div id="forSolve_content">
                            <table class="table table-hover table-striped">
                                <thead class="container-fluid">
                                <tr class="row-fluid">
                                    <th class="col-sm-5">
                                        ������������
                                    </th>
                                    <th class="col-sm-7">
                                        ��������ʱ��
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
                                        ������������
                                    </th>
                                    <th class="col-sm-7">
                                        ��������ʱ��
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
        <h4 class="modal-title" id="myModalLabel">�����޸�</h4>
      </div>
      <div class="modal-body">
            <div class="tab-content">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="orginPassword">ԭ���룺</label>
                        <input type="text" class="form-control" id="orginPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">�����룺</label>
                        <input type="password" class="form-control" id="newPassword">
                    </div>
                    <div class="form-group">
                        <label for="newPassword">ȷ�����룺</label>
                        <input type="password" class="form-control" id="confirmNewPassword">
                    </div>
                    <div class="text-right">
                        <input type="submit" class="hidden"><span class="sr-only">ȷ���޸�</span>
                        <button type="button" class="btn btn-primary">ȷ���޸�</button>
                        <input type="reset" class="btn btn-primary" value="��������">
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
            <h3 class="panel-title">��ӻ�ɾ������Ա</h3>
          </div>
          <div class="panel-body">
            <form action="#" method="post" class="form-inline">
                <div class="form-group">
                    <label class="label-control" for="account">�˺ţ�</label>
                    <input class="form-control" type="text" id="account" placeholder="�˺�...">
                </div>
                <div class="form-group">
                    <label class="label-control" for="password" >���룺</label>
                    <input class="form-control" type="password" id="password" placeholder="����...">
                </div>
                <div class="form-group">
                    <button id="addAdmin" type="button" class="btn btn-primary">���</button>
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
        <h4 class="modal-title" id="myModalLabel">�������</h4>
      </div>
      <div class="modal-body">
        <textarea id="reasonContent" placeholder="������������������ɣ����ʹ���û�..."></textarea>
        <div class="text-right">
            <button id="submitReason" type=��button" class="btn btn-mini btn-danger">�ύ����</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>