@extends('layouts.front.default')

@section('title',env('APP_NAME').' - Create')

@section('main-content')


<div class="container mt-2">
    <div class="backup">
      <a href="{{ url('home') }}"> <p style="color: red; font-weight: 500">Cancel</p></a>
      <p style="color: rgb(26, 26, 26); font-weight: 500">2/2</p>
    </div>
  </div>

  <div class="mt-2 mb-3">
    <div class="inges">
      <p class="m_topic mb-0" style="margin-left: 10px">Ingredients</p>

    </div>
  </div>
    <div class="ingredientDiv">
        <div class="container mb-1">
            <div class="row" style="align-items: center; justify-content: center">
            <div class="col-1">
                <div class="coins">
                <img src="{{ url('assets/front/images/dots.png') }}" alt="" />
                </div>
            </div>
            <div class="col-11">
                <form class="cover_in">
                <div class="field">
                    <input
                    type="text"
                    class="upload__input ingredientsText"
                    placeholder="Enter ingredient"
                    />
                </div>
                </form>
            </div>
            </div>
        </div>

        <div class="container mt-4">
            <div class="row" style="align-items: center; justify-content: center">
            <div class="col-1">
                <div class="coins">
                <img src="{{ url('assets/front/images/dots.png') }}" alt="" />
                </div>
            </div>
            <div class="col-11">
                <form class="cover_in">
                <div class="field">
                    <input
                    type="text"
                    class="upload__input ingredientsText"
                    placeholder="Enter ingredient"
                    />
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>

  <div class="container mt-1 p-3">
    <div class="mt-2 mb-3">
      <div class="ing_border">
        <div class="inges">
          <div class="groups addIngredients">
            <i
              class="fa-solid fa-plus"
              style="color: #444444; font-weight: 700"
            ></i>
            <p class="mb-0" style="color: #444444; font-weight: 500">
              Ingredients
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container mt-2">
    <div class="row stepsDiv" style="align-items: center; justify-content: center">
      <p class="m_topic" style="margin-left: 10px">Steps</p>


      <div class="col-1">
        <div class="coins">
          <div class="correct mb-3">
            <p class="mb-0">1</p>
          </div>
          <img src="{{ url('assets/front/images/dots.png') }}" alt="" />
        </div>
      </div>
      <div class="col-11">
        <textarea
          class="message_box stepsText"
          required="true"
          placeholder="Tell about your food"
          name=""
          id="steps_1"
        ></textarea>
      </div>


      <div class="text-center cover_pic_div" id="cover_pic_1">
        <i class="fa-solid fa-camera" style="color: #002849; font-size: 40px;"></i>
        <input type="file" id="cover-photo-input-1" style="display: none;" class="cover-photo-input" accept="image/*">
        <img id="cover-photo-preview-1" style="width:100%">
      </div>

  </div>


</div>

<div class="container mt-1 p-3">
    <div class="mt-2 mb-3">
      <div class="ing_border">
        <div class="inges">
          <div class="groups addSteps">
            <i
              class="fa-solid fa-plus"
              style="color: #444444; font-weight: 700"
            ></i>
            <p class="mb-0" style="color: #444444; font-weight: 500">
              Steps
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Tab 1 Content -->

  <!-- end container -->

  <!-- Tab 2 Content  -->

  <div class="container text-center main_catlog mb-5">
      <a class="category-button mb-5" data-target="tab1" href="{{ url('create') }}">Back</a>
      <a class="category-button mb-5 updateRecipe" data-target="tab1">Next</a>
    </div>


    <script>

        $(document).on('change', '.cover-photo-input', function(event) {
            var str = $(this).attr('id');
            var number = str.match(/\d+/)[0];

            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                const preview = $('#cover-photo-preview-'+number);
                preview.attr('src', e.target.result);
                preview.css('display', 'block');

                $("#cover_pic_"+number+" i").hide();
                $("#cover_pic_"+number+" span").hide();
                };
                reader.readAsDataURL(file);
            }
        });


        $(document).on('click','.cover_pic_div', function() {
            var str = $(this).attr('id');
            var number = str.match(/\d+/)[0];
            $('#cover-photo-input-'+number).click();
        });

      </script>


<script>
    var step = 2;
    $(document).on("click",".addSteps",function(){
        var str = `<div class="col-1">
        <div class="coins">
          <div class="correct mb-3">
            <p class="mb-0">`+step+`</p>
          </div>
          <img src="{{ url('assets/front/images/dots.png') }}" alt="" />
        </div>
      </div>
      <div class="col-11">
        <textarea
          class="message_box stepsText"
          required="true"
          placeholder="Tell about your food"
          name=""
          id="steps_`+step+`"
        ></textarea>
      </div>
      <div class="text-center cover_pic_div"  id="cover_pic_`+step+`">
        <i class="fa-solid fa-camera" style="color: #002849; font-size: 40px;"></i>
        <input type="file" id="cover-photo-input-`+step+`" style="display: none;" class="cover-photo-input" accept="image/*">
        <img id="cover-photo-preview-`+step+`" style="width:100%">
        </div>`;

        $(".stepsDiv").append(str);

        step++;
    });


    $(document).on("click",".addIngredients",function(){

        var str = `<div class="container mt-4">
            <div class="row" style="align-items: center; justify-content: center">
            <div class="col-1">
                <div class="coins">
                <img src="{{ url('assets/front/images/dots.png') }}" alt="" />
                </div>
            </div>
            <div class="col-11">
                <form class="cover_in">
                <div class="field">
                    <input
                    type="text"
                    class="upload__input"
                    placeholder="Enter ingredient"
                    />
                </div>
                </form>
            </div>
            </div>
        </div>`;

        $(".ingredientDiv").append(str);
    });
</script>


<script>
    var ajaxRequestInProgress = false;

    $(document).on("click", ".updateRecipe",function(){
        if (ajaxRequestInProgress) {
            return;
        }

        ajaxRequestInProgress = true;

        var ingredients = [];
        $(".ingredientsText").each(function(){
            ingredients.push($(this).val());
        });

        var steps = [];
        var images = [];
        $(".stepsText").each(function(){
            var str = $(this).attr('id');
            var number = str.match(/\d+/)[0];

            if ($('#cover-photo-input-'+number)[0].files.length > 0) {
                var fileInput = $('#cover-photo-input-'+number)[0].files[0];
                images.push(fileInput);
            }

            steps.push($(this).val());

        });


        var formData = new FormData();
        formData.append('ingredients', JSON.stringify(ingredients));
        formData.append('steps', JSON.stringify(steps));
        for (var i = 0; i < images.length; i++) {
            formData.append('image[]', images[i]);
        }
        formData.append('recipe_id', {{ $id }});



        $.ajax({
            url: "{{ url('/api/update-recipe') }}",
            method: "POST",
            dataType: "json",
            data: formData,
            processData: false,
            contentType: false,
            success:function(response){
                ajaxRequestInProgress = false;
                //window.location.href = "{{ url('/ingredients') }}";
            },
            completed:function(){
                ajaxRequestInProgress = false;
                //window.location.href = "{{ url('/ingredients') }}";
            },
            error:function(xhr){

                $.each(xhr.responseJSON.error, function(key, value){

                });

                ajaxRequestInProgress = false;
            }
        });
    });

</script>

@endsection
