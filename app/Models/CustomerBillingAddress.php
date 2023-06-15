<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerBillingAddress extends Model
{
    use HasFactory;
    protected $table = "customer_billing_address";
    protected $primaryKey = 'id';
}
