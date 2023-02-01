<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;
    protected $table = "tb_cerita_kocak";
    protected $guarded = ['id'];
    public $timestamps = false;
}
