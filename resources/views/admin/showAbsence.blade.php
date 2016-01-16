@extends('admin\index')
@section('content')


	
<div class="content">
<div class="filter">
<form action="absence" method="post"class="form-inline">
  <div class="form-group">
  	<label for="exampleInputName2">Bulan</label>
  	<select name="bulan" class="form-control">
  		<option value="1">January</option>
  		<option value="2">Febuari</option>
  		<option value="3">Maret</option>
  		<option value="4">April</option>
  		<option value="5">Mei</option>
  		<option value="6">Juni</option>
  		<option value="7">July</option>
  		<option value="8">Agustus</option>
  		<option value="9">September</option>
  		<option value="10">Oktober</option>
  		<option value="11">November</option>
  		<option value="12">Desember</option>
	</select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail2">Tahun</label>
    <select name="tahun" class="form-control">
		<option value="2016">2016</option>
		<option value="2017">2017</option>
	</select>
  </div>
 		<div class="form-group">
	

<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<button type="submit" class="btn btn-primary">Lihat</button>
{!! Form::close() !!}
</div>
</div>

	<div class="panel panel-default">
	<table class="table">

		<th>NAMA</th>
		<th>NIM</th>
		<th>PRODI</th>
		<th>TANGGAL</th>
		<th>Kritik Dan Saran</th>

	@foreach($absence as $data) 

	 <tr>
	 	<td>{{ $data->nama }}</td>
	 	<td>{{ $data->nim }}</td>
	 	<td>{{ $data->prodi }}</td>
	 	<td>{{ $data->tanggal }}</td>
	 	<td>{{ $data->pesan }}</td>

	 </tr>

	@endforeach
	</tabel>
</div>
</div>
@endsection