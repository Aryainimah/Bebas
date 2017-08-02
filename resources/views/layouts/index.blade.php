@extends('layouts.master')
@section('isi')
	@foreach ($ortu as $key) <hr>
		Nama Ayah :{{$key->nama_ayah}} <br>
		Nama Ibu :{{$key->nama_ibu}} <br>
		Umur Ayah :{{$key->umur_ibu}}<br>
		Umur Ibu :{{$key->umur_ayah}}<br>
		Nama Anak:
			@foreach ($key->Siswa as $data) 
			<li>{{$data->nama}}</li>
			@endforeach
			<hr>
			@endforeach
@endsection