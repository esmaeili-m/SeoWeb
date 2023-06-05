<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabs extends Model
{
    use HasFactory;
    protected $fillable=[
      'category_id',
      'tab',
      'description',
      'order',
      'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
