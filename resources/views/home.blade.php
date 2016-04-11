@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">


                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Name</th>
                                <th>Count</th>
                            </tr>
                                <tr>
                                    <td>Peoples</td>
                                    <td>{{ \App\People::all()->count() }}</td>
                                </tr>
                            <tr>
                                <td>Messages</td>
                                <td>{{ \App\Calories::all()->count() }}</td>
                            </tr>
                            <tr>
                                <td>Morning delivery messages</td>
                                <td>{{ \App\Delivery::all()->count() }}</td>
                            </tr>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
