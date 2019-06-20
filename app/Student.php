<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['Noms', 'Age_Spirituel', 'Ville', 'Age', 'Matricule', 'Province_Spirituel' ];

}
