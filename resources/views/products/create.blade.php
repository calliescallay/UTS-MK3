@extends('layouts.admin')

@section('title', 'Create vehicle')

@section('tabel')
    <h1 class="mb-0">Add vehicle</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="nama_dokter">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="nomor_hp">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="email">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="spesialis"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
