@extends('layouts.master')
@section('isi')
<div class="row">	
	<center><h1>Data Author</h1></center>
	<div class="panel panel-primary">
		<div class="panel-heading">Data Author
		<div class="panel-title pull-right"><a href="/author/create">
		Tambah Data</a></div></div>
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th colspan="3">Action</th>
					</tr>
				</thead>
				<tbody>
				@php $a=1 @endphp
				@foreach($auth as $data)
					<tr>
					<td>{{$a++}}</td>
						<td>{{$data->name}}</td>
						</td>
						<td>
							<a href="/author/{{$data->id}}/edit" class="btn btn-warning">Edit</a></td>
							<td>
							<a href="/author/{{$data->id}}" class="btn btn-success">Show</a></td>
							<td><form action="{{route('author.destroy',$data->id)}}" method="post">
								<input type="hidden" name="_method" value="DELETE">
								<input type="hidden" name="_token">
								<input type="submit" class="btn btn-danger" value="Delete">
								{{csrf_field()}}
							</form>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	</div>
@endsection