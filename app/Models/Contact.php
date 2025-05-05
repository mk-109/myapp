<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // この２つのカラムだけ create() で一括代入を許可
    protected $fillable = ['name', 'email'];
}
