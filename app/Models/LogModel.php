<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogModel extends Model
{
    use HasFactory;
    public function getCreatedAtAttribute($value)
    {
        return date('d-M-y',strtotime($value));
    }
}
