<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function path()
    {
        return route('tasks.show', ['project' => $this->project, 'task' => $this]);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function assignee()
    {
        return $this->belongsTo(User::class, "user_id" );
    }

    public function priority()
    {
        return $this->belongsTo(Priority::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
