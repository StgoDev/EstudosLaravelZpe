<?php

namespace App\Models\Curriculo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculo extends Model
{
    use HasFactory;

    protected $table = 'curriculo';
    
    protected $fillable =[
        'first_name',
        'last_name',
        'email',
        'confirmado'
    ];
}
