<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    use HasFactory;
    protected $table = "tb_profil";
    protected $guarded = ['id'];
    public $timestamps = false;
}
