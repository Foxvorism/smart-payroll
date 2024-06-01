@extends('layout/main')

@section('content')
    <div class="head">
        <div class="row">
            <div class="col bread-crumb">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item"><b>Data User</b></li>
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
                    <i class="ph ph-users"></i> Jumlah Admin : {{ $admin->count() }}
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <i class="ph ph-users"></i> Jumlah Tutor SD : {{ $tutor_sd->count() }}
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <i class="ph ph-users"></i> Jumlah Tutor SMP : {{ $tutor_smp->count() }}
                </div>
            </div>
            <div class="col">
                <div class="stat-card">
                    <i class="ph ph-users"></i> Jumlah Tutor SMA : {{ $tutor_sma->count() }}
                </div>
            </div>
        </div>
        <div class="table-card">
            <div class="data-table">
                <div class="action">
                    <button class="btn-add" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah User</button>
                </div>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-admin-tab" data-bs-toggle="tab" data-bs-target="#nav-admin"
                            type="button" role="tab" aria-controls="nav-admin" aria-selected="true">Admin</button>
                        <button class="nav-link" id="nav-sd-tab" data-bs-toggle="tab" data-bs-target="#nav-sd"
                            type="button" role="tab" aria-controls="nav-sd" aria-selected="false">SD</button>
                        <button class="nav-link" id="nav-smp-tab" data-bs-toggle="tab" data-bs-target="#nav-smp"
                            type="button" role="tab" aria-controls="nav-smp" aria-selected="false">SMP</button>
                        <button class="nav-link" id="nav-sma-tab" data-bs-toggle="tab" data-bs-target="#nav-sma"
                            type="button" role="tab" aria-controls="nav-sma" aria-selected="false">SMA</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-admin" role="tabpanel" aria-labelledby="nav-admin-tab"
                        tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($admin->count() != 0)
                                    @foreach ($admin as $a)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $a->name }}</td>
                                            <td>{{ $a->username }}</td>
                                            <td>
                                                <button class="btn btn-outline-warning">
                                                    <i class="ph ph-pen"></i>
                                                </button>
                                                <a href="/user/destroy/{{ $a->id }}" class="btn btn-outline-danger">
                                                    <i class="ph ph-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center">Tidak ada data</td>
                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-sd" role="tabpanel" aria-labelledby="nav-sd-tab" tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($tutor_sd->count() != 0)
                                    @foreach ($tutor_sd as $tsd)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $tsd->name }}</td>
                                            <td>{{ $tsd->username }}</td>
                                            <td>
                                                <button class="btn btn-outline-warning">
                                                    <i class="ph ph-pen"></i>
                                                </button>
                                                <button class="btn btn-outline-danger">
                                                    <i class="ph ph-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center">Tidak ada data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-smp" role="tabpanel" aria-labelledby="nav-smp-tab"
                        tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($tutor_smp->count() != 0)
                                    @foreach ($tutor_smp as $tsmp)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <td>{{ $tsmp->name }}</td>
                                            <td>{{ $tsmp->username }}</td>
                                            <td>
                                                <button class="btn btn-outline-warning">
                                                    <i class="ph ph-pen"></i>
                                                </button>
                                                <button class="btn btn-outline-danger">
                                                    <i class="ph ph-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" style="text-align: center">Tidak ada data</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="nav-sma" role="tabpanel" aria-labelledby="nav-sma-tab"
                        tabindex="0">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tutor_sma as $tsma)
                                    <tr>
                                        <th>{{ $loop->iteration }}</th>
                                        <td>{{ $tsma->name }}</td>
                                        <td>{{ $tsma->username }}</td>
                                        <td>
                                            <button class="btn btn-outline-warning">
                                                <i class="ph ph-pen"></i>
                                            </button>
                                            <button class="btn btn-outline-danger">
                                                <i class="ph ph-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Input User Baru</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="new-form">
                        <form action="/user/store" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="test" class="form-control" id="name" name="name"
                                    placeholder="Masukan nama">
                            </div>
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="test" class="form-control" id="username" name="username"
                                    placeholder="Masukan username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Masukan password">
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <select class="form-select" aria-label="Default select example" id="role"
                                    name="id_role">
                                    <option selected>-- Select Role --</option>
                                    @foreach ($roles as $r)
                                        <option value="{{ $r->id }}">{{ $r->role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <input class="btn-submit" type="submit" value="Submit User">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
