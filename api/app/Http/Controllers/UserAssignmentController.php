<?php

namespace App\Http\Controllers;

use App\Models\User_Assignment;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserAssignmentController extends Controller
{
    /**
     * @OA\Get(
     *      path="/userAssignments",
     *      operationId="getuserAssignmentsList",
     *      tags={"User Assignments"},
     *      summary="Get list of userAssignments",
     *      description="Returns list of userAssignments",
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
    public function index(Request $request):JsonResponse
    {
        return response()->json(User_Assignment::paginate($request->get('per_page', 15)));
    }

    /**
     * @OA\Post(
     *      path="/userAssignments",
     *      operationId="storeuserAssignment",
     *      tags={"User Assignments"},
     *      summary="Store new userAssignment",
     *      description="Returns userAssignment data",
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
    public function store(Request $request):JsonResponse
    {
        $validated = $request->validate([
            'id_users' => 'required|integer',
            'id_assignments' => 'required|integer'
        ]);

        return response()->json(User_Assignment::create($validated), 201);
    }

    /**
     * @OA\Get(
     *      path="/userAssignments/{userAssignment}",
     *      operationId="getuserAssignmentById",
     *      tags={"User Assignments"},
     *      summary="Get userAssignment information",
     *      description="Returns userAssignments data",
     *      @OA\Parameter(
     *          name="id",
     *          description="userAssignment id",
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
     * @param User_Assignment $userAssignment
     * @return JsonResponse
     */
    public function show(User_Assignment $userAssignment):JsonResponse
    {
        return response()->json($userAssignment);
    }

    /**
     * @OA\Put(
     *      path="/userAssignments/{userAssignment}",
     *      operationId="updateuserAssignment",
     *      tags={"User Assignments"},
     *      summary="Update existing userAssignment",
     *      description="Returns updated userAssignment data",
     *      @OA\Parameter(
     *          name="id",
     *          description="userAssignment id",
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
     * @param User_Assignment $userAssignment
     * @return JsonResponse
     */
    public function update(Request $request, User_Assignment $userAssignment):JsonResponse
    {
        $validated = $request->validate([
            'id_users' => 'required|integer',
            'id_assignments' => 'required|integer'
        ]);

        return response()->json($userAssignment->update($validated));
    }

    /**
     * @OA\Delete(
     *      path="/userAssignments/{userAssignment}",
     *      operationId="deleteuserAssignment",
     *      tags={"User Assignments"},
     *      summary="Delete existing userAssignment",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="userAssignment id",
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
     * @param User_Assignment $userAssignment
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(User_Assignment $userAssignment):JsonResponse
    {
        return response()->json($userAssignment->delete(), 204);
    }
}
