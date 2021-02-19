<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyerReq extends Model
{
  
        protected $fillable = [
            'category_Id',
            'model_Year',
            'description',
            'price',
            'title',
            'exp_Date',
            'remark',
            'action_Date',
            'user_Id'
        ];
    
}
