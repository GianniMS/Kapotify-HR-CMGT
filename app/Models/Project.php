<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $timestamps = false;

    use HasFactory;

    protected $fillable = [
      'user_id',
      'name',
      'audio_file',
      'description',
      'cover',
    ];


    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'genre_project', 'project_id', 'genre_id')
            ->withTimestamps(); // If you want to track timestamps
    }
}