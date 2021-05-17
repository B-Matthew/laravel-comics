@extends('layouts.main-layout')
  @section('content')
    <main>
      <section class="jumbotron">

      </section>

      <section class="comics">
        <div class="container">
          <h2>CURRENT SERIES</h2>
          <ul>
             @foreach ($data as $comic)
            <li>
              <div class="images">
                <img src="{{$comic['thumb']}}" alt="">
              </div>
              <p>{{$comic['series']}}</p>
            </li>
          @endforeach
        </ul>
        <div class="btn">
          <button id="load" type="button" name="button">LOAD MORE</button>
        </div>

      </div>
    </section>

    <section class="icons">
      
    </section>
  </main>
@endsection
