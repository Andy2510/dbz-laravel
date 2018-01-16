<?php

namespace App\Http\Controllers;

use App\Helpers\PhotoHelper;
use Illuminate\Http\Request;
use App\Character;

class CharacterController extends Controller
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
      $characters = Character::all();

      return view('showAll', [
      'characters' => $characters
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCharacters');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // iskvieciame metoda
      $this->validateRequest($request);

      $post = $request->except('_token');
      Character::create($post);

      return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $character = Character::findOrFail($id);
      return view('showCharacter', [
        'character' => $character
      ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $character = Character::findOrFail($id);
      return view('edit', [
        'character' => $character
      ]);
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
      $this->validateRequest($request, $id);

      $character = Character::findOrFail($id);
      $post = $request->except('_token');
      $character->update($post);
      return redirect()->to('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      public function destroy($id)
      {
        $character = Character::findOrFail($id);
        foreach ($character->photos as $photo){
          $this->photoHelper->deleteOne($photo);
        }
        $character->delete();
        return redirect()->route('index');
      }

    private function validateRequest($request, $id = null)
    {
      $rules = [
        'name' => 'required|max:100|unique:characters',
        'race' => 'required',
        'power_level' => 'required|numeric|max:10000',
        'description' => 'required|max:255|min:15'
      ];

      if($id != NULL) {
        $rules['name'].=',name,'. $id .',id';
      }

      $request->validate($rules);
    }
}
