<?php

namespace App\Http\Controllers;

use App\Models\User_Role;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    /**
     * @OA\Get(
     *      path="/roles",
     *      operationId="getUserRolesList",
     *      tags={"Users roles"},
     *      summary="Get list of users roles",
     *      description="Returns list of users roles",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        return response()->json(User_Role::paginate($request->get('per_page', 15)));
    }

    /**
     * @OA\Post(
     *      path="/roles",
     *      operationId="storeUserRole",
     *      tags={"Users roles"},
     *      summary="Store new user role",
     *      description="Returns user role data",
     *      @OA\RequestBody(
     *          required=true
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'role' => 'required|string|max:50'
        ]);

        $role = User_Role::create($validated);

        return response()->json($role, 201);

    }

    /**
     * @OA\Get(
     *      path="/roles/{role}",
     *      operationId="getUserRoleById",
     *      tags={"Users roles"},
     *      summary="Get user role information",
     *      description="Returns user role data",
     *      @OA\Parameter(
     *          name="id",
     *          description="UserRole id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     * @param User_Role $role
     * @return JsonResponse
     */
    public function show(User_Role $role): JsonResponse
    {
        return response()->json($role);
    }

    /**
     * @OA\Put(
     *      path="/roles/{role}",
     *      operationId="updateUserRole",
     *      tags={"Users roles"},
     *      summary="Update existing user role",
     *      description="Returns updated user role data",
     *      @OA\Parameter(
     *          name="id",
     *          description="UserRole id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *          required=true
     *      ),
     *      @OA\Response(
     *          response=202,
     *          description="Successful operation"
     *       ),
     *      @OA\Response(
     *          response=400,
     *          description="Bad Request"
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
     * @param Request $request
     * @param User_Role $role
     * @return JsonResponse
     */
    public function update(Request $request, User_Role $role): JsonResponse
    {
        $validated = $request->validate([
            'role' => 'required|string|max:50'
        ]);

        $role->update($validated);

        return response()->json($role, 200);

    }

    /**
     * @OA\Delete(
     *      path="/roles/{role}",
     *      operationId="deleteUserRole",
     *      tags={"Users roles"},
     *      summary="Delete existing user role",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="UserRole id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=204,
     *          description="Successful operation",
     *          @OA\JsonContent()
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Resource Not Found"
     *      )
     * )
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
