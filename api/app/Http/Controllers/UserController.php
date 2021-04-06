<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(User::all());
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
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:80',
            'username' => 'required|unique:users|max:45',
            'email' => 'required|email|unique:users|max:80',
            'password' => 'required|min:6|max:150',
            'id_users_roles' => 'required'
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors());
        } else {
            $validated = User::create($request->all());

            return response()->json($validated, 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user): JsonResponse
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return JsonResponse
     */
    public function update(Request $request, User $user): JsonResponse
    {
        $validated = Validator::make($request->all(), [
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:80',
            'username' => 'required|unique:users|max:45',
            'email' => 'required|email|unique:users|max:80',
            'password' => 'required|min:6|max:150',
            'id_users_roles' => 'required'
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors());
        } else {
            $user->update($request->all());

            return response()->json($user, 200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(User $user): JsonResponse
    {
        $user->delete();

        return response()->json(null, 204);
    }
}
