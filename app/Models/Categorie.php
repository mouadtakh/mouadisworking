<?php

namespace App\Models;
use App\Models\livre;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Categorie extends Model
{
    use HasFactory;
    protected $table="categories";
    protected $id="id";


    public function livres()
    {
        return $this->hasMany(livre::class, 'categorie_id');
    }


       
    
    
}
