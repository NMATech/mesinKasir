@extends('template.template')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card" style="width: max-content;">
        <div class="card d-flex justify-content-center align-items-center">
            <div class="card-body p-3">
                <h4 class="card-title">Data</h4>
                <p class="card-description">
                    Table <code>Pegawai</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped w-50 border border-dark border-1">
                        <thead>
                            <tr>
                                <th>
                                    Profile
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Password
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Edit
                                </th>
                                <th>
                                    Hapus
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">
                                    <img src="{{ asset('Img/ngawi.jpeg') }}" alt="image" />
                                </td>
                                <td>
                                    Adam Ngawi
                                </td>
                                <td>
                                    BlackMamba
                                </td>
                                <td>
                                    Adam@yahoo.com
                                </td>
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
                            <tr>
                                <td class="py-1">
                                    <img src="{{ asset('Img/dafmoi.jpeg') }}" alt="image" />
                                </td>
                                <td>
                                    Daffa Gunawan
                                </td>
                                <td>
                                    IgunLovers
                                </td>
                                <td>
                                    DaffaEZ@gmail.com
                                </td>
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
                            <tr>
                                <td class="py-1">
                                    <img src="{{ asset('Img/firman.jpeg') }}" alt="image" />
                                </td>
                                <td>
                                    Herman
                                </td>
                                <td>
                                    Herman-china
                                </td>
                                <td>
                                    Firman@yahoo.com
                                </td>
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
