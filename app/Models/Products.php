<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    // 指定 table 的名稱，並取消自動產生 timestamps
    protected $table='products';
    protected $timestamps=false;
}
