<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livre extends Model
{
    use HasFactory;
    protected $table= "livres";
    protected $primaryKey="id";
    protected $fillable=["titre","pages","description","image"];
    public  $timestamps = true;
}
