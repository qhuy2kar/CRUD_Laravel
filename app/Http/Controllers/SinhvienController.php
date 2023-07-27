<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sinhvien;
use Illuminate\Support\Facades\Auth;

class SinhvienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sinhvien = Sinhvien::paginate(5);
        // return view('index', compact('sinhvien'))->with('i', (request()->input('page',1) -1) * 5);
        
        $sinhvien = Sinhvien::get();
        return view('index', compact('sinhvien'))->with('i');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Sinhvien::create($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Them sinh vien thanh cong!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sinhvien $sinhvien)
    {
        return view('edit', compact('sinhvien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sinhvien $sinhvien)
    {
        $sinhvien->update($request->all());
        return redirect()->route('sinhvien.index')->with('thongbao','Cap nhap thanh cong');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sinhvien $sinhvien)
    {
        $sinhvien->delete();
        return redirect()->route('sinhvien.index')->with('thongbao','Xoa sinh vien thanh cong');
    }


    public function search(Request $request)
    {
        $searchKeyword = $request->input('keyword');

        $sinhvien = SinhVien::where('HoTen', 'like', "%$searchKeyword%")
                            ->orWhere('MaSV', 'like', "%$searchKeyword%")->orWhere('GioiTinh', 'like', "%$searchKeyword%")
                            ->get();
        return view('index', compact('sinhvien'))->with('i');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
