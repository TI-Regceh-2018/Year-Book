<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Love;

class LoveController extends Controller
{
    public function index()
    {
        return view('pages.love');
    }

    public function input_love()
    {
        return view('pages.client.love');
    }

    public function store_love(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'nama' => 'required',
                'panggilan' => 'required',
                'quotes' => 'required',
                'linkedin_url' => 'required',
                'mata_kuliah_fav' => 'required',
                'makanan_fav' => 'required',
                'pas_foto' => 'mimes:jpg,png,jpeg|max:2048',
            ],
            [
                'nama.required' => 'Nama Harus Diisi',
                'panggilan.required' => 'Panggilan Kejadian Harus Diisi',
                'quotes.required' => 'Quotes Harus Diisi',
                'linkedin_url.required' => 'LinkedIn Harus Diisi',
                'mata_kuliah_fav.required' =>
                'Mata Kuliah Favorit Harus Diisi',
                'pas_foto.required' => 'Pas Foto Harus Diisi',

                'pas_foto.mimes' => 'Format Pas Foto Harus Berupa JPG/JPEG/PNG',

                'pas_foto.max' => 'File Pas Foto Berukuran Maksimal 2 MB',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $love = new Love();
        $love->nama = $request->nama;
        $love->panggilan = $request->panggilan;
        $love->quotes = $request->quotes;
        $love->linkedin_url = $request->linkedin_url;
        $love->mata_kuliah_fav = $request->mata_kuliah_fav;
        $love->makanan_fav = $request->makanan_fav;

        $love->pas_foto = $request->file('pas_foto')->store('pas-foto', 'public');

        if ($love->save()) {
            return redirect()->back()->with('success', 'Yeay Profil Kece Kamu Udah Jadi!!');
        } else {
            return redirect()->back()->with('danger', 'Gagal Coy, Coba Ulang Dah!');
        }
    }

    public function details()
    {
        return view('pages.profile');
    }
}
