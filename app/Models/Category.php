<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "product_category";
    protected $primaryKey = 'category_id';
    public function getCreatedAtAttribute($value)
    {
        return date('d-M-y',strtotime($value));
    }
}
