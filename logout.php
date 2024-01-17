<?php
  //mengaktifkan session
  session_start();

  //menghapus semua session
  session_destroy();

  //mengalihkan halaman sambil mengirimi pesan 
  header("location:index.php?pesan=logout");
?>