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
    $photoHelper = app(PhotoHelper::class);
    // siuo atveju dvitaskiai nereiskia statinio metodo, tai reiskia klases nurodyma (kuri siuo atveju yra aprasyta PhotoHelper faile)

  }

}
