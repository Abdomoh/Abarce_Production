<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUpdateRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
   public function editAbout()
   {
    $about = About::first();
    return view('admin.abouts.edit',compact('about'));
   }
   public function updateAbout(AboutUpdateRequest $request)
   {
    $about = About::first();

    $data =$request->validated();
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('about', 'public');
        $data['image'] = $path;
    }

    $about->update($data);
    toastr()->success('تم تعديل البيانات بنجاح.');
    return redirect('../dashboard');
   }
}
