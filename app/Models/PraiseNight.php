<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PraiseNight extends Model
{
    use HasFactory;

    protected $guarded = [];

     public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'id');
    }
}