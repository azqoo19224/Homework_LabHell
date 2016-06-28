<?php
  // echo "[" .$_GET["backurl"]."]";
 // Member(secret) Page:
    //     if(!isset($_COOKIE["userName"]))
    // {
    //   header("location: login.php?backrl=seret.php");
    //   exit();
    // }
    
    if (isset($_GET["logout"]))
       {
    	    setcookie("userName", "Guest", time()-3600);
	        header("Location: index.php");
	        exit();
      }
      
    if (isset($_POST["btnHome"]))
      {
	      header("Location: index.php");
	      exit();
      }
 
  //   if(isset($_POST["btnOK"]))
  //   {
  //     if($_POST["txtUserName"] != "")
  //     {
  //       setcookie("userName",$_POST["txtUserName"]);
      
 
  //       if(isset($_COOKIE["lastPage"]))
  //         header("location:%s" .$_COOKIE["lastPage"]);
  //       else 
  //         header("location: index.php");
      
  //       exit();
      
  //   }
  // }
  if (isset($_POST["btnOK"]))
{
	$sUserName = $_POST["txtUserName"];
	if (trim($sUserName) != "")
	{
		setcookie("userName", $sUserName);
		if (isset($_COOKIE["lastPage"]))
		  header(sprintf("Location: %s", $_COOKIE["lastPage"]));
		else
		   header("Location: index.php");
		exit();
	}
	
}
  
  
  
  
  
  
  
  
  
?>

  <html>

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <title>Lab - Login</title>
    </head>
    <body>
      <form id="form1" style="font-family:DFKai-sb;" name="form1" method="post" action="login.php">
        <table width="600" border="10" align="center" cellpadding="9" cellspacing="10" bgcolor="#F2F2F2">
          <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
              <font color="#FFFFFF">會員系統 - 登入</font>
            </td>
          </tr>
          <tr>
            <td width="80" align="center" valign="baseline">帳號</td>
            <td valign="baseline"><input type="text" size="54" name="txtUserName" id="txtUserName" /></td>
          </tr>
          <tr>
            <td width="80" align="center" valign="baseline">密碼</td>
            <td valign="baseline"><input type="password" size="54" name="txtPassword" id="txtPassword" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center" bgcolor="#CCCCCC">
              <input type="submit" name="btnOK" id="btnOK" value="登入" />
              <input type="reset" name="btnReset" id="btnReset" value="重設" />
              <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
            </td>
          </tr>
        </table>
      </form>
      </body>
        </html>