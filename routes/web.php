<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SinhvienController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

// Đăng ký
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Đăng nhập
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


Route::group(['middleware' => 'auth'], function () {

    Route::resource('/sinhvien',SinhvienController::class);
    Route::post('/sinhvien/search', [SinhVienController::class, 'search'])->name('sinhvien.search');
    Route::get('/logout', [SinhVienController::class, 'logout'])->name('logout');
});




// // Route::resource('/sinhvien',SinhvienController::class);


// // Hiển thị danh sách sinh viên
// Route::get('/sinhvien', [SinhvienController::class, 'index']);

// // Hiển thị form tạo sinh viên mới
// Route::get('/sinhvien/create', [SinhvienController::class, 'create']);

// // Lưu thông tin sinh viên mới
// Route::post('/sinhvien', [SinhvienController::class, 'store']);

// // Hiển thị thông tin sinh viên cụ thể
// Route::get('/sinhvien/{id}', [SinhvienController::class, 'show']);

// // Hiển thị form chỉnh sửa thông tin sinh viên
// Route::get('/sinhvien/{id}/edit', [SinhvienController::class, 'edit']);

// // Cập nhật thông tin sinh viên
// Route::post('/sinhvien/{id}', [SinhvienController::class, 'update']);

// // Xóa sinh viên
// Route::post('/sinhvien/{id}/delete', [SinhvienController::class, 'destroy']);

// Route::post('/sinhvien/search', [SinhVienController::class, 'search'])->name('sinhvien.search');
//php artisan route:cache
//php artisan route:list