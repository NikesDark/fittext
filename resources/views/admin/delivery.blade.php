@extends('layouts.app')

@section('content')
    <div class="container">
                <div class="col-md-8 col-md-offset-2">
                    <a class="btn btn-primary btn-block" href="/delivery/add">Add delivery message</a>
                </div>
        <div class="row"></div>
            <div class="col-md-8 col-md-offset-2">
                <div class="row"></div>

                <table class="table table-striped table-hover">
                    <tr>
                        <th>id</th>
                        <th>people id</th>
                        <th>phone number</th>
                        <th>message</th>
                        <th>time</th>
                        <th></th>
                    </tr>
                    @foreach($deliveries as $delivery)
                        <tr>
                            <td>{{ $delivery->id }}</td>
                            <td>{{ $delivery->people_id }}</td>
                            <td>#{{ \App\People::find($delivery->people_id)->phone_number }}</td>
                            <td>{{ $delivery->message }}</td>
                            <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($delivery->created_at))->diffForHumans() }}</td>
                            <td><a href="/delivery/delete/{{ $delivery->id }}"><span class="glyphicon glyphicon-remove"></span></a></td>
                        </tr>
                    @endforeach
                </table>

                <div class="row">
                    <div class="col-xs-10">
                        <div class="col-md-offset-5">
                            {!! $deliveries->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
