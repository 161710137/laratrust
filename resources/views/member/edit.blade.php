@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Member
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('member.update',$member->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
                    <div class="form-group {{ $errors->has('nama_lengkap') ? ' has-error' : '' }}">
			  			<label class="control-label">nama_lengkap</label>	
			  			<input type="text" value="{{ $member->nama_lengkap }}" name="nama_lengkap" class="form-control"  required>
			  			@if ($errors->has('nama_lengkap'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama_lengkap') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		
			  		<div class="form-group {{ $errors->has('no_telepon') ? ' has-error' : '' }}">
			  			<label class="control-label">no_telepon</label>	
			  			<input type="text" value="{{ $member->no_telepon }}" name="no_telepon" class="form-control"  required>
			  			@if ($errors->has('no_telepon'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telepon') }}</strong>
                            </span>
                        @endif
			  		</div>

                    <div class="form-group {{$errors->has('no_wa') ? 'has-error' : ''}}">
								<label class="control-label">no_wa </label>
								<input type="date" name="no_wa" class="form-control" value="{{$member->no_wa}}" required>
								@if ($errors->has('no_wa'))
									<span class="help-blocks">
										<strong>{{$errors->first('no_wa')}}</strong>
									</span>
								@endif
							</div>

                    <div class="form-group {{$errors->has('Email') ? 'has-error' : ''}}">
								<label class="control-label">Email </label>
								<input type="date" name="Email" class="form-control" value="{{$member->Email}}" required>
								@if ($errors->has('Email'))
									<span class="help-blocks">
										<strong>{{$errors->first('Email')}}</strong>
									</span>
								@endif
							</div>

			  		<div class="form-group {{$errors->has('alamat') ? 'has-error' : ''}}">
								<label class="control-label">alamat </label>
								<input type="date" name="alamat" class="form-control" value="{{$member->alamat}}" required>
								@if ($errors->has('alamat'))
									<span class="help-blocks">
										<strong>{{$errors->first('alamat')}}</strong>
									</span>
								@endif
							</div>

                    <div class="form-group {{$errors->has('mobil_id') ? 'has-error' : ''}}">
								<label class="control-label">mobil_id </label>
								<input type="date" name="mobil_id" class="form-control" value="{{$member->mobil_id}}" required>
								@if ($errors->has('mobil_id'))
									<span class="help-blocks">
										<strong>{{$errors->first('mobil_id')}}</strong>
									</span>
								@endif
							</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Simpan</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection