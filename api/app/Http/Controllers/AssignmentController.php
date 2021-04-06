<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index():JsonResponse
    {
        return response()->json(Assignment::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function create(): JsonResponse
    {
        // show view
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request):JsonResponse
    {
        return response()->json(Assignment::create($request->all()));

        //redirect
    }

    /**
     * Display the specified resource.
     *
     * @param Assignment $assignment
     * @return JsonResponse
     */
    public function show(Assignment $assignment):JsonResponse
    {
        return response()->json($assignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Assignment $assignment
     * @return JsonResponse
     */
    public function edit(Assignment $assignment):JsonResponse
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Assignment $assignment
     * @return JsonResponse
     */
    public function update(Request $request, Assignment $assignment):JsonResponse
    {
        return response()->json($assignment->update($request->all()));

        //redirect
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Assignment $assignment
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Assignment $assignment):JsonResponse
    {
        return response()->json($assignment->delete());
    }
}