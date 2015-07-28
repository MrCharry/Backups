<!DOCTYPE html>
<html>
<head>
	<?php require("/public/php/require.php") ?>
<script type="text/javascript">
    $(document).ready(function () {
   	$('#myModal').modal('toggle');
   	$('#login').click(clickLogin);
   	$('#register').click(clickRegister);
   });
function clickLogin(){

}
 function clickRegister(){

	
	$("input#user_email").blur(function(){

    	var user_email = $("input#user_email").val();
		if (user_email == ""){	// ���emailΪ�գ��������ʾ
			$("#user_email_error").text("�Բ���,Email����Ϊ�գ�");
			$("#user_email").focus(function(){
				$("#user_email").text("");
			});
		}
     });

	$("input#user_password").blur(function(){

		var user_password = $("#user_password").val();

		if (user_password == ""){	// �������Ϊ�գ��������ʾ
			$("#user_password_error").text("�Բ���,���벻��Ϊ�գ�");
			$("input#user_password").focus(function(){
                $("#user_password_error").text("");
            });
		}
    });

	$("input#re_user_password").blur(function(){

		var user_password = $("input#user_password").val();			//��ȡ�û����������
		var re_user_password = $("input#re_user_password").val();

		if (user_password != re_user_password){
			$("#re_user_password_error").text("�Բ���,������������벻һ�£�");
				$("input#re_user_password").focus(function(){
					$("#re_user_password_error").text("");
				});
		}
	});

	$("input#user_name").blur(function(){

    		var user_name = $("input#user_name").val();

    		if (user_name == ""){
    			$("#user_name_error").text("�Բ���,���ֲ���Ϊ�գ�");

    			$("input#user_name").focus(function(){
                	$("#user_name_error").text("");
                });
    		}

    });

    $("input#user_phone").blur(function(){

        		var user_phone = $("input#user_phone").val();			//��ȡ�û�����ĵ绰

        		if (user_phone == ""){		// ���Ϊ�գ��������ʾ��Ϣ
        			$("#user_phone_error").text("�Բ���,�绰����Ϊ�գ�");

        			$("input#user_phone").focus(function(){
                    	$("#user_phone_error").text("");
                    });
        		}

     });

  }
  function onMouseOver(){
  		var user_email = $("input#user_email").val();
  		var user_password = $("input#user_password").val();
  		var re_user_password = $("input#re_user_password").val();
  		var user_name = $("input#user_name").val();
  		var user_phone = $("input#user_phone").val();

  		if (user_password != re_user_password){		//�Ƚ����룬����ȷ�ͱ���
        			alert("�Բ���,������������벻һ�£�");
        			$("#reset").click(); // ����reset
        		}
  		if (user_email=="" || user_name=="" || user_phone=="" || user_password=="" || re_user_password==""){

  			alert("��δ��д�����������ԣ�");
            $("#reset").click(); // ����reset

  		}

  }

  	$("button#submit").click(function(){

		var user_email = $("input#user_email").val();
  		var user_password = $("input#user_password").val();
  		var re_user_password = $("input#re_user_password").val();
  		var user_name = $("input#user_name").val();
  		var user_phone = $("input#user_phone").val();

  		$.post(url,
  				{
  					user_email: user_email,
  					user_password: user_password,
  					user_repassword: user_repassword,
  					user_name: user_name,
  					user_phone: user_phone
  				},
  				function(data, status){
  					alert("Data: "+data + "\n" + "Status: "+status);
  				}
  			 );
  	});
</script>
</head>
<body>

<!-- Modal -->
<div class="modal fade bg-info" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog bg-info">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  	   	 <ul class="nav nav-tabs bg-info">
  				<li role="presentation" class="active"><a class="btn btn-info" id="login"  href="#tab_login" data-toggle="tab">��¼</a></li>
  				<li id="register" role="presentation"><a class="btn btn-info" href="#tab_register" data-toggle="tab">ע��</a></li>
			 </ul>
      </div>
      <div class="modal-body  bg-info">
      	 <div class="tab-content">
    		<div role="tabpanel" class="tab-pane active" id="tab_login">
    			<form class="form-group" action="http://thinktank.awa.vc/index.php/Home/User/userlogin" method="post">
				  <div class="form-group">
				    <label for="email">Email��</label>
				    <input type="input" class="form-control" id="email" name="user_email">
				  </div>
				  <div class="form-group">
				    <label for="password">�� �룺</label>
				    <input type="password" class="form-control" id="password" name="user_password">
				  </div>
				  <div class="checkbox">
				  	<label>
				  		<input type="checkbox" id="remember" name="remember">��ס����
				  	</label>
				  </div>
				  <button type="submit" class="btn btn-primary">�� ¼</button>
				</form>
    		</div>
    		<div role="tabpanel" class="tab-pane" id="tab_register">
    			<form  class="form-group">
				  <div class="form-group">
				  	<span class="text-danger"> *</span>
				    <label for="user_email">Email��</label>
				    <span id="user_email_error" class="text-warning"></span>
                    	 <input type="input" class="form-control" id="user_email" name="user_email">
				  </div>
				  <div class="form-group">
				  	<span class="text-danger"> *</span>
				    <label for="user_password">�� �룺</label>
				    <span id="user_password_error" class="text-warning"></span>
				    <input type="password" class="form-control" id="user_password" name="user_password">
				  </div>
				  <div class="form-group">
				  	<span class="text-danger"> *</span>
				    <label for="re_user_password">�ٴ��������룺</label>
				    <span id="re_user_password_error" class="text-warning"></span>
				    <input type="password" class="form-control" id="re_user_password" name="repassword">
				  </div>
				  <div class="form-group">
				  	<span class="text-danger"> *</span>
				    <label for="user_name">�û���</label>
				    <span id="user_name_error" class="text-warning"></span>
				    <input type="input" class="form-control" id="user_name" name="user_name">
				  </div>
				  <div class="form-group">
				  	<span class="text-danger"> *</span>
				    <label for="user_phone">�ֻ���</label>
				    <span id="user_phone_error" class="text-warning"></span>
				    <input type="input" class="form-control" id="user_phone" name="user_phone">
				  </div>
				  <div class="row">
				  	<div class="col-sm-3 col-sm-offset-2">
						<button id="submit" class="btn btn-primary" onmouseover="onMouseOver()">ȷ��ע��</button>
					</div>
					<div class="col-sm-3 col-sm-offset-2">
						<button id="reset" type="reset" class="btn btn-primary">������д</button>
					</div>
				  </div>
				 </form>
				</div>
		 	</div>
    	  </div>
  		</div>
      </div>
  <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">�Ȳ���¼</button>
        <button type="button" class="btn btn-primary">��¼</button>
      </div>-->
   </div>
</body>
</html>