<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(Contact::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:80',
            'email' => 'required|email|max:80',
            'phone' => 'required|max:30',
            'id_client' => 'required'
        ]);

        $contact = Contact::create($validated);

        return response()->json($contact, 201);

    }

    /**
     * Display the specified resource.
     *
     * @param Contact $contact
     * @return JsonResponse
     */
    public function show(Contact $contact): JsonResponse
    {
        return response()->json($contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Contact $contact
     * @return JsonResponse
     */
    public function update(Request $request, Contact $contact): JsonResponse
    {
        $validated = $request->validate([
            'firstname' => 'required|max:50',
            'lastname' => 'required|max:80',
            'email' => 'required|email|max:80',
            'phone' => 'required|max:30',
            'id_client' => 'required'
        ]);

        $contact->update($validated);

        return response()->json($contact, 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Contact $contact
     * @return JsonResponse
     * @throws Exception
     */
    public function destroy(Contact $contact): JsonResponse
    {
        $contact->delete();

        return response()->json(null, 204);
    }
}
