<!DOCTYPE html>
<html lang="ko">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta charset="UTF-8">
	<title>welcome</title>
</head>
<body>
	<?
    $name = $_GET["name"];
    $email = $_GET["email"];
	?>

	이름:<?echo $name;?> 반갑습니다 <br>
	이메일:<?echo $email;?> 사이트에 오신걸 환영합니다 
</body>
</html>