<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Story;
use App\Models\Testing;

class StoryController extends Controller
{
    public function input_story()
    {
        return view('pages.client.story');
    }
    public function store_story(Request $request)
    {
        $validation = Validator::make(
            $request->all(),
            [
                'judul' => 'required',
                'tanggal_kejadian' => 'required',
                'deskripsi' => 'required',
                'photo_url_1' => 'required|mimes:jpg,png,jpeg|max:2048',
                'photo_url_2' => 'mimes:jpg,png,jpeg|max:2048',
                'photo_url_3' => 'mimes:jpg,png,jpeg|max:2048',
                'photo_url_4' => 'mimes:jpg,png,jpeg|max:2048',
            ],
            [
                'judul.required' => 'Judul Harus Diisi',
                'tanggal_kejadian.required' => 'Tanggal Kejadian Harus Diisi',
                'deskripsi.required' => 'Deskripsi Harus Diisi',
                'photo_url_1.required' => 'Foto Cerita Pertama Harus Diisi',

                'photo_url_1.mimes' => 'Format Foto Pertama Harus Berupa JPG/JPEG/PNG',
                'photo_url_2.mimes' => 'Format Foto Kedua Harus Berupa JPG/JPEG/PNG',
                'photo_url_3.mimes' => 'Format Foto Ketiga Harus Berupa JPG/JPEG/PNG',
                'photo_url_4.mimes' => 'Format Foto Keempat Harus Berupa JPG/JPEG/PNG',

                'photo_url_1.max' => 'File Foto Pertama Berukuran Maksimal 2 MB',
                'photo_url_2.max' => 'File Foto Kedua Berukuran Maksimal 2 MB',
                'photo_url_3.max' => 'File Foto Ketiga Berukuran Maksimal 2 MB',
                'photo_url_4.max' => 'File Foto Keempat Berukuran Maksimal 2 MB',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()->withErrors($validation->errors())->withInput();
        }

        $story = new Story();
        $story->judul = $request->judul;
        $story->tanggal_kejadian = $request->tanggal_kejadian;
        $story->deskripsi = $request->deskripsi;
        $story->photo_url_1 = $request->file('photo_url_1')->store('cerita-kocak', 'public');

        $story->photo_url_2 = "";
        if ($request->hasFile('photo_url_2')) {
            $story->photo_url_2 = $request->file('photo_url_2')->store('cerita-kocak', 'public');
        }

        $story->photo_url_3 = "";
        if ($request->hasFile('photo_url_3')) {
            $story->photo_url_3 = $request->file('photo_url_3')->store('cerita-kocak', 'public');
        }

        $story->photo_url_4 = "";
        if ($request->hasFile('photo_url_4')) {
            $story->photo_url_4 = $request->file('photo_url_4')->store('cerita-kocak', 'public');
        }

        if ($story->save()) {
            return redirect()->back()->with('success', 'Yeay Cerita Kocaknya Udah Live!!');
        } else {
            return redirect()->back()->with('danger', 'Gagal Coy, Coba Ulang Dah!');
        }
    }
    public function index()
    {
        $testi= Testing::paginate(5);
        return view('pages.story', compact('testi'));
    }
}
