@extends('template')
@section('judul halaman', 'Data DVD')
@section('konten')
<p></p>
	<a href="/dvd/tambah" class="btn btn-primary"> + Tambah DVD Baru</a>

	<br/>
	<br/>
	<form action="/dvd/cari" method="GET">
		<input type="text" name="cari" placeholder="Cari DVD ..">
		<input type="submit" value="Cari" class="btn btn-success">
	</form>
    <p></p>
	<table class="table table-striped table-hover">
		<tr>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($dvd as $p)
		<tr>
			<td>{{ $p->merkdvd }}</td>
			<td>{{ $p->stockdvd }}</td>
			<td>{{ $p->tersedia }}</td>
			<td>
				<a href="/dvd/edit/{{ $p->kodedvd }}" class="btn btn-warning">Edit</a>
				|
				<form action="/dvd/hapus/{{ $p->kodedvd }}" method="POST" style="display:inline">
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus?')">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
    {{ $dvd->links() }}
@endsection
