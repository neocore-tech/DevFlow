<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['name', 'client_id', 'pm_id', 'budget', 'start_date', 'end_date', 'status'];
    
    public function client() { return $this->belongsTo(User::class, 'client_id'); }
    public function pm() { return $this->belongsTo(User::class, 'pm_id'); }
    public function sprints() { return $this->hasMany(Sprint::class); }
}
