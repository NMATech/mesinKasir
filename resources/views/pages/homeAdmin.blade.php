@extends('template.template')

@section('content')
    <div class="containerLuar d-flex">

        <div class="container w-50">
            <div class="col-12 grid-margin stretch-card d-flex flex-column pt-4">
                <div class="card card-rounded">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Performance Line Chart</h4>
                                <h5 class="card-subtitle card-subtitle-dash">Lorem Ipsum is simply dummy text of the
                                    printing</h5>
                            </div>
                            <div id="performance-line-legend"></div>
                        </div>
                        <div class="chartjs-wrapper mt-5">
                            <canvas id="performaneLine"></canvas>
                        </div>
                    </div>
                </div>
                <div class="card card-rounded mt-2">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Market Overview</h4>
                                <p class="card-subtitle card-subtitle-dash">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit
                                </p>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                        type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"> This month </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                        <h6 class="dropdown-header">Settings</h6>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-sm-flex align-items-center mt-1 justify-content-between">
                            <div class="d-sm-flex align-items-center mt-4 justify-content-between">
                                <h2 class="me-2 fw-bold">$36,2531.00</h2>
                                <h4 class="me-2">USD</h4>
                                <h4 class="text-success">(+1.37%)</h4>
                            </div>
                            <div class="me-3">
                                <div id="marketing-overview-legend"></div>
                            </div>
                        </div>
                        <div class="chartjs-bar-wrapper mt-3">
                            <canvas id="marketingOverview"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerSidebar w-25">
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title card-title-dash">Leave Report</h4>
                                        </div>
                                        <div>
                                            <div class="dropdown">
                                                <button
                                                    class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                    type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"> Month Wise </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                                    <h6 class="dropdown-header">week Wise</h6>
                                                    <a class="dropdown-item" href="#">Year Wise</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <canvas id="leaveReport"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-grow">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card card-rounded">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div>
                                            <h4 class="card-title card-title-dash">Top Pegawai</h4>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="{{ asset('Img/firman.jpeg') }}"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Herman</p>
                                                    <small class="text-muted mb-0">Firman@yahoo.com</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="{{ asset('Img/ngawi.jpeg') }}"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Adam Ngawi</p>
                                                    <small class="text-muted mb-0">Adam@yahoo.com</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <div class="d-flex">
                                                <img class="img-sm rounded-10" src="{{ asset('Img/dafmoi.jpeg') }}"
                                                    alt="profile">
                                                <div class="wrapper ms-3">
                                                    <p class="ms-1 mb-1 fw-bold">Dafmoi Gunawan</p>
                                                    <small class="text-muted mb-0">DaffaEZ@gmail.com</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
