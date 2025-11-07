<?php

namespace App\Http\Controllers\Admin;

use cache;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorTtestimonialRequest;
use App\Http\Requests\UpdateTtestimonialRequest;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::select('id', 'name', 'postion', 'message', 'created_at')->get();
        return view('admin.testimonils.index',compact('testimonials'));
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
    public function store(StorTtestimonialRequest $request)
    {
        $validator = $request->validated();
        $data = $request->all();
            Testimonial::create($data);
            cache()->forget('landing_testimonials');
            toastr()->AddSuccess('تم اضافة رأي العميل  بنجاح!');
            return redirect()->route('testimonials.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTtestimonialRequest $request, string $id)
    {
        $validator = $request->validated();
        $data = $request->all();
          $testimonial= Testimonial::find($id);
          $testimonial->update($data);
           cache()->forget('landing_testimonials');
            toastr()->AddSuccess('تم تعديل رأي العميل  بنجاح!');
            return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial= Testimonial::find($id);
        $testimonial->delete();
        toastr()->addError('تم الحزف   بنجاح!');

        return redirect()->route('testimonials.index');
    }
}
