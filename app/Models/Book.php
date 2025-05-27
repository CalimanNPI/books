<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    use HasFactory;

    public function lends(): HasMany
    {
        return $this->hasMany(Lend::class);
    }

    public function bookauthors(): BelongsToMany
    {
        return $this->belongsToMany(BookAuthor::class);
    }
}
