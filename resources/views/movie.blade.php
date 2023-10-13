@extends('layouts.app')

@section('content')
    

<div class="container mt-5">
    <div class="row">

        @foreach ($movies as $movie)
            
       
        <div class="col">
            <div class="card">
                <div class="card-body">
                    {{$movie->title}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>

@endsection