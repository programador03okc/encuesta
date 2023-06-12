<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['competitor_id', 'user_id'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    public function competitor()
    {
        return $this->belongsTo(Competitor::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
