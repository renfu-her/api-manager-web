<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiQuery extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'content'];

    public function docs()
    {
        return $this->hasMany(ApiDoc::class, 'query_id');
    }
}
