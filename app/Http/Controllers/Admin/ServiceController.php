<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Service;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::select('id', 'title', 'image', 'description', 'created_at')->get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $validator = $request->validated();
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
            }
            Service::create($data);

            toastr()->AddSuccess('تم اضافة الخدمة بنجاح!');
            return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validator = $request->validated();
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('services', 'public');
            }
          $service->update($data);

            toastr()->AddSuccess('تم تعديل الخدمة بنجاح!');
            return redirect()->route('services.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service= Service::find($id);
        $service->delete();
        toastr()->addError('تم حزف  الخدمة بنجاح!');

        return redirect()->route('services.index');
    }
}
