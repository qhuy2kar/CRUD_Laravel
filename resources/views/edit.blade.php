@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sua Sinh Vien</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ route('sinhvien.index') }} " class="btn btn-primary fload-end"> Danh sach sinh vien</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.update', $sinhvien->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Ma Sinh vien</strong>
                                <input type="text" name="MaSV" value="{{ $sinhvien->MaSV }}" class="form-control" placeholder="Nhap ma sinh vien">
                            </div>
                            <div class="form-group">
                                <strong>Ho Ten</strong>
                                <input type="text" name="HoTen" value="{{ $sinhvien->HoTen }}" class="form-control" placeholder="Nhap ho ten">
                            </div>
                            <div class="form-group">
                                <strong>Ngay Sinh</strong>
                                <input type="date" name="NgaySinh" value="{{ $sinhvien->NgaySinh }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Gioi tinh</strong>
                                <select name="GioiTinh" class="form-select">
                                    <option selected>Chon Gioi Tinh</option>
                                    <option value="Nam" {{ $sinhvien->GioiTinh == "Nam" ? 'selected' : ''}}>Nam</option>
                                    <option value="Nu"  {{ $sinhvien->GioiTinh == "Nu" ? 'selected' : ''}}>Nu</option>
                                </select>
                            </div>  
                            <div class="form-group">
                                <strong>Dia Chi</strong>
                                <input type="text" name="DiaChi" value="{{ $sinhvien->DiaChi }}" class="form-control" placeholder="Nhap dia chi">
                            </div>
                            <div class="form-group">
                                <strong>So Dien Thoai</strong>
                                <input type="text" name="SoDT" value="{{ $sinhvien->SoDT }}" class="form-control" placeholder="Nhap so dien thoai">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cap Nhat</button>
                </form>
            </div>
        </div>
    </div>


@endsection