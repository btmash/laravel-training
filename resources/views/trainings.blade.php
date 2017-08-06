@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new training</div>

                    <div class="panel-body">
                        @foreach($trainings as $training)
                            <li>
                                <a href="{{ route('training', ['id' => $training['id']]) }}">{{ $training['title'] }}</a>
                            </li>                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection