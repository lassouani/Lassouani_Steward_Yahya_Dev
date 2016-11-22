@extends('layouts.app')

@section('content')

<!--
@if (session('status_not_modified'))
<div class="alert alert-danger">
    {{ session('status_not_modified') }}
</div>
@endif
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Add a Sprint</h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" 
                          action="{{ url('/sprints/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('sprint_number') ? ' 
has-error' : '' }}">
                            <label class="col-md-4 control-label">Sprint number<span 
                                    class="required">*</span></label>

                            <div class="col-md-6">
                                <input type="number" class="form-control" 
                                       name="sprint_number" value="{{ old('sprint_number')}} ">

                                @if ($errors->has('sprint_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('sprint_number') 
                                        }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('date_start') ? ' 
has-error' : '' }}">
                            <label class="col-md-4 control-label">Starting date<span 
                                    class="required">*</span> </label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_start" value="{{ old('date_start')}}">

                                @if ($errors->has('date_start'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_start') 
                                        }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>



                        <!--**************************************-->

                           










                         <!--**************************************-->

                         <div class="form-group{{ $errors->has('date_end') ? ' 
has-error' : '' }}">
                            <label class="col-md-4 control-label">End date<span 
                                    class="required">*</span> </label>

                            <div class="col-md-6">
                                <input type="date" class="form-control" name="date_end" value="{{ old('date_end')}}">

                                @if ($errors->has('date_end'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('date_end') 
                                        }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('user_stories') ? ' 
has-error' : '' }}">
                            <label class="col-md-4 control-label">User Stories<span 
                                    class="required">*</span> </label>

                            <div class="col-md-6">
                                      <label for="sel1">Choose the user Storie for this Sprint:</label>
                            <div class="col-md-6">
 
                                <ul class col-md-6>
                                    <li>
                                         <input type="checkbox" class="form-control" name="user_stories" value="">

                                    </li>
                                </ul>
                            </div>
                                @if ($errors->has('user_stories'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_stories') 
                                        }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="text-muted col-xs-12"><em>Fields with : <span class="required">*</span>
                                    are mandatory </em></span>
                        </div> 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               
                                <button type="submit" class="btn btn-primary">
                                    Add
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
