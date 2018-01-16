<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = [
      'file_name',
      'character_id'
  ];

  public function getUrlAttribute()
  {
    // return str_replace('public', 'storage', $this->file_name);
    $photoUrl = explode('/', $this->file_name);
    $photoUrl[0] = 'storage';
    $photoUrl = implode('/', $photoUrl);
    return asset($photoUrl);
    // irasius asset(), mes graziname absolute path, t.y. prideda http://192.168.33.10 ir visuomet nuoroda i nuotrauku kataloga visada liks tokia pati, nebeprides /show/ url'e
  }

}
