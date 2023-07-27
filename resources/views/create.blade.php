@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Them Sinh Vien</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.index') }} " class="btn btn-primary fload-end"> Danh sach sinh vien</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ma Sinh vien</strong>
                                <input type="text" name="MaSV" class="form-control" placeholder="Nhap ma sinh vien">
                            </div>
                            <div class="form-group">
                                <strong>Ho Ten</strong>
                                <input type="text" name="HoTen" class="form-control" placeholder="Nhap ho ten">
                            </div>
                            <div class="form-group">
                                <strong>Ngay Sinh</strong>
                                <input type="date" name="NgaySinh" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Gioi tinh</strong>
                                <select name="GioiTinh" class="form-select">
                                    <option selected>Chon Gioi Tinh</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nu">Nu</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <strong>Dia Chi</strong>
                                <input type="text" name="DiaChi" class="form-control" placeholder="Nhap dia chi">
                            </div>
                            <div class="form-group">
                                <strong>So Dien Thoai</strong>
                                <input type="text" name="SoDT" class="form-control" placeholder="Nhap so dien thoai">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Save</button>
                </form>
            </div>
        </div>
    </div>


@endsection