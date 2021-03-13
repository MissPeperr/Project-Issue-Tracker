<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    use HasFactory;

    // Get the user that created this issue
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Get the project that this issue belongs to
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
