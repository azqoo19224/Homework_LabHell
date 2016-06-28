<?php 
 
  if(!isset($_COOKIE["userName"]))
       $userName = "Guest";
  else
      $userName = $_COOKIE["userName"];
  
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
</head>
<body>

<table style="font-family:DFKai-sb;" width="600" border="10" align="center" cellpadding="9" cellspacing="10" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
    
    
    <?php if($userName == "Guest") { ?>
    <td align="center" valign="baseline"><a href="login.php">登入</a> 
    <?php  } else { ?>
    <td align="center" valign="baseline"><a href="login.php?logout=1">登出</a>
    <?php } ?>
    
    
   | <a href="secret.php">會員專用頁</a></td>
  
  
  </tr>
  <tr>
    <td align="center" bgcolor="#AAAAAA">&nbsp;
    <?php  echo "Welcome!! ".$userName?>
    </td>
  </tr>
</table>


</body>
</html>