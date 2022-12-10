<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['first_name', 'last_name', 'phone_num', 'street', 'city', 'country', 'email'];

    protected $table = 'people';

    use HasFactory;
}
