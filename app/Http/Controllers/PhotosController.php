<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Character;
use App\Photo;
use App\Helpers\PhotoHelper;


class PhotosController extends Controller
{
    /**
     * The user repository instance.
     * var PhotoHelper
     */
    private $photoHelper;

    public function __construct(PhotoHelper $photoHelper) {
      $this->photoHelper = $photoHelper;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $character = Character::findOrFail($id);
        return view('createPhoto', [
          'id' => $id,
          'character' => $character
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $character_id)
    {
      $validatedData = $request->validate([
        'upload' => 'required|mimes:jpeg,bmp,png|max:6000'
    ]);
      $path = $request->file('upload')->storePublicly('public/photos');
      // file siuo atveju yra upload'o input'o name
      // store cia reiskia folderis, i kuri keliaus fotkes
      // 'upload' turi buti visur vienodas (ir 45, ir 43 eilutej, ir creaphoto.blade faile ties validacija)
      $post = [
        'file_name' => $path,
        'character_id' => $character_id
      ];

      Photo::create($post);

      $post = $request->except('_token');
      return redirect()->route('index');
    }

    /**

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $photo = Photo::findOrFail($id);

      $this->photoHelper->deleteOne($photo);

      return redirect()->back();
    }
}
