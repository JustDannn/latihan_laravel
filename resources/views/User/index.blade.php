@extends('main')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data User Management</h6>
                        <a class="btn btn-success" href="{{url ('User/create')}}">Tambah Data +</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th >
                                            No</th>
                                        <th >
                                            Nama</th>
                                        <th>
                                            Alamat</th>
                                        <th>
                                            Tempat Lahir</th>
                                        <th>
                                            Tanggal Lahir</th>
                                        <th>
                                            Nomor Telpon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   

                                        @foreach ($User as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->tempat_lahir }}</td>
                                            <td>{{ $item->tgl_lahir }}</td>
                                            <td>{{ $item->no_telpon }}</td>
                                            <td>
                                                <a href="{{ url('User/edit/'.$item->id)}}" class="btn btn-primary">Edit</a>
                
                                                <form action="{{ url('User/'.$item->id)}}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Data Akan Dihapus?')">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger ">Delete</button>
                                                </form>
                
                                            </td>
                                        </tr>
                                        @endforeach
                                        {{-- <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                        alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                    <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-xs font-weight-bold mb-0">Manager</p>
                                            <p class="text-xs text-secondary mb-0">Organization</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <span class="badge badge-sm bg-gradient-success">Online</span>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                        </td>
                                        <td class="align-middle">
                                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                                                data-toggle="tooltip" data-original-title="Edit user">
                                                Edit
                                            </a>
                                        </td> --}}
                                    

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
