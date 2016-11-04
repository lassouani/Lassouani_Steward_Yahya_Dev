@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
  				  	<a href="{{ url('home') }}"><input type="button" class=" btn btn-info" name="return" value="Return"/></a><br>
                	<center><h1><b>Project Description</b></h1><center>
                </div>

                <div class="panel-body">

		<div class="col-sm-2" style="background-color:default;">
			<div class="btn-group-vertical">
			  	<a href="{{ url('projects/kanban') }}"><input type="button" class=" btn btn-default" name="kanban" value="KanBan"/></a><br><br>
			  	<a href="{{ url('projects/backlog') }}"><input type="button" class=" btn btn-default" name="backlog" value="Backlog"/></a><br><br>
			  	<a href="{{ url('projects/sprints') }}"><input type="button" class=" btn btn-default" name="sprints" value="Sprints"/></a><br><br><br><br>

			   	
			</div>
		</div>

		<div class="col-sm-8" style="background-color:default">

		      <p><h3><b> Project name  : </b> {{ $Project->name }} </h3></p>
		      <p><h3><b> Owner		    : </b> azer</h3></p>
		      <p><h3><b> Description   : </b> {{ $Project->description }} </h3></p>
		      <p><h3><b> Link          : </b> <a href={{ $Project->link }}> {{ $Project->link }} </h3></p> 

		    <br>
		<center><a href="{{ url('/project_description') }}"> <input type="button" class="btn btn-success" name="contribute"value="Contribute ?"/></a></center>
		</div>
			<div class="col-sm-2" style="background-color:default">
			</div>
	

                </div>
            </div>
        </div>
    </div>
</div>
@endsection