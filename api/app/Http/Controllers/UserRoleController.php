<?php

namespace App\Http\Controllers;

use App\Models\User_Role;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(User_Role::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = Validator::make($request->all(), [
            'role' => 'required|max:50'
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors());
        } else {
            $validated = User_Role::create($request->all());

            return response()->json($validated, 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param User_Role $role
     * @return JsonResponse
     */
    public function show(User_Role $role): JsonResponse
    {
        return response()->json($role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User_Role $role
     * @return JsonResponse
     */
    public function update(Request $request, User_Role $role): JsonResponse
    {
        $validated = Validator::make($request->all(), [
            'role' => 'required|max:50'
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors());
        } else {
            $role->update($request->all());

            return response()->json($role, 200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User_Role $role
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(User_Role $role): JsonResponse
    {
        $role->delete();

        return response()->json(null, 204);
    }
}
