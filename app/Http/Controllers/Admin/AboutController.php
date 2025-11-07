<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\AboutUpdateRequest;

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

    if (!$about) {
        toastr()->error('لم يتم العثور على السجل.');
        return back();
    }

    $data =$request->validated();
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('about', 'public');
        $data['image'] = $path;
    }

  $about->fill($data)->save();
    // 🧹 امسح الكاش القديم
    Cache::forget('global_about');

    toastr()->success('تم تعديل البيانات بنجاح.');
    return back();
   }
}
