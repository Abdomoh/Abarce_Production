<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkMechanismRequest;
use App\Http\Requests\UpdateWorkMechanismRequest;
use App\Models\WorkMechanism;

class WorkMechanismController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mechanisms = WorkMechanism::select('id', 'title', 'description', 'image', 'created_at')->get();
        return view('admin.mechanisms.index', compact('mechanisms'));
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
    public function store(StoreWorkMechanismRequest $request)
    {
        $validator = $request->validated();
        $data = $request->all();

        if ($request->hasFile(key: 'image')) {
            $data['image'] = $request->file('image')->store('mechanisms', 'public');
        }
        WorkMechanism::create($data);
        // dd($data);
        cache()->forget('landing_mechanisms');
        toastr()->AddSuccess('تمت الاضافة  بنجاح!');
        return redirect()->route('mechanisms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(WorkMechanism $workMechanism)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WorkMechanism $workMechanism)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkMechanismRequest $request, $id)
    {
        $validator = $request->validated();
        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('mechanisms', 'public');
        }
        $workMechanism = WorkMechanism::find($id);

        $workMechanism->update($data);
        cache()->forget('landing_mechanisms');
        toastr()->AddSuccess('تم التعديل  بنجاح!');
        return redirect()->route('mechanisms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $workMechanism = WorkMechanism::find($id);
        $workMechanism->delete();
        toastr()->addError('تم الحزف   بنجاح!');

        return redirect()->route('mechanisms.index');
    }
}
