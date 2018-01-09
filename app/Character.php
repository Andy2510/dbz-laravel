<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
  protected $fillable = [
      'name', 'race', 'pwrlevel', 'description'
  ];

  protected $table = 'characters';
}
