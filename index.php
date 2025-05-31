<?php
//die();
if($_POST){
			$username = $_POST['name'];
	$url = "http://127.0.0.1/game.php?name=".$username;
	header("Location: {$url}");
	die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">

<title>Mu Angel</title>
<style type="text/css">
h1 {color:blue;}
p {color:blue;}
 div.special
{
	padding: 10px;
	text-align: center;
	border: 3px dashed #ccc; }
</style>
</head>
<body>
          <center><h1>LOGIN Account</h1></center>
<div class="special">
        <FORM id="form1" name="form1" onSubmit="return frmCheck()" action="" method="post">
<text>ENTER ACCOUNT TO GAME</text>
          <p>
            <label for="Username">ACCOUNT: </label>
            <input type="text" name="name" id="name" value=""/>
          </p>

          <p>
            <input type="submit" name="login" value="LOG IN" />
          </p>
    </form>
    </div>
    </body>
</html>