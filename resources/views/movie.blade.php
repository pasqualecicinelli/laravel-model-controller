@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row gap-3">

            <h1>Film</h1>

            @foreach ($movies as $movie)
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <span>{{ $movie->id }}</span>
                            <div class="card-title">
                                <h4>{{ $movie->title }}</h4>
                            </div>

                            <div>
                                {{ $movie->original_title }}
                            </div>
                            <div>
                                {{ $movie->nationality }}
                            </div>
                            <div>
                                {{ $movie->date }}
                            </div>
                            <div>
                                {{ $movie->vote }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
