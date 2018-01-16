<?php

namespace App\Helpers;

class PhotoHelper {
  public function deleteOne($photo)
  {
    $this->deleteOneFromFileSystem($photo);

    $photo->delete();
  }

    /**
     * @param $photo
     */

  protected function deleteOneFromFileSystem($photo)
  {
    $path = storage_path('app/' . $photo->file_name);

    if (file_exists($path)){
        unlink($path);
    }
  }
}
