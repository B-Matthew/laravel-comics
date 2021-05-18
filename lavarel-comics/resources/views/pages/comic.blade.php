@extends('layouts.main-layout')
@section('content')
  <section class="title-comic">
    <div class="container-comic">
      <div class="img-comic">
        <img src="{{$item['thumb']}}" alt="">
        <div id="book">COMIC BOOK</div>
        <div id="gallery">VIEW GALLERY</div>
      </div>
    </div>
  </section>

  <section class="description-comic">
    <div class="container-comic">
      <div class="box-comic1">
        <h2>{{$item['title']}}</h2>
        <div class="avaible-comic">
          <p>U.S Price: {{$item['price']}}</p>
          <p>AVAIBLE</p>
          <p>Check Availability <i class="fas fa-caret-down"></i></p>
        </div>
        <p>{{$item['description']}}</p>
      </div>
      <div class="box-comic2">
        <h4>ADVERTISEMENT</h4>
        <img src="{{ asset('/storage/images/adv.jpg') }}" alt="">
      </div>
    </div>
  </section>

  <section class="specs">
    <div class="container-comic">
      <div class="talent-comic">
        <h4>Talent</h4>
        <div class="flex-comic">
          <h5>Art By:</h5>
          <p>@foreach ($item['artists'] as $artist)
            <span>{{$artist}},</span>
          @endforeach</p>
        </div>
        <div class="flex-comic">
          <h5>Written By:</h5>
          <p>@foreach ($item['writers'] as $writer)
            <span>{{$writer}},</span>
          @endforeach</p>
        </div>
      </div>
      <div class="spec-comic">
        <h4>Specs</h4>
        <div class="flex-comic">
          <h5>Series:</h5>
          <p id="blue">{{$item['series']}}</p>
        </div>
        <div class="flex-comic">
          <h5>U.S Price:</h5>
          <p>{{$item['price']}}</p>
        </div>
        <div class="flex-comic">
          <h5>On Sale Date:</h5>
          <p>{{$item['sale_date']}}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="icon-comic">
    <div class="container-comic">
      <div class="icon-box">
        <h5>DIGITAL COMICS</h5>
        <img src="{{ asset('/storage/images/icons-1.png') }}" alt="">
      </div>
      <div class="icon-box">
        <h5>SHOP DC</h5>
        <img src="{{ asset('/storage/images/icons-2.png') }}" alt="">
      </div>
      <div class="icon-box">
        <h5>COMIC SHOP LOCATOR</h5>
        <img src="{{ asset('/storage/images/icons-3.png') }}" alt="">
      </div>
      <div class="icon-box">
        <h5>SUBSCRIPTIONS</h5>
        <img id="svg" src="{{ asset('/storage/images/icons-4.png') }}" alt="">
      </div>
    </div>
  </section>
@endsection
