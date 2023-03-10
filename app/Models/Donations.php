<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    public function Funds(){
        return $this->belongsTo(Funds::class,'fund_id');
    }
}
