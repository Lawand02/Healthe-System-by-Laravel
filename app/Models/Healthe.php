<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Healthe extends Model
{
    use HasFactory;
    use SoftDeletes;
     
    protected $fillable=[
        'First_name','Last_name','State',
        'The_disease','Address','Birthday',
        'Doctor_name','Blood_Type', 'Phone',
         'Email', 'Gender', 'Nationality'];

         /* for added all column can we used:
            protected guarded[];
            and if I want added all column except one or two:
            protected guarded['password','email'];   
            but not prefer */
   
   
   

}
