<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agents extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'name', 'phone', 'site', 'mail', 'vk', 'insta', 'price', 'prepayment', 'comments', 'date_visit', 'status'];
}
