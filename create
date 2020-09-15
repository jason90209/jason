<?php
 <html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <form method="post" action="create.php" >
  帳號：<input type="text" name="id" /> <br>
  密碼：<input type="password" name="pw" /> <br>
  <input type="submit" name="button" value="確定" />
  </form>
 
///////////////////////////////////////////////////////////

 include("config.php");
$id = $_POST['id'];
$pw = $_POST['pw'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
$sql = "SELECT * FROM member_table where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);
if ( $row[1] == $id)
{
	echo '帳號重複，請洽管理員';
	echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';	
}
	 
else if($id != null && $pw != null)
{
		//新增資料進資料庫語法
        $sql = "insert into member_table (username, password) values ('$id', '$pw')";
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
        }
}
else
{
        echo '註冊失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}

  /body>
</html>
?>
