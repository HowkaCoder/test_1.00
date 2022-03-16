<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContectModel extends Model
{
    
    protected $fillable = [
        'name' , 'email' , 'subject' 
    ];
    protected $guarded = [
        'id'
    ];
}
