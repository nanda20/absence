@extends('admin\index')
@section('content')
{!! Form::open(['route'=>'adminPetugas.store']) !!}
<div class="content">
<div class="panel panel-default">
	<table class="table">
	<tr>
		<td>{!! Form::label('username')!!}</td>
		<td>{!! Form::text('username')!!}</td>
	</tr>
	<tr>
		<td>{!! Form::label('passowrd')!!}</td>
		<td>{!! Form::text('password')!!}</td>
	</tr>
	<tr>
		 
		<td>
			{!! Form::hidden('status','ada') !!}
		</td>
	</tr>
	<tr>

	<td colspan="2"><input type="submit" class="btn btn-primary" value="INSERT">
</td>

	{!! Form::close() !!}
<!-- <input type="button" value="kirim"> -->
<div>
	<div>
@stop
