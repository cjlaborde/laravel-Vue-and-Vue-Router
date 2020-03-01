<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Archievement extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
