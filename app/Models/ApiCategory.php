<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['menu_id', 'name', 'prefix_url', 'status'];

    public function menu()
    {
        return $this->belongsTo(ApiMenu::class, 'menu_id');
    }

    public function docs()
    {
        return $this->hasMany(ApiDoc::class, 'category_id');
    }
}
