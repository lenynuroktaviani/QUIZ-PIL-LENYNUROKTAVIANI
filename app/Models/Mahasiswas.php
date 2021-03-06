<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswas extends Model
{
    use HasFactory;
    protected $guarded = ['mana'];

    public function absens()
    {
        return $this->belongsTo('App\Models\Absens');
    }
}