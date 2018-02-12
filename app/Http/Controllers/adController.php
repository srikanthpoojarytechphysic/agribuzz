<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ads;

class adController extends Controller
{
    public function index()
    {
      return view('admin.ads.post-new-ad');
    }

    public function create(Request $request)
    {
      // dd($request->all());
      ads::create($request->all());

      $request->session()->flash('success','1');

      return redirect()->back();
    }
    public function update()
    {
      return view('admin.ads.manage-ads');
    }
}
