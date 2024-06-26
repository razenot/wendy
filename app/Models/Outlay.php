<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlay extends Model
{
    use HasFactory;

    protected $fillable = ['name','price', 'prepayment', 'prepayment_date', 'all_payment_date', 'comments'];
}
