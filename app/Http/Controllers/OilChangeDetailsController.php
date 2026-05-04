<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOilChangeDetailsRequest;
use App\Models\OilChangeDetails;
use Illuminate\Http\Request;

class OilChangeDetailsController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('oil_change_details.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOilChangeDetailsRequest $request)
    {
        $validated = $request->validated();
        $oilChangeDetails = OilChangeDetails::create($validated);
        return redirect("/result/{$oilChangeDetails->id}");    }

    /**
     * Display the specified resource.
     */
    public function show(OilChangeDetails $oilChangeDetails)
    {
        return view('oil_change_details.show', ['oilChangeDetails' => $oilChangeDetails]);
    }
}
