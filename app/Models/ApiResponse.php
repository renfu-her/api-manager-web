<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiResponse extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level', 'type', 'is_required', 'content', 'comment'];

    public function docs()
    {
        return $this->hasMany(ApiDoc::class, 'response_id');
    }
}
