<?php

namespace App\Http\Controllers;

use App\Models\User_Assignment;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserAssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index():JsonResponse
    {
        return response()->json(User_Assignment::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request):JsonResponse
    {
        $validated = $request->validate([
            'id_users' => 'required',
            'id_assignments' => 'required'
        ]);

        return response()->json(User_Assignment::create($validated), 201);
    }

    /**
     * Display the specified resource.
     *
     * @param User_Assignment $user_Assignment
     * @return JsonResponse
     */
    public function show(User_Assignment $user_Assignment):JsonResponse
    {
        return response()->json($user_Assignment);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User_Assignment $user_Assignment
     * @return JsonResponse
     */
    public function update(Request $request, User_Assignment $user_Assignment):JsonResponse
    {
        $validated = $request->validate([
            'id_users' => 'required',
            'id_assignments' => 'required'
        ]);

        return response()->json($user_Assignment->update($validated));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User_Assignment $user_Assignment
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(User_Assignment $user_Assignment):JsonResponse
    {
        return response()->json($user_Assignment->delete(), 204);
    }
}
