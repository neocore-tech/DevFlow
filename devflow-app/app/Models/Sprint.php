<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    protected $fillable = ['project_id', 'sprint_number', 'goal', 'start_date', 'end_date', 'status'];

    public function project() { return $this->belongsTo(Project::class); }
    public function tasks() { return $this->hasMany(Task::class); }
}
