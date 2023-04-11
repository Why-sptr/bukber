<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataGenerasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    protected $guarded = [];
    protected $table = "data_generasis";
    protected $dates = ['deleted_at'];
}
