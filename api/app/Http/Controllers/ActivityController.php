<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index():JsonResponse
    {
        return response()->json(Activity::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create():JsonResponse
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request):JsonResponse
    {
        return response()->json(Activity::create($request->all()));

        //redirect
    }

    /**
     * Display the specified resource.
     *
     * @param Activity $activity
     * @return JsonResponse
     */
    public function show(Activity $activity):JsonResponse
    {
        return response()->json($activity);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Activity $activity
     * @return JsonResponse
     */
    public function edit(Activity $activity):JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Activity $activity
     * @return JsonResponse
     */
    public function update(Request $request, Activity $activity):JsonResponse
    {
        return response()->json($activity->update($request->all()));

        //redirect
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Activity $activity
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Activity $activity):JsonResponse
    {
        return response()->json($activity->delete());
    }
}
