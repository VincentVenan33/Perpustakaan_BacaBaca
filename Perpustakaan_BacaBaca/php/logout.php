<?php
session_start();
session_destroy();

echo '<script language="javascript">alert(" Anda telah berhasil keluar!"); 
document.location="login.php?page=login";</script>';
exit();
?>