<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AssignmentController extends Controller
{

    /**
     * @OA\Get(
     *      path="/assignments",
     *      operationId="getAssignmentsList",
     *      tags={"Assignments"},
     *      summary="Get list of assignments",
     *      description="Returns list of assignments",
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
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request):JsonResponse
    {
        return response()->json(Assignment::paginate($request->get('per_page', 15)));
    }

    /**
     * @OA\Get(
     *      path="/assignmentsClient/{id}",
     *      operationId="getAssignmentsList",
     *      tags={"Assignments"},
     *      summary="Get list of assignments for client",
     *      description="Returns list of assignments for specific client",
     *      @OA\Parameter(
     *          name="id",
     *          description="Client id",
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
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     *     )
     *
     * @param int $id
     * @return JsonResponse
     */
    public function get_assignments(int $id):JsonResponse
    {
        $assignments = DB::table('assignments')->where('id_clients', '=', $id)->get();
        return response()->json($assignments);
    }

    /**
     * @OA\Post(
     *      path="/assignments",
     *      operationId="storeAssignment",
     *      tags={"Assignments"},
     *      summary="Store new assignment",
     *      description="Returns assignment data",
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
            'work_description' => 'required|string|max:200',
            'developer_description' => 'required|string|max:200',
            'id_clients' => 'required|integer',
            'id_statuses' => 'required|integer'
        ]);

        return response()->json(Assignment::create($validated), 201);
    }

    /**
     * @OA\Get(
     *      path="/assignments/{assignment}",
     *      operationId="getAssignmentById",
     *      tags={"Assignments"},
     *      summary="Get assignment information",
     *      description="Returns assignment data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Assignment id",
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
     * @param Assignment $assignment
     * @return JsonResponse
     */
    public function show(Assignment $assignment):JsonResponse
    {
        return response()->json($assignment);
    }

    /**
     * @OA\Put(
     *      path="/assignments/{assignment}",
     *      operationId="updateAssignment",
     *      tags={"Assignments"},
     *      summary="Update existing assignment",
     *      description="Returns updated assignment data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Assignment id",
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
     * @param Assignment $assignment
     * @return JsonResponse
     */
    public function update(Request $request, Assignment $assignment):JsonResponse
    {
        $validated = $request->validate([
            'work_description' => 'required|string|max:200',
            'developer_description' => 'required|string|max:200',
            'id_clients' => 'required|integer',
            'id_statuses' => 'required|integer'
        ]);

        return response()->json($assignment->update($validated));
    }

    /**
     * @OA\Delete(
     *      path="/assignments/{assignment}",
     *      operationId="deleteAssignment",
     *      tags={"Assignments"},
     *      summary="Delete existing assignment",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Assignment id",
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
     * @param Assignment $assignment
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Assignment $assignment):JsonResponse
    {
        return response()->json($assignment->delete(), 204);
    }
}
