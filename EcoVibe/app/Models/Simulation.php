<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    use HasFactory;

    protected $fillable =['user_id','type','input_data','output_data'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
