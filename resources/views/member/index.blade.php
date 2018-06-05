@extends('layouts.admin')
@section('content')

	<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Data Member
			<div class="panel-title pull-right"><a href="{{ route('member.create') }}">Tambah Data</a>
		</div>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table">
	<thead>
		<tr>
					<th>Id</th>
					<th>Nama Lengkap</th>
					<th>No Telepon</th>
					<th>No WA</th>
                    <th>Email</th>
                    <th>Alamat</th>
					<th colspan="3">Action</th>
				</tr>	
	           </thead>
	             <tbody>
		            <?php $nomor = 1; ?>
		  		@php $no = 1; @endphp
		  		@foreach($members as $data)
                         <tr>
                            <td>{{$id++}}</td>
							<td>{{$data->nama_lengkap}}</td>
							<td>{{$data->no_telepon}}</td>
							<td>{{$data->no_wa}}</td>
							<td>{{$data->email}}</td>
                            <td>{{$data->alamat}}</td>
    <td>
		<a class="btn btn-primary" href=" {{ route('member.edit',$data->id)}} ">Ubah</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('member.show',$data->id)}} ">Lihat</a>
	</td>
	<td>
		<form method="post" action="{{ route('member.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-danger">Hapus</button>
	</form>
	</td>
	</tr>
	@endforeach
	</tbody>
	</table>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	@endsection