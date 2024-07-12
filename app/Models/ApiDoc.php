<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiDoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'url', 'methods', 'query_id', 'query_json', 'headers', 'request_id', 'response_id', 'request_json', 'response_json'
    ];

    public function category()
    {
        return $this->belongsTo(ApiCategory::class, 'category_id');
    }

    public function queryId()
    {
        return $this->belongsTo(ApiQuery::class, 'query_id');
    }

    public function request()
    {
        return $this->belongsTo(ApiRequest::class, 'request_id');
    }

    public function response()
    {
        return $this->belongsTo(ApiResponse::class, 'response_id');
    }
}
