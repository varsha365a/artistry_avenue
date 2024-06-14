<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'image',
      ];
    use SoftDeletes;

    protected $dates = ['deleted_at'];
      
}
?>
