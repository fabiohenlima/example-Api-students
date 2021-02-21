<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected  $table = 'students';

    protected $fillable = [
        'name','last_name' ,'email', 'telephone','cep','number', 'complement','street' ,'barrio', 'sex', 'status'
    ];

}
