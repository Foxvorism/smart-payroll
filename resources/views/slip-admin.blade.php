@extends('layout/main')

@section('content')
    <div class="head">
        <div class="row">
            <div class="col bread-crumb">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item"><b>Data Slip Gaji</b></li>
                    </ol>
                </nav>
            </div>
            <div class="col welcome">
                <div class="message">Selamat datang, <b>`#role` `#nama`</b></div>
            </div>
        </div>
    </div>
    <div class="body">


        <div class="table-card">
            <div class="data-table">
                <div class="action">
                    <button class="btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                        Data</button>
                    {{-- <div class="filter">
                        <select class="form-select form-select-sm" aria-label="Small select example">
                            <option value="all" selected>All</option>
                            <option value="1">Kelas 1</option>
                            <option value="2">Kelas 2</option>
                            <option value="3">Kelas 3</option>
                            <option value="4">Kelas 4</option>
                            <option value="5">Kelas 5</option>
                            <option value="6">Kelas 6</option>
                        </select>
                    </div> --}}
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
@endsection
