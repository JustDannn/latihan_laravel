@extends('main')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Tambah Data</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{url ('User')}}" method="POST" class="form-control">
                                @csrf
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama </label>
                                        <input class="form-control" type="text" value="" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Alamat</label>
                                        <input class="form-control" type="text" value="" name="alamat">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tempat Lahir</label>
                                        <input class="form-control" type="text" value="" name="tempat_lahir">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                                        <input class="form-control" type="date" value="" name="tgl_lahir">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nomor Telpon</label>
                                        <input class="form-control" type="number" name="no_telpon">
                                    </div>
                                </div>
                                <button class="btn btn-info">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
