@extends('admin\index')
@section('content')
<div class="content">
<div class="panel panel-default">
	<table class="table">
		<th>username</th>
		<th>password</th>
		<th>level</th>
		<th colspan="2">Aksi</th>
	@foreach($data as $data) 

	 <tr>
	 	<td>{{ $data->username }}</td>
	 	<td>{{ $data->password }}</td>
	 	<td>{{ $data->level }}</td>

	 	<td>
	<a href="{{ route('adminPetugas.edit',$data->id) }}" > UPDATE </a> |
	<a href="{{ route('adminPetugas.destroy',$data->id) }}" >DELETE</a>
	</td>
	 </tr>

	@endforeach
	</tabel>
<div>
@endsection
 