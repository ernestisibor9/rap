<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lyrics extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function leader()
    {
        return $this->belongsTo(Leader::class, 'leader_id', 'id');
    }
    public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'id');
    }
}