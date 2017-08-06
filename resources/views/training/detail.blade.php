@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>{{ $training['title'] }} by {{ $training['author']['name'] }}</h2></div>

                    <div class="panel-body">

                        <div>Location: {{ $training['location'] }}</div>
                        <div><a href="{{ $training['link'] }}">Link</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection