<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Client::all());
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
            'name' => 'required|max:100',
            'address' => 'required|max:100',
            'postcode' => 'required|max:10',
            'city' => 'required|max:50',
            'country' => 'required|max:50'
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors());
        } else {
            $validated = Client::create($request->all());

            return response()->json($validated, 201);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @return JsonResponse
     */
    public function show(Client $client): JsonResponse
    {
        return response()->json($client);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Client $client
     * @return JsonResponse
     */
    public function update(Request $request, Client $client): JsonResponse
    {
        $validated = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'address' => 'required|max:100',
            'postcode' => 'required|max:10',
            'city' => 'required|max:50',
            'country' => 'required|max:50'
        ]);

        if ($validated->fails()) {
            return response()->json($validated->errors());
        } else {
            $client->update($request->all());

            return response()->json($client, 200);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Client $client): JsonResponse
    {
        $client->delete();

        return response()->json(null, 204);
    }
}
