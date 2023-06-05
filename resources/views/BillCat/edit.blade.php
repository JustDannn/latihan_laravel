@extends('main')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Edit Data</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{url ('BillCat/'.$BillCat->id)}}" method="POST" class="form-control">
                                @method('patch')
                                @csrf
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Id Category </label>
                                        <input class="form-control" type="text" value="{{$BillCat->Id_Category}}" name="Id_Category">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Category</label>
                                    <select class="form-control" name="Nama_Category">
                                        <option value="">---Select Category---</option>
                                        <option value="Category 1" {{$BillCat->Nama_Category == 'Category 1' ? 'selected' : ''}}>Category 1</option>
                                        <option value="Category 2" {{$BillCat->Nama_Category == 'Category 2' ? 'selected' : ''}}>Category 2</option>
                                        <option value="Category 3" {{$BillCat->Nama_Category == 'Category 3' ? 'selected' : ''}}>Category 3</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Value</label>
                                        <input class="form-control" type="text" value="{{$BillCat->Value}}" name="Value">
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
