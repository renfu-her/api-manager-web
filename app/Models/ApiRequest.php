<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiRequest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'level', 'type', 'content', 'comment'];

    public function docs()
    {
        return $this->hasMany(ApiDoc::class, 'request_id');
    }
}
