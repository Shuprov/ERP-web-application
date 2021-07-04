<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_Table extends Model
{
    use HasFactory;
    protected $table='category_table';
   // protected $primaryKey='id';
    public $timestamps=false;

   
    protected $fillable = [
        'category_name',
        'description'
       
                 
    ];
}
