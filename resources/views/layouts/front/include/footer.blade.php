<div class="down_nav pb-2">
    <a href="{{ url('/home') }}">
        <div class="bottom {{ Request::is('home') ? 'live' : '' }}">
            <i class="fa-solid fa-house" style="font-size: 22px"></i>
            <p class="mb-0">Home</p>
        </div>
    </a>
    <a href="{{ url('/create') }}">
        <div class="bottom {{ Request::is('create') ? 'live' : '' }}">
        <i class="fa-solid fa-upload" style="font-size: 22px"></i>
        <p class="mb-0">Upload</p>
        </div>
    </a>
    <div class="bottom">
      <i
        class="fa-solid fa-heart"
        style="color: #161616; font-size: 22px"
      ></i>
      <p class="mb-0">Favorites</p>
    </div>
    <div class="bottom">
      <i class="fa-solid fa-bell" style="font-size: 22px"></i>
      <p class="mb-0">Notification</p>
    </div>
    <div class="bottom">
      <i class="fa-solid fa-user-large" style="font-size: 22px"></i>
      <p class="mb-0">Profile</p>
    </div>
  </div>


  <div id="filter__modal" class=" hidden">
    <div class="filter__modal--container">
      <i class="fa-solid fa-xmark filter_close" style="color: #383838"></i>

      <p class="m_topic text-center">Add Filter</p>
      <div class="container text-center main_catlog mb-4">
        <p class="category-button" data-target="tab1">All</p>
        <p class="category-button" data-target="tab1">Food</p>
        <p class="category-button" data-target="tab1">Drink</p>
      </div>

      <div class="d-flex">
        <p class="m_topic" style="margin-left: 40px">Cooking Duration</p>
        <p>(in minutes)</p>
      </div>

      <div class="mb-5">

        <div>
          <div class="container text-center main_catlog mb-1">
            <p style="font-weight: 700; color: black;">1</p>
            <p style="font-weight: 700; color: black;">2</p>
            <p  style="font-weight: 700; color: black;">3</p>
          </div>


        </div>


        <input type="range" min="1" max="3" step="1" value="0">
      </div>

      <div class="container text-center main_catlog mb-4">
        <p class="category-button" data-target="tab1">Cancel</p>
        <p class="category-button" data-target="tab1">Done</p>
      </div>
    </div>

  </div>

  <script>
    let filterBtn = document.querySelector(".filter__btn");
    let filter = document.getElementById("filter__modal");
    let filterClose = document.querySelector(".filter_close");

    filterBtn.addEventListener("click", function () {
      filter.classList.remove("hidden");
    });
    filterClose.addEventListener("click", () => {
      filter.classList.add("hidden");
    });
  </script>

  <script src="js/min.js"></script>

  <script
    type="text/javascript"
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"
  ></script>

  <script>
    // Change button to active when clicked
    $(".category-button").click(function () {
      $(".category-button").removeClass("active");
      $(this).addClass("active");
    });

    // Change opps to active when clicked
    $(".category-opps").click(function () {
      $(".category-opps").removeClass("allive");
      $(this).addClass("allive");
    });

    // Makes variables for button and page content
    var $categoryButton = $(".category-button");
    var $pageContent = $(".page-content");

    // Hide all page content shows first one
    $(".page-content").hide().first().show();

    // Makes variables for button and page content
    var $categoryButton = $(".category-opps");
    var $pageContent = $(".page-count");

    // Hide all page content shows first one
    $(".page-count").hide().first().show();

    // When button is clicked, show content
    $categoryButton.on("click", function (e) {
      var $category = $(this).data("target");
      $pageContent
        .hide()
        .find("img")
        .hide()
        .end()
        .filter("." + $category)
        .show()
        .find("img")
        .fadeIn();
    });
  </script>
</body>
</html>
