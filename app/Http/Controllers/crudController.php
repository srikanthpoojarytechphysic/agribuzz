<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ads;

use App\crudHelper;

use Illuminate\Database\Eloquent\Model;

class crudController extends Controller
{
  public function create(Request $request,$model)
  {
    // dd($request->all());
    ads::create($request->all());

    $request->session()->flash('success','1');

    return redirect()->back();
  }
}
