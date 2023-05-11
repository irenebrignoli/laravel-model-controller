@extends('layouts.app')

@section('title', 'My Movie list')

@section('content')
  <div class="container">
    <h1 class="text-center">It's Movie time</h1>
    <div class="row justify-content-center my-5 gy-4">

      @foreach ( $movies as $movie)
      <div class="col-3">
        <div class="card ms_card">
          <img src="https://us.123rf.com/450wm/ghenadie/ghenadie1604/ghenadie160400080/55827845-cinema-background-with-film-strips-and-light-rays-vector-illustration.jpg" class="card-img-top ms_img" alt="...">
          <div class="card-body ms_card">
            <h5 class="card-title">{{$movie['title']}}</h5>
            <div>Original title: {{$movie['original_title']}}</div>
          </div>
          <ul class="list-group list-group-flush ms_card">
            <li class="list-group-item ms_card">Nazionalità: {{$movie['nationality']}}</li>
            <li class="list-group-item ms_card">Dat uscita: {{$movie['date']}}</li>
            <li class="list-group-item ms_card">Voto: {{$movie['vote']}}</li>
          </ul>
        </div>
      </div>
      @endforeach
      

    </div>
  </div>
  

@endsection