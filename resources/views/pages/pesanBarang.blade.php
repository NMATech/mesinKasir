@extends('template.pegawai')

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card mt-5 border border-dark border-2 p-5">
            <h4 class="card-title">Form Pemesanan</h4>
            <p class="card-description">
                Silakan inputkan di bawah
            </p>
            <form class="forms-sample">
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Kode</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control border border-dark border-1" id="exampleInputUsername2"
                            placeholder="Kode">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Barang</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control border border-dark border-1" id="exampleInputUsername2"
                            placeholder="Nama Barang">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Qty</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control border border-dark border-1" id="exampleInputMobile"
                            placeholder="Qty">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: max-content;">
                <h4 class="card-title">List Belanja</h4>
                <div class="table-responsive mt-3" style="max-width: 100%; overflow-x: auto;">
                    <table class="table table-fluid border border-dark border-1">
                        <thead class="border border-dark border-bottom-1">
                            <tr>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Rexus Black Keyboard</td>
                                <td>100.000</td>
                                <td>2</td>
                                <td>
                                    200.000
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>Jumlah Total</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>200.000</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
