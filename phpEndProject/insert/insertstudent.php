<?php require_once 'base.php';?>
<?php

if (! isset($_SESSION)) {
    session_start();
}
if (! isset($_SESSION['userName'])) {
    header("location:login.php");
}
$userName = $_SESSION['userName'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="../js/laydate.js"></script>
<title>增加学生信息</title>
</head>
<body>
<div class="page-heading">
	<div id="page-wrapper">
		<div id="page-inner">
			<div class="row">
				<div class="col-md-12">
					<h2>增加学生信息</h2>
				</div>
			</div>
			<!-- /. ROW  -->
			<hr />
			<div class="row ">

				<div
					class="col-md-5 col-md-offset-0 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<strong> 添加信息 </strong>
						</div>
						<div class="panel-body">
							<form role="form" action='insertstudentdo.php' method='post'>
								<input type='hidden' name='id' /> <br />
								<div class="form-group input-group">
									<tr>
										<td align='center'>学号</td>
										<td><input type='text' name='studentId' /></td>
									</tr>
								</div>
								<div class="form-group input-group">
									<tr>
										<td align='center'>姓名</td>
										<td><input type='text' name='name' /></td>
									</tr>
								</div>
								<div class="form-group input-group">

									<tr>
										<td align='center'>班级</td>
										<td><input type='text' name='className' /></td>
									</tr>
								</div>
								
								<div class="form-group input-group">

									<tr>
										<td align='center'>性别</td>
										<td><input type='radio' name='sex' value='男'>男 </input> <input
											type='radio' name='sex' value='女'>女</input></td>
									</tr>
								</div>
								

						

						<div class="form-group input-group">
							<input type="submit" name="Submit" value="确认添加"
								class="btn btn-primary ">
						</div>
						<hr />
					
					</form>
				</div></div>

			</div>
		</div>


	</div>
	</div>
	</div>


	<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
	<!-- JQUERY SCRIPTS -->
	<script src="../assets/js/jquery-1.10.2.js"></script>
	<!-- BOOTSTRAP SCRIPTS -->
	<script src="../assets/js/bootstrap.min.js"></script>
	<!-- METISMENU SCRIPTS -->
	<script src="../assets/js/jquery.metisMenu.js"></script>
	<!-- CUSTOM SCRIPTS -->
	<script src="../assets/js/custom.js"></script>
	<script type="text/javascript">
!function(){
	laydate.skin('molv');//切换皮肤，请查看skins下面皮肤库
	laydate({elem: '#birthday'});//绑定元素
}();
</script>

</body>
</html>