<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\contact;

class contactController extends Controller
{
  public function contact()
  {


    return view('admin.Pages.contact');
  }

  public function editContact()
  {


    return view('admin.Pages.contact');
  }
}
