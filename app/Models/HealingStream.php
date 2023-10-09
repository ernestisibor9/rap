<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealingStream extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'id');
    }

    public function leader()
    {
        return $this->belongsTo(Leader::class, 'leader_id', 'id');
    }
}