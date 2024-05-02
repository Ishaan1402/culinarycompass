<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compass Culinary</title>
    <link rel="stylesheet" href="{{ url('assets/front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/front/css/bootstrap.css') }}" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <style></style>
  </head>
  <body>
    <div class="container">
      <div class="row">
       <div class="hero">
        <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center">
          <div class="banner mt-3 mb-3">
            <img src="{{ url('assets/front/images/banner_1.png') }}" alt="main_banner">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div class="topic mt-3 mb-4">
            <h3 class="text-center">Start Cooking</h3>
            <p class="text-center">Lets join our Community to<br>Cook better Food !</p>

          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center ">
          <div class="option mt-4 ">
           <a href="{{ url('login') }}"><button class="click">Get Started</button></a>


          </div>
        </div>
       </div>
      </div>
    </div>




    <script src="{{ url('assets/front/js/min.js') }}"></script>


  </body>
</html>
