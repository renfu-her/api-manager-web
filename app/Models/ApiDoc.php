<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiDoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'url', 'methods', 'query_id', 'query_json', 'headers', 'request_id', 'request_json', 'response_id', 'response_json'
    ];

    public function category()
    {
        return $this->belongsTo(ApiCategory::class);
    }
}
