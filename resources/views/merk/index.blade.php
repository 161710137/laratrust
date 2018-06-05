@extends('layouts.admin')
@section('content')

	<div class="row">
	<div class="container">
	<div class="col-md-12">
	<div class="panel panel-primary">
		<div class="panel-heading">Data Merk
			<div class="panel-title pull-right"><a href="{{ route('merk.create') }}">Tambah Data</a>
		</div>
	</div>
	<div class="panel-body">
	<div class="table-responsive">
	<table class="table">
	<thead>
		<tr>
					<th>Id</th>
					<th>Nama</th>
					<th>Logo</th>
					<th colspan="3">Action</th>
				</tr>	
	           </thead>
	             <tbody>
		            <?php $nomor = 1; ?>
		  		@php $no = 1; @endphp
		  		@foreach($Merks as $data)
                         <tr>
                            <td>{{$id++}}</td>
							<td>{{$data->nama}}</td>
							<td>{{$data->logo}}</td>
    <td>
		<a class="btn btn-primary" href=" {{ route('merk.edit',$data->id)}} ">Ubah</a>
	</td>
	<td>
		<a class="btn btn-success" href=" {{ route('merk.show',$data->id)}} ">Lihat</a>
	</td>
	<td>
		<form method="post" action="{{ route('merk.destroy',$data->id) }}">
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