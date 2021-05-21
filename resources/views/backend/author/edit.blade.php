@extends('backend.layout')

@section('content')
    <div class="card">
        <div class="card-block">
            <h4 class="title">Chỉnh sửa tác giả</h4>
            <form method="post" action="{{route("author.update", $author->id)}}">
                @csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tên tác giả</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{$author->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ngày sinh</label>
                    <div class="col-sm-10">
                        <input type="date" name="year_of_birth" class="form-control" value="{{$author->year_of_birth}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ngày mất</label>
                    <div class="col-sm-10">
                        <input type="date" name="year_of_dead" class="form-control" value="{{$author->year_of_dead}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tuổi</label>
                    <div class="col-sm-10">
                        <input type="number" name="age" class="form-control" value="{{$author->age}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Quốc tịch</label>
                    <div class="col-sm-10">
                        <input type="text" name="country" class="form-control" value="{{$author->country}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Ảnh</label>
                    <div class="col-sm-10">
                        <input type="text" name="image" class="form-control" value="{{$author->image}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col-sm-10">
                        <input type="text" name="description" class="form-control" value="{{$author->description}}">
                    </div>
                </div>
              <div><button type="submit" class="btn btn-primary btn-round waves-effect waves-light">Submit</button></div>
            </form>
        </div>
    </div>
@endsection
