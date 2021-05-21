@extends('backend.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="title">Thêm tác giả</h4>
            <form method="post" action="{{route("author.store")}}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="number" name="category_id" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tên tác giả</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ngày sinh</label>
                    <div class="col-sm-10">
                        <input type="date" name="year_of_birth" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ngày mất</label>
                    <div class="col-sm-10">
                        <input type="date" name="year_of_dead" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tuổi</label>
                    <div class="col-sm-10">
                        <input type="number" name="age" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Quốc tịch</label>
                    <div class="col-sm-10">
                        <input type="text" name="country" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ảnh</label>
                    <div class="col-sm-10">
                        <input type="text" name="image" class="form-control" >
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control">
                    </div>
                </div>
                <div><button type="submit" class="btn btn-primary btn-round waves-effect waves-light">Submit</button></div>
            </form>
        </div>
    </div>
@endsection
