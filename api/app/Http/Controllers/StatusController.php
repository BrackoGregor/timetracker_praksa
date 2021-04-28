<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * @OA\Get(
     *      path="/statuses",
     *      operationId="getStatusesList",
     *      tags={"Assignment statuses"},
     *      summary="Get list of statuses",
     *      description="Returns list of statuses",
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
        return response()->json(Status::paginate($request->get('per_page', 15)));
    }

    /**
     * @OA\Post(
     *      path="/statuses",
     *      operationId="storeStatus",
     *      tags={"Assignment statuses"},
     *      summary="Store new status",
     *      description="Returns status data",
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
            'name' => 'required|string|max:20'
        ]);

        return response()->json(Status::create($validated), 201);
    }

    /**
     * @OA\Get(
     *      path="/statuses/{status}",
     *      operationId="getStatusById",
     *      tags={"Assignment statuses"},
     *      summary="Get status information",
     *      description="Returns status data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Status id",
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
     * @param Status $status
     * @return JsonResponse
     */
    public function show(Status $status):JsonResponse
    {
        return response()->json($status);
    }

    /**
     * @OA\Put(
     *      path="/statuses/{status}",
     *      operationId="updateStatus",
     *      tags={"Assignment statuses"},
     *      summary="Update existing status",
     *      description="Returns updated status data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Status id",
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
     * @param Status $status
     * @return JsonResponse
     */
    public function update(Request $request, Status $status):JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:20'
        ]);

        return response()->json($status->update($validated));
    }

    /**
     * @OA\Delete(
     *      path="/statuses/{status}",
     *      operationId="deleteStatus",
     *      tags={"Assignment statuses"},
     *      summary="Delete existing status",
     *      description="Deletes a record and returns no content",
     *      @OA\Parameter(
     *          name="id",
     *          description="Status id",
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
     * @param Status $status
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Status $status):JsonResponse
    {
        return response()->json($status->delete(), 204);
    }
}
