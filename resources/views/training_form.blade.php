@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new training</div>

                    <div class="panel-body">
                        <form action="{{ route('create_training') }}" method="POST">
                            {{ csrf_field() }}
                            Title: <input type="text" name="title"><br>
                            Link: <input type="text" name="link"><br>
                            Location: <input type="text" name="location"><br>
                            Body: <textarea name="body">Write something...</textarea><br>
                            From: <input type = "date" name="date_from"><br>
                            Till: <input type = "date" name="date_to"><br>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection