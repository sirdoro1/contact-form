<?php

namespace Sirdoro\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
  protected $fillable = ['name','message','email','phone'];
  
}
