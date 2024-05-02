@extends('layouts.front.default')

@section('title',env('APP_NAME').' - Home')

@section('main-content')

<div class="container potion mb-4">
    <form class="home_in">
      <div class="field">
        <i class="fa-solid fa-magnifying-glass" style="color: #35558d"></i>
        <input type="text" class="login__input" placeholder="Search" />
      </div>
    </form>
    <button class="filter__btn">
      <img src="{{ url('assets/front/images/filter.png') }}" alt="" class="search__filter" />
    </button>
  </div>
  <div>
    <p class="m_topic" style="margin-left: 40px">Category</p>
  </div>

  <div class="container text-center main_catlog mb-4">
    <p class="category-button" data-target="tab1">All</p>
    <p class="category-button" data-target="tab1">Food</p>
    <p class="category-button" data-target="tab1">Drink</p>
  </div>

  <br />

  <!-- Tab 1 Content -->
  <div class="page-count tab4">
    <div class="persons">
      <div>
        <div class="member">
          <img src="{{ url('assets/front/images/tag_1.png') }}" alt="" />
          <p class="mb-0">Calum Levies</p>
        </div>
        <div class="item mt-3">
          <img src="{{ url('assets/front/images/option_1.png') }}" alt="" />
        </div>
        <div class="mt-3">
          <p class="m_topic mb-0">Pancake</p>
          <div class="kalam">
            <p class="mb-0">Food</p>
            <i
              class="fa-solid fa-circle"
              style="color: #707070; font-size: 7px"
            ></i>
            <p class="mb-0">>60 mins</p>
          </div>
        </div>
      </div>
      <div>
        <div class="member">
          <img src="{{ url('assets/front/images/tag_2.png') }}" alt="" />
          <p class="mb-0">Eilife sonas</p>
        </div>
        <div class="item mt-3">
          <img src="{{ url('assets/front/images/option_2.png') }}" alt="" />
        </div>
        <div class="mt-3">
          <p class="m_topic mb-0">Salad</p>
          <div class="kalam">
            <p class="mb-0">Food</p>
            <i
              class="fa-solid fa-circle"
              style="color: #707070; font-size: 7px"
            ></i>
            <p class="mb-0">>60 mins</p>
          </div>
        </div>
      </div>
    </div>
    <div class="persons mt-4">
      <div>
        <div class="member">
          <img src="{{ url('assets/front/images/tag_3.png') }}" alt="" />
          <p class="mb-0">Elina selbye</p>
        </div>
        <div class="item mt-3">
          <img src="{{ url('assets/front/images/option_3.png') }}" alt="" />
        </div>
        <div class="mt-3">
          <p class="m_topic mb-0">Pancake</p>
          <div class="kalam">
            <p class="mb-0">Food</p>
            <i
              class="fa-solid fa-circle"
              style="color: #707070; font-size: 7px"
            ></i>
            <p class="mb-0">>60 mins</p>
          </div>
        </div>
      </div>
      <div>
        <div class="member">
          <img src="{{ url('assets/front/images/tag_4.png') }}" alt="" />
          <p class="mb-0">John priyadi</p>
        </div>
        <div class="item mt-3">
          <img src="{{ url('assets/front/images/option_4.png') }}" alt="" />
        </div>
        <div class="mt-3 mb-5">
          <p class="m_topic mb-0">Salad</p>
          <div class="kalam">
            <p class="mb-0">Food</p>
            <i
              class="fa-solid fa-circle"
              style="color: #707070; font-size: 7px"
            ></i>
            <p class="mb-0">>60 mins</p>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection
