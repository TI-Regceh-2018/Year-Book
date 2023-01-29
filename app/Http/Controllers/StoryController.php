<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function input_story()
    {
        return view('pages.client.story');
    }
}
