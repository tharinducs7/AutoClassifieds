<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ads extends Model
{
    use HasFactory;

    protected $table = 'ads';
    protected $fillbale = ['categoryId','brand', 'model', 'year', 'country',  'location', 'condition', 'mileage', 'transmission', 'fuelType', 'engineCapacity', 'other', 'images', 'title', 'description', 'price', 'status', 'approvedDate','expieryDate'];
}
