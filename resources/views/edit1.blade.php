@extends('template')
@section('judul halaman', 'Edit Data DVD')
@section('konten')
<p></p>
    <a href="/dvd" class="btn btn-secondary mb-4">Kembali</a>

    @foreach($dvd as $t)

    <div class="card">
        <div class="card-header">
            Form Edit Data DVD
        </div>

        <div class="card-body">
            <form action="/dvd/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $t->kodedvd }}">

                <div class="row mb-3">
                    <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="merk"
                            id="merk"
                            class="form-control"
                            required
                            value="{{ $t->merkdvd }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                    <div class="col-sm-10">
                        <input
                            type="text"
                            name="stock"
                            id="stock"
                            class="form-control"
                            required
                            value="{{ $t->stockdvd }}"
                        >
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                    <div class="col-sm-10">
                    <input
                        type="checkbox"
                        name="tersedia"
                        id="tersedia"
                        class="form-check-input"
                        value="Y"
                        {{ $t->tersedia == 'Y' ? 'checked' : 'N' }}
                    >
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>

    @endforeach
@endsection
