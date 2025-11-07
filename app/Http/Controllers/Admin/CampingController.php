<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCampaingRequest;
use App\Http\Requests\UpdateCampaignRequest;
use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaings = Campaign::latest()->orderBy('created_at', 'desc')->get();

        return view('admin.campaigns.index', compact('campaings'));
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
    public function store(StoreCampaingRequest $request)
    {
        $data = $request->validated();
        $resultsText = $request->input('results')[0] ?? '';
        $resultsArray = array_filter(array_map('trim', explode("\n", $resultsText)));

        $data['results'] = $resultsArray;

        $campaign = Campaign::create($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('campaigns', 'public');
                $campaign->images()->create(['image' => $path]);
            }
        }
    // حذف الكاش القديم
    cache()->forget('landing_campaigns');
        toastr()->AddSuccess('تم اضافة حملة بنجاح!');
        return redirect()->route(route: 'campaigns.index');
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
    public function update(UpdateCampaignRequest $request, Campaign $campaign)
    {
        $data = $request->validated();
        $resultsText = $request->input('results')[0] ?? '';
        $resultsArray = array_filter(array_map('trim', explode("\n", $resultsText)));

        $data['results'] = $resultsArray;

        if ($request->hasFile('images')) {
            foreach ($campaign->images as $oldImage) {
                if (Storage::disk('public')->exists($oldImage->image)) {
                    Storage::disk('public')->delete($oldImage->image);
                }
                $oldImage->delete();
            }

            foreach ($request->file('images') as $file) {
                $path = $file->store('campaigns', 'public');
                $campaign->images()->create(['image' => $path]);
            }
        }

        $campaign->update($data);
    // حذف الكاش القديم
    cache()->forget('landing_campaigns');

        toastr()->AddSuccess('تم تعديل الحملة بنجاح!');
        return redirect()->route(route: 'campaigns.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campaign $campaign)
    {
        if ($campaign->image)
            Storage::disk('public')->delete($campaign->image);
        $campaign->delete();
        toastr()->addError('تم حزف الحملة بنجاح!');
        return redirect()->route('campaigns.index');
    }
}
