<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $table = 'table_hobi';

    protected $fillable = ['nama', 'gambar', 'deskripsi'];
}
