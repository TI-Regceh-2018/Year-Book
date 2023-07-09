<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
    public function index()
    {
        return view('pages.album');
    }
    public function input_album()
    {
        return view('pages.client.album');
    }
    public function store_album(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'judul' => 'required',
                'tanggal_kejadian' => 'required',
                'deskripsi' => 'required',
                'photo_url' => 'required|mimes:jpg,png,jpeg|max:2048',
            ],
            [
                'judul.required' => 'Judul Harus Diisi',
                'tanggal_kejadian.required' => 'Tanggal Kejadian Harus Diisi',
                'deskripsi.required' => 'Deskripsi Harus Diisi',
                'photo_url.required' => 'Foto Ceritanya Harus Diisi',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $album = new Album();
        $album->judul = $request->judul;
        $album->tanggal_kejadian = $request->tanggal_kejadian;
        $album->deskripsi = $request->deskripsi;
        $album->photo_url = $request->file('photo_url')->store('album', 'public');

        if ($album->save()) {
            return redirect()->back()->with('success', 'Yeay Albumnya Udah Live!!');
        } else {
            return redirect()->back()->with('danger', 'Gagal Coy, Coba Ulang Dah!');
        }
    }
}
