@extends('layouts.front.default')

@section('title',env('APP_NAME').' - Create')

@section('main-content')

<div class="container mt-2">
    <div class="backup">
    <a href="{{ url('home') }}"> <p style="color: red; font-weight: 500;">Cancel</p></a>
     <p  style="color: rgb(26, 26, 26); font-weight: 500;">1/2</p>
    </div>
 </div>



 <div class="container">
   <div class="cover_pic">
     <form>
       <i
         class="fa-solid fa-image"
         style="color: #d1d1d1; font-size: 80px"
       ></i>

       <input type="file" id="cover-photo-input" style="display: none;" accept="image/*">
       <span>Add cover photo</span>
       <img id="cover-photo-preview" style="width:100%">
     </form>




   </div>
 </div>



 <div class="mt-2">
   <p class="m_topic " style="margin-left: 10px">Food Name</p>
 </div>
 <div class="container mb-1">
   <form class="cover_in">
     <div class="field">
       <input
         type="text"
         class="upload__input"
         placeholder="Enter Food Name"
         name="name"
         id="name"
       />
     </div>
   </form>
 </div>

 <div class="mt-2">
   <p class="m_topic " style="margin-left: 10px">Description</p>
 </div>
 <div class="container mb-1">
   <textarea
   class="message_box"
     required="true"
     placeholder="Tell about your food"
     name="description"
     id="description"
   ></textarea>
 </div>

 <!-- Tab 1 Content -->

 <!-- end container -->

 <!-- Tab 2 Content  -->

 <div class="d-flex">
   <p class="m_topic" style="margin-left: 40px">Cooking Duration</p>
   <p>(in minutes)</p>
 </div>

 <div class="mb-2">
   <div>
     <div class="container text-center main_catlog mb-1">
       <p style="font-weight: 700; color: black"><10</p>
       <p style="font-weight: 700; color: black">30</p>
       <p style="font-weight: 700; color: black">60></p>
     </div>
   </div>

   <input type="range" min="1" max="3" step="1" id="cooking_duration" value="1" />
 </div>

 <div class="col-lg-4 col-md-4 col-sm-12 d-flex justify-content-center mb-3">
   <div class="option mt-3">
     <button class="click saveRecipe">Next</button>
   </div>
 </div>

<script>

    document.getElementById('cover-photo-input').addEventListener('change', function(event) {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          const preview = document.getElementById('cover-photo-preview');
          preview.src = e.target.result;
          preview.style.display = 'block';

          $(".cover_pic i").hide();
          $(".cover_pic span").hide();
        };
        reader.readAsDataURL(file);
      }
    });


    document.querySelector('.cover_pic form').addEventListener('click', function() {
      document.getElementById('cover-photo-input').click();
    });
  </script>

<script>
    $(".errorArea").hide();
    var ajaxRequestInProgress = false;

    $(document).on("click", ".saveRecipe",function(){
        if (ajaxRequestInProgress) {
            return;
        }

        ajaxRequestInProgress = true;

        var name = $("#name").val();
        var description = $("#description").val();
        var cooking_duration = $("#cooking_duration").val();


        var imageFile = $("#cover-photo-input")[0].files[0];

        var formData = new FormData();
        formData.append('name', name);
        formData.append('description', description);
        formData.append('cooking_duration', cooking_duration);
        formData.append('image', imageFile);



        $.ajax({
            url: "{{ url('/api/create-recipe') }}",
            method: "POST",
            dataType: "json",
            data: formData,
            processData: false,
            contentType: false,
            success:function(response){
                ajaxRequestInProgress = false;
                window.location.href = "{{ url('/ingredients') }}"+"/"+response.data.id;
            },
            completed:function(){
                ajaxRequestInProgress = false;
                window.location.href = "{{ url('/ingredients') }}";
            },
            error:function(xhr){

                $.each(xhr.responseJSON.error, function(key, value){
                    $.each(value, function(key1, value1){

                    });
                });

                ajaxRequestInProgress = false;
            }
        });
    });

</script>
@endsection
