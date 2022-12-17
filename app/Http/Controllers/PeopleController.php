<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeoplePostRequest;
use Illuminate\Http\JsonResponse;
use App\Models\People;

class PeopleController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(People::all(), 200);
    }

    public function show(People $person): JsonResponse
    {
        return response()->json($person, 200);
    }

    public function delete(People $person): JsonResponse
    {
        $person->delete();

        return response()->json(null,204);
    }

    public function create(PeoplePostRequest $request): JsonResponse
    {
        $people = People::create($request->all());

        return response()->json($people, 201);
    }

    public function update(PeoplePostRequest $request, People $person): JsonResponse
    {
        $person->update($request->all());

        return response()->json($person, 200);
    }
}
