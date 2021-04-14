<?php 
    if(!isset($_GET['id']) && $_GET['id'] < 1){
        header('Location: ../blog');
        exit;
    }
?>  
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    

    <title>How To Gain Weight</title>
  </head>
  <body>
        <?php 
          include '../includes/header.php';
        ?>


        <?php
         $blog = json_decode(
            file_get_contents('http://localhost/diamond/api/blog/only/'.$_GET['id']),
            TRUE
          );
        echo '   <header>
          <h2>'.$blog['title'].'</h2>
          
          <img src="http://localhost/diamond/api/storage/'.$blog['image'].'" class="img-fluid">
        </header>

        <p class="para">
        '.$blog['description'].'
        </p>
';
     
        ?>
       

          </div>
        </div>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>