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
                            <form action="{{url ('bill')}}" method="POST" class="form-control">
                                @csrf
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">kode_bayar </label>
                                        <input class="form-control" type="text" value="" name="kode_bayar">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">nama_cust </label>
                                        <input class="form-control" type="text" value="" name="nama_cust">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">alamat_cust</label>
                                        <input class="form-control" type="text" value="" name="alamat_cust">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">tagihan</label>
                                        <input class="form-control" type="text" value="" name="tagihan">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">total_bayar</label>
                                        <input class="form-control" type="date" value="" name="total_bayar">
                                    </div>
                                </div>
                                

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">kembalian</label>
                                        <input class="form-control" type="number" name="kembalian">
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
