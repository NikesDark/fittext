@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-2">
                @foreach($phones as $phone)
                    <a href="/messages/{{ $phone }}">#{{ $phone }}</a> <br />
                @endforeach
            </div>
            <div class="col-xs-10">
                <div class="row"></div>
                <table class="table table-striped table-hover">
                    <tr>
                        <th>id</th>
                        <th>people_id</th>
                        <th>phone number</th>
                        <th>message</th>
                        <th>time</th>
                    </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{ $message->id }}</td>
                            <td>{{ $message->people_id }}</td>
                            <td><a href="/messages/{{ \App\People::find($message->people_id)->phone_number }}">#{{ \App\People::find($message->people_id)->phone_number }}</a></td>
                            <td>{{ $message->message }}</td>
                            <td>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($message->created_at))->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </table>

                <div class="row">
                    <div class="col-xs-10">
                        <div class="col-md-offset-5">
                        {!! $messages->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
