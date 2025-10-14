<?php

namespace App\Http\Controllers\Admin;
use App\Models\Seeting;
use App\Http\Controllers\Controller;
use App\Http\Requests\SeetingUpdateRequest;

class SeetingController extends Controller
{
    public function editSeeting(){
        $seeting = Seeting::first();
        return view('admin.seetings.edit',compact('seeting'));
    }

    public function updateSeeting(SeetingUpdateRequest $request){
        $seeting = Seeting::first();

        $data =$request->validated();
        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('logos', 'public');
            $data['logo'] = $path;
        }

        $seeting->update($data);


        toastr()->success('تم تعديل البيانات بنجاح.');

        return redirect('../dashboard');

    }

}
