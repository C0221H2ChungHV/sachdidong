@extends('backend.layout')

@section('content')
<div class="pcoded-content">
    <!-- [ breadcrumb ] start -->
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h5>Danh sách tác giả</h5>
                    </div>
                </div>
                @if(!empty($msg_sucess))
                    <div class="alert alert-success"> {{ $msg_sucess }}</div>
                @endif
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="../index-2.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Tác gỉa</a>
                        </li>
                        <!-- <li class="breadcrumb-item">
                            <a href="#!">Styling Table</a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Default Styling table start -->
                    <div class="card">
                        <div class="card-header">
                            <!-- <h5>Default Styling</h5> -->
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Ảnh</th>
                                            <th>Tên tác giả</th>
                                            <th>Ngày sinh</th>
                                            <th>Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($authors as $key => $author )
                                        <tr>
                                            <th scope="row">{{ ++$key }}</th>
                                            <td><img width="50" height="50" src="{{ asset($author->image) }}" alt="{{$author->name}}" /></td>
                                            <td>{{$author->name}}</td>
                                            <td>{{$author->year_of_birth}}</td>
                                            <td>
                                                <a href="{{ route('author.show-edit', $author->id) }}"><i class="text-warning fa fa-pencil-square-o"></i></a>
                                                <a href="{{ route('author.delete', $author->id) }}"><i class="text-danger fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Default Styling table start -->

                </div>
                <!-- Page-body end -->
            </div>
        </div>
        <!-- Main-body start -->

        <div id="styleSelector">

        </div>
    </div>
</div>
@endsection
