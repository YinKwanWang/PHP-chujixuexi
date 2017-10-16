<?php 

    session_start();
    # unset($_SESSION['name']);# 把name值去掉

    session_destroy();# 会把session里面的所有东西全部干掉

 ?>