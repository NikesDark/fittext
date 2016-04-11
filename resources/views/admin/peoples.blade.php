@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>id</th>
                        <th>phone number</th>
                        <th>activity</th>
                        <th>gender</th>
                        <th>age</th>
                        <th>weight</th>
                        <th>tall</th>
                        <th></th>
                    </tr>
                    @foreach($peoples as $people)
                        <tr>
                            <td>{{ $people->id }}</td>
                            <td><a href="/messages/{{ $people->phone_number }}">#{{ $people->phone_number }}</a></td>
                            <td>{{ $people->activity }}</td>
                            <td>{{ $people->gender }}</td>
                            <td>{{ $people->age }}</td>
                            <td>{{ $people->weight }}</td>
                            <td>{{ $people->tall }}</td>
                            <td><a href="/peoples/delete/{{ $people->id }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                    @endforeach
                </table>

                <div class="row">
                    <div class="col-xs-10">
                        <div class="col-md-offset-5">
                            {!! $peoples->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
