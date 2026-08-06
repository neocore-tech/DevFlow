<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    protected $fillable = ['user_id', 'campus', 'mentor_id', 'status'];

    public function user() { return $this->belongsTo(User::class); }
    public function mentor() { return $this->belongsTo(User::class, 'mentor_id'); }
}
