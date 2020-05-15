<?php 
session_start();
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Student</title>
	<link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css" />
	<link href="/css/jquery.mobile.flatui.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="shortcut icon" href="media/icons/favicon.ico"/>
</head>

<body>
	<div class="aqua_main">
		<?php
		if(@addslashes($_GET['c'])== "nouser"){
			echo '<div class="login_alert"><img src="media/icons/set/white/error2.png" width="32" height="32">ชื่อผู้ใช้งาน หรือรหัสผ่านผิด !</div>';
		}
		?>
		<div class="login">
			<form name="form1" method="post" action="core/takelogin.core.php">
				<table width="100%" border="0">
					<tr>
						<td align="center">
							<img src="media/logos/logo.png" alt="" width="200">
						</td>
					</tr>
					<tr>
						<td align="center">
							<input type="text" name="username" id="textlogins" autocomplete="off" autofocus placeholder="ชื่อผู้ใช้งาน" />
						</td>
					</tr>
					<tr>
						<td align="center">
							<input type="password" name="password" id="textlogins" placeholder="รหัสผ่าน" />
						</td>
					</tr>
					<tr>
						<td align="center">
							<input type="submit" name="logins"  class="button blue" value="เข้าสู่ระบบ" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>