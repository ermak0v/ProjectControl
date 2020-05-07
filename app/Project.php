<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function path()
    {
        return route('projects.show', $this->slug);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function members()
    {
        return $this->belongsToMany(User::class)->withPivot('is_favorite')->withTimestamps();
    }
}
