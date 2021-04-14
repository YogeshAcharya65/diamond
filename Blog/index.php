

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />


    <title>Blog</title>
  </head>
  <body>
    <?php 
      $PAGENAME = 'blog';
      include '../includes/header.php';
    ?>

  	 <h1>DiamondGym Blog</h1>
     <p>We understand that for many of our members, exercise plays a huge part of your physical and mental wellbeing. And we believe that taking care of that right now has never been more important. To better support you as we get back to the gym, we will be updating our blog regularly to provide you with workout ideas (for the gym and home), wellbeing and nutrition content.</p>
    </header>
  	<div class="row w-100">
      <div class="container">
        <div class="row m-3">
        <div class="col-md-6 m-4">
          <img src="image/deadlift.jpg" class="pic">
        </div>

        <div class="col-md-5 m-4">
          <h2>How To Gain Weight</h2>
          <p>Being underweight can be just as unhealthy as being obese — if not more. People who are underweight are at risk of osteoporosis, infections, fertility problems and early death.</p>
          <a href="#" class="btn btn-light btn-outline-success">Read More</a>
        </div>

        </div>

        <br>


        <h2 class="text-center" style="text-decoration: underline;"> Popular Posts</h2>
        <div class="row slider m-4" style="background-color: #AECFA6">

          <?php  $blog = json_decode(
            file_get_contents('http://localhost/diamond/api/blog/all'),
            TRUE
          ); 
          foreach ($blog as $blogs) {
             echo '
              <div class=" col-md-12 m-3">
            <a href="../article/?id='.$blogs['id'].'" class="b"><img src="http://localhost/diamond/api/storage/'.$blogs['image'].'" class="img-responsive post"><span>'.$blogs['title'].'</span></a>
          </div>
             ';

           } 
          ?>

      <!--     <div class=" col-md-12 m-3">
            <a href="#" class="b"><img src="image/stretch.jpg" class="img-responsive post"><span>Mobility exercises and stretches tor your lower back</span></a>
          </div>
  

          <div class="col-md-12 m-3">
            <a href="#" class="b"><img src="image/immune.jpg" class="img-responsive post"><span>How to support your immune system</span></a>
          </div>

          <div class="col-md-12 m-3">
            <a href="#" class="b"><img src="image/trademill.jpg" class="img-responsive post"><span>Train for Trail Running on the Treadmill</span></a>
          </div>

          <div class="col-md-12 m-3">
            <a href="#" class="b"><img src="image/inspiration.jpg" class="img-responsive post"><span>Get Inspired for 2021: The Best Motivational Gym Speeches</span></a>
          </div> -->

        </div>
        <br>
       </div>
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>

    <script type="text/javascript">
      $('.slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 2,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    </script>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
  </body>
</html>