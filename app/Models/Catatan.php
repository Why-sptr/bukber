<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    
    protected $guarded = [];
    protected $table = "catatans";
    protected $dates = ['deleted_at'];
}
