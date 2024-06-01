@extends('layout/main')

@section('content')
    <div class="head">
        <div class="row">
            <div class="col bread-crumb">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item"><b>Data Tutor</b></li>
                    </ol>
                </nav>
            </div>
            <div class="col welcome">
                <div class="message">Selamat datang, <b>`#role` `#nama`</b></div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="row">
            <div class="col">
                <div class="stat-card">
                    <i class="ph ph-users"></i> Jumlah Tutor Jenjang SD :
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <i class="ph ph-users"></i> Jumlah Tutor Jenjang SMP :
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <i class="ph ph-users"></i> Jumlah Tutor Jenjang SMA :
                </div>
            </div>
        </div>
        <div class="table-card">
            <div class="data-table">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-sd-tab" data-bs-toggle="tab" data-bs-target="#nav-sd"
                            type="button" role="tab" aria-controls="nav-sd" aria-selected="true">SD</button>
                        <button class="nav-link" id="nav-smp-tab" data-bs-toggle="tab" data-bs-target="#nav-smp"
                            type="button" role="tab" aria-controls="nav-smp" aria-selected="false">SMP</button>
                        <button class="nav-link" id="nav-sma-tab" data-bs-toggle="tab" data-bs-target="#nav-sma"
                            type="button" role="tab" aria-controls="nav-sma" aria-selected="false">SMA</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-sd" role="tabpanel" aria-labelledby="nav-sd-tab"
                        tabindex="0">
                        <div class="action">
                            <button class="btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                                Data</button>
                            <div class="filter">
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="all" selected>All</option>
                                    <option value="1">Kelas 1</option>
                                    <option value="2">Kelas 2</option>
                                    <option value="3">Kelas 3</option>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-smp" role="tabpanel" aria-labelledby="nav-smp-tab" tabindex="0">
                        <div class="action">
                            <button class="btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                                Data</button>
                            <div class="filter">
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="all" selected>All</option>
                                    <option value="7">Kelas 7</option>
                                    <option value="8">Kelas 8</option>
                                    <option value="9">Kelas 9</option>
                                </select>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-sma" role="tabpanel" aria-labelledby="nav-sma-tab"
                        tabindex="0">
                        <div class="action">
                            <button class="btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                                Data</button>
                            <div class="filter">
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option value="all" selected>All</option>
                                    <option value="10">Kelas 10</option>
                                    <option value="11">Kelas 11</option>
                                    <option value="12">Kelas 12</option>
                                </select>
                            </div>
                        </div>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Input Tutor Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="new-form">
                        ...
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
