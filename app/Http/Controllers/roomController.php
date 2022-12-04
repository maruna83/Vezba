<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\rooms;

class roomController extends Controller
{
    public function rooms()
  {


    return view('admin.Pages.rooms');
  }

  public function insertRooms()
  {


    return view('admin.Pages.rooms');
  }
}
