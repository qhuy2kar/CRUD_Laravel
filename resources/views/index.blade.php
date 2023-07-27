@extends('layout')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-3">
                        <h3>Quản Lý Sinh Viên</h3>
                    </div>
                    <div class="col-md-6">
                        <form action="{{ route('sinhvien.search') }}" method="POST" class="row">
                            @csrf
                            <div class="form-group col-md-6">
                                <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm sinh viên">
                            </div>
                            <button type="submit" class="btn btn-primary col-md-2">Tìm kiếm</button>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <div class="row">

                            <a href="" class="btn border border-dark col-md-7 ">Xin chào : {{ Auth::user()->name }}</a>
                            <a class="col-md-1">  </a>
                            <a href="{{ route('logout') }}" class="btn btn-danger float-end col-md-4">Đăng Xuất</a>
                        </div>
                        {{-- <a href="{{ route('sinhvien.create') }}" class="btn btn-primary float-end">Thêm Mới</a> --}}

                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(Session::has('thongbao'))
                    <div id="thongbao" class="alert alert-success">
                        {{ Session::get('thongbao') }}
                    </div>

                @endif
                <a href="{{ route('sinhvien.create') }}" class="btn btn-primary float-end mb-2">Thêm Mới</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ma SV</th>
                            <th>Ho Ten</th>
                            <th>Ngay Sinh</th>
                            <th>Gioi Tinh</th>
                            <th>Dia Chi</th>
                            <th>So Dien Thoai</th>
                            <th>Hanh Dong</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sinhvien as $sv)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $sv->MaSV }}</td>
                                <td>{{ $sv->HoTen }}</td>
                                <td>{{ $sv->NgaySinh }}</td>
                                <td>{{ $sv->GioiTinh }}</td>
                                <td>{{ $sv->DiaChi }}</td>
                                <td>{{ $sv->SoDT }}</td>
                                <td>
                                    <form action="{{ route('sinhvien.destroy', $sv->id) }}" method="POST">
                                        <a href="{{ route('sinhvien.edit',$sv->id) }}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xoá</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection