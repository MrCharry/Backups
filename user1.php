<!-- ��ҳ��Ϊ�û����� -->
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>��������</title>
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
              <li role="presentation" class="active"><a id="personalCenter" href="#">��������</a></li>
              <li role="presentation" class="pull-right"><a id="logout" href="#">�˳���¼</a></li>
              <li role="presentation" class="pull-right"><a id="alterPassword" href="#">�޸�����</a></li>
              <li role="presentation" class="pull-right"><a id="backHome" href="#">������ҳ</a></li>
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
                <a id="changePhoto" href="#" role="button" class="btn btn-mini btn-primary">����ͷ��</a>
                <input type="submit" value="ȷ���ϴ�" class="btn btn-mini btn-primary">
            </form>
            <hr>
            <table class="table table-hover table-striped">
                <tbody>
                    <tr class="info">
                        <td>�˻�����</td>
                        <td>kobebryant505935728@gmail.com</td>
                    </tr>
                    <tr class="info">
                        <td>���֣�</td>
                        <td>99999</td>
                    </tr>
                    <tr class="info">
                        <td>�˻�״̬��</td>
                        <td>����</td>
                    </tr>
                    <tr class="info">
                        <td>ע��ʱ�䣺</td>
                        <td>2015��8��3��16:51:40</td>
                    </tr>
                </tbody>
            </table>
            <button class="btn btn-block btn-primary" type="button">�޸���Ϣ</button>
        </div>
        <div class="col-md-7">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a id="resume" href="#">����״̬</a></li>
                <li role="presentation"><a id="favo" href="#">�ղؼ�</a></li>
                <li role="presentation"><a id="history" href="#">������ʷ</a></li>
            </ul>
            <table id="resume_content" class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>
                        ���
                    </th>
                    <th>
                        ��Ʒ
                    </th>
                    <th>
                        ����ʱ��
                    </th>
                    <th>
                        ״̬
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
                    ����ʿ��ʼ��Ϊ��˹.����˹���1908��������ʿ������ʿע��Ϊ�̱ꡣ
                </dd>
                <dt>
                    Vacheron Constantin
                </dt>
                <dd>
                    ʼ����1775��Ľ�ʫ��������250����ʷ��
                </dd>
                <dd>
                    ����������ʷ���ƾá�����ʱ���������֮һ��
                </dd>
                <dt>
                    IWC
                </dt>
                <dd>
                    ������1868���������С���е��ר�ҡ�֮�ơ�
                </dd>
                <dt>
                    Cartier
                </dt>
                <dd>
                    ������ӵ��150������ʷ���Ƿ����鱦�������ε��������ҡ�
                </dd>
            </dl>
            <div id="history_content">
                <p class="text-info">������������¼</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>