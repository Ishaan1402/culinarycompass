<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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

    <script src="{{ url('assets/front/js/jquery.min.js') }}"></script>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <style></style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="hero">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="topic mt-3 mb-4">
              <h3 class="text-center">Welcome Back !</h3>
              <p class="text-center">Please enter your account here</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <form class="login">
              <div class="login__field mt-2 mb-4">
                <i class="fa-regular fa-envelope" style="color: #474b5c"></i>
                <input
                  type="email"
                  class="login__input"
                  placeholder=" Email Address"
                  autocomplete="off"
                  name="email"
                  id="email"
                  value=" "
                />
              </div>
              <div class="login__field mt-2 mb-4">
                <i class="fa-solid fa-lock" style="color: #474b5c"></i>
                <input
                  type="password"
                  class="login__input password__input"
                  placeholder="Password"
                  autocomplete="off"
                  name="password"
                  id="password"
                  value=" "
                />
                <i
                  class=" eyes fa-regular fa-eye"
                  style="color: #bababa;"
                ></i>
              </div>
            </form>
          </div>
          <div class="errorArea">
            <p class="sub_top">Issues on login:</p>
            <div class="errorAreaList">



            </div>
          </div>
          <div
            class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center"
          >
            <div class="option mt-4">
              <button class="click loginBtn">Login</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="loge d-flex justify-content-center">
      <p>Don't have any account ?</p>
      <a href="{{ url('signup') }}"><p class="sign">Sign Up</p></a>
    </div>

    <script src="{{ url('assets/front/js/min.js') }}"></script>

    <script>
        window.onload = function() {
            document.getElementById("email").value = "";
            document.getElementById("password").value = "";
        };
    </script>
    <script>
        $(".errorArea").hide();
        var ajaxRequestInProgress = false;

        $(document).on("click", ".loginBtn",function(){
            if (ajaxRequestInProgress) {
                return;
            }

            ajaxRequestInProgress = true;

            var email = $("#email").val();
            var password = $("#password").val();

            $.ajax({
                url: "{{ url('/api/login') }}",
                method: "POST",
                dataType: "json",
                data:{
                    email: email,
                    password: password
                },
                success:function(response){
                    ajaxRequestInProgress = false;
                    window.location.href = "{{ url('/home') }}";
                },
                completed:function(){
                    ajaxRequestInProgress = false;
                    window.location.href = "{{ url('/home') }}";
                },
                error:function(xhr){
                    $(".errorArea .errorAreaList").text("");
                    $(".errorArea").show();

                    $.each(xhr.responseJSON.error, function(key, value){
                        $.each(value, function(key1, value1){
                            str = `<div class="ticks">
                                <i class="fa-solid fa-check" style="color: #818181;"></i>
                                <p class="least">`+ value1 +`</p>
                            </div>`;

                        $(".errorAreaList").append(str);
                        });

                    });

                    ajaxRequestInProgress = false;
                }
            });
        });

    </script>
  </body>
</html>
