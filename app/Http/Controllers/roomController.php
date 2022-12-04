<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\rooms;

class roomController extends Controller
{
  public function viewAllRooms(){
    
    $rooms = rooms::all();
    
   return view ('admin.Pages.rooms',['rooms'=>$rooms]);
  }
  public function viewInsertPage()
  {


    return view('admin.Pages.roomsInsert');
  }
  public function insertRooms(Request $request)
  {
    $messages=[
      'required'=>'Morate popuniti obavezna polja',
    ];
    
    $validator = Validator::make(
    $request->all(),
    [
    'naziv'=>'required',
    
    ],$messages);
    
    if($validator->fails()){
    return redirect('/admin/insertRooms')->withErrors($validator)
                                 ->withInput();
    }
    $room = new rooms;
 
        $room->naziv = $request->input('naziv');
        $room->opis = $request->input('opis');
        $room->save();

    return redirect('admin.Pages.rooms')->with(['message'=>['type'=>'danger','text'=>'Prostorija je uspeno dodata.']]);

  }
  public function previewRoom()
  {


    return view('admin.Pages.roomsEdit');
  }
  public function editRoom($id, Request $request)
  {
 
      $messages=[
        'required'=>'Morate popuniti polje :attribute',
        'numeric'=>'Polje :attribute mora biti numericka vrednost'
      ];
      
      $validator = Validator::make(
      $request->all(),
      [
      'naziv_smera'=>'required',
      'trajanje'=>'required|numeric',
      'inicijali'=>'required',
      
      ],$messages);
      
      if($validator->fails()){
      return redirect('/viewEditPage')->withErrors($validator)
                                   ->withInput();
      }
      $room = rooms::findOrFail($id);
       
      $room->naziv = $request->input('naziv');
      $room->opis = $request->input('opis');
      $room->save();
      
      return redirect('admin.Pages.rooms')->with(['message'=>['type'=>'danger','text'=>'Prostorija je obrisana.']]);
  }
  public function deleteRoom($id){
      
    $room = rooms::findOrFail($id);
    $room->delete();

    $rooms = rooms::all();
  //  return redirect()->back()->with('status','Proizvod je izbrisan');
    return redirect()->back()->with(['message'=>['type'=>'danger','text'=>'Prostorija je obrisana.']]);
    }
}
