@extends('layouts.main-layout')
  @section('content')
    <main>
      <section class="comics">
        <div class="container">
          <h2>CURRENT SERIES</h2>
          <ul>
            @foreach ($data as $comic)
              <li>
                <div class="images">
                  <a href="{{ route('comic',$loop->index)}}"><img src="{{$comic['thumb']}}" alt=""></a>
                </div>
                <p><a href="{{ route('comic',$loop->index)}}">{{$comic['series']}}</a></p>
              </li>
            @endforeach
          </ul>
          <div class="btn">
            <button id="load" type="button" name="button">LOAD MORE</button>
          </div>
        </div>
      </section>
      <section class="icons">
        <div class="container">
          <ul>
            <li>
              <img src="{{ asset('/storage/images/buy-comics-digital-comics.png') }}" alt="">
              <p>DIGITAL COMICS</p>
            </li>
            <li>
              <img src="{{ asset('/storage/images/buy-comics-merchandise.png') }}" alt="">
              <p>DC MERCHANDISE</p>
            </li>
            <li>
              <img src="{{ asset('/storage/images/buy-comics-subscriptions.png') }}" alt="">
              <p>SUBSCRIPTION</p>
            </li>
            <li>
              <img src="{{ asset('/storage/images/buy-comics-shop-locator.png') }}" alt="">
              <p>COMIC SHOP LOCATOR</p>
            </li>
            <li>
              <img id="svg" src="{{ asset('/storage/images/buy-dc-power-visa.svg') }}" alt="">
              <p>DC POWER VISA</p>
            </li>
          </ul>
        </div>
      </section>
    </main>
  @endsection
