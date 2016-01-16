@extends('admin\index')
@section('content')
 {!! Form::model($data,['method' => 'PUT','route'=>['adminPetugas.update',$data->id]]) !!}
 <div class="content">
<div class="panel panel-default">
	<table class="table">
	<tr>
		<td>{!! Form::label('username')!!}</td>
		<td>{!! Form::text('username',$data->username)!!}</td>
	</tr>
	<tr>
		<td>{!! Form::label('password')!!}</td>
		<td>{!! Form::text('password',$data->password )!!}</td>
	</tr>
	<tr>
		
			{!! Form::hidden('id',$data->id) !!}
		</td>
	</tr>
	<tr>
	<td colspan="2">{!! Form::submit('UPDATE')!!}</td>

	{!! Form::close() !!}
 </table>
</div>
 @stop