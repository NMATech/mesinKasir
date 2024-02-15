@extends('template.template')

@section('content')
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body" style="width: max-content;">
                <h4 class="card-title">Data</h4>
                <p class="card-description">
                    Table <code>Barang</code>
                </p>
                <form class="search-form d-flex" action="#">
                    <i class="icon-search d-flex align-items-center me-3"></i>
                    <input type="search" class="form-control w-50 border border-dark border-1" placeholder="Search Here"
                        title="Search here">
                </form>
                <div class="table-responsive mt-3" style="max-width: 100%; overflow-x: auto;">
                    <table class="table table-fluid border border-dark border-1">
                        <thead class="border border-dark border-bottom-1">
                            <tr>
                                <th>Kode</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stock</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Rexus Black Keyboard</td>
                                <td>100.000</td>
                                <td>300</td>
                                <td>
                                    <button type="button" class="btn btn-success btn-icon-text btn-sm">
                                        <i class="mdi mdi-pencil"></i>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-icon-text btn-sm">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
