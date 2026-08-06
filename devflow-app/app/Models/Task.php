<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['sprint_id', 'title', 'description', 'assignee_id', 'priority', 'deadline', 'status', 'story_point'];

    public function sprint() { return $this->belongsTo(Sprint::class); }
    public function assignee() { return $this->belongsTo(User::class, 'assignee_id'); }
    public function issues() { return $this->hasMany(Issue::class); }
}
