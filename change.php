  
<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("config.php");

$id = $_GET['id'];
$pw = $_GET['pw'];
if($_SESSION['username'] != null && $pw != null)
{
        $id = $_SESSION['username'];
    
        //更新資料庫資料語法
        $sql = "update member_table set password=$pw where username='$id'";
        if(mysql_query($sql))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}
?>
