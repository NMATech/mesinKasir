@extends('template.template')

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card mt-5 border border-dark border-2 p-5">
            <h4 class="card-title">Form Barang</h4>
            <p class="card-description">
                Tambah Barang
            </p>
            <form class="forms-sample">
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control border border-dark border-1" id="exampleInputUsername2"
                            placeholder="Nama Barang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Harga</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control border border-dark border-1" id="exampleInputEmail2"
                            placeholder="Harga">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Stock</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control border border-dark border-1" id="exampleInputMobile"
                            placeholder="Stock">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection
