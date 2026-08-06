<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ['task_id', 'reporter_id', 'assignee_id', 'title', 'description', 'severity', 'status'];

    public function task() { return $this->belongsTo(Task::class); }
    public function reporter() { return $this->belongsTo(User::class, 'reporter_id'); }
    public function assignee() { return $this->belongsTo(User::class, 'assignee_id'); }
}
