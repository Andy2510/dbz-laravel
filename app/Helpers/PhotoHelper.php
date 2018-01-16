<?php

namespace App\Helpers;

class PhotoHelper {
  public function deleteOne($photo)
  {
    if (file_exists(storage_path('app/'.$photo->file_name))){
        unlink(storage_path('app/'.$photo->file_name));
        echo $photo." was deleted";
    }
    $photo->delete();
  }
}
