<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\category;

class categoryController extends Controller
{
    public function category()
  {


    return view('admin.Pages.category');
  }

  public function insertCategory()
  {


    return view('admin.Pages.category');
  }
}
