@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Delivery</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/delivery/add') }}">
                            {!! csrf_field() !!}

                            <div class="form-group{{ $errors->has('people_id') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Phone number</label>

                                <div class="col-md-6">

                                    <select class="form-control" name="people_id" value="{{ old('people_id') }}">
                                        @foreach($peoples as $people)
                                            <option value="{{ $people->id }}" {{ $people->id == old('people_id') ? '' : 'selected' }}>{{ $people->phone_number }}</option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('people_id'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('people_id') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Message</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="message" value="{{ old('message') }}"></textarea>

                                    @if ($errors->has('message'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Add delivery message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
