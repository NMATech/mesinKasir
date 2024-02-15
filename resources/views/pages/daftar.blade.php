@extends('template.template')

@section('content')
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card mt-5 border border-dark border-2 p-5">
            <h4 class="card-title">Form Daftar</h4>
            <p class="card-description">
                Pendaftaran Pegawai
            </p>
            <form class="forms-sample">
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control border border-dark border-1" id="exampleInputUsername2"
                            placeholder="Username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control border border-dark border-1" id="exampleInputEmail2"
                            placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Re Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control border border-dark border-1"
                            id="exampleInputConfirmPassword2" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control border border-dark border-1" id="exampleInputMobile"
                            placeholder="Email">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
@endsection
