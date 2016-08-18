<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >

    <style media="screen">
      h1{
        text-align: center;
        font-family: Verdana;
      }
      button{
          position: relative;
          top: 100px;
          left: 45% ;
          width:150px !important;
          height: 45px !important;
         }
    </style>
  </head>

    <body background="banner01.jpg">
      <?php
      session_start();
      if ($_SESSION['checkLogin']) {?>

        <h1 style="color:white; font-size:45px;">Xosh Gelmisiniz</h1>
        <form class="post2" action="day6.php" method="post">
            <button type="submit" class="btn btn-danger" name="button2">Sign Out</button>
        </form>
      <?php }else{
        header('Location:day5.php');
      }
      ?>

    </body>
</html>
