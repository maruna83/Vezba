<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\rooms;

class roomController extends Controller
{
  public function viewAllRooms(){
    
    $rooms=rooms::where('delete', '=', 1)->get();

   return view ('admin/Pages/rooms',['rooms'=>$rooms,'rb'=>0]);
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
        $room->delete = '1';
        $room->save();

    return redirect('admin/rooms')->with(['message'=>['type'=>'success','text'=>'Prostorija je uspeno dodata.']]);

  }

  public function previewRoom($id, Request $request)
  {
    $room = rooms::findOrFail($id);
    
    return view('/admin/Pages/roomsEdit',['room'=>$room]);
  }
  
  public function editRoom($id, Request $request)
  {
 
      $messages=[
        'required'=>'Morate popuniti polje :attribute',
      ];
      
      $validator = Validator::make(
      $request->all(),
      [
      'naziv'=>'required',
            
      ],$messages);
      
      if($validator->fails()){
      return redirect('/admin/Pages/roomsEdit')->withErrors($validator)
                                   ->withInput();
      }
      $room = rooms::findOrFail($id);
       
      $room->naziv = $request->input('naziv');
      $room->opis = $request->input('opis');
      $room->update();
      
      return redirect('admin/rooms')->with(['message'=>['type'=>'success','text'=>'Prostorija je izmenjena.']]);
  }
  public function deleteRoom($id){
      
    $room = rooms::findOrFail($id);
    $room->delete = '0';
    $room->update();

    $rooms=rooms::where('delete', '=', 1)->get();
  
    return redirect()->back()->with(['message'=>['type'=>'danger','text'=>'Prostorija je obrisana.']]);
    }
}
