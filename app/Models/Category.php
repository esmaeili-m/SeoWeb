<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable=[
      'name',
      'slug',
      'description',
      'father_id',
      'image',
      'status',
    ];

    public function tabs()
    {
        return $this->hasMany(Tabs::class,'category_id','id')->where('status',1);
    }
}
