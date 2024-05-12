<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category'
        
    ];


    public function citizen(){

        return $this->hasMany(product::class);
    }
}
