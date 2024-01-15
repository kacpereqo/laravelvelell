<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class PeopleController extends Controller
{
    public function index()
    {
        return response()->json(People::all(), 200);
    }

    public function store(Request $request)
    {
        $people = People::create($request->all());
        return response()->json($people, 201);
    }

    public function show($id)
    {
        $people = People::find($id);
        if (is_null($people)) {
            return response()->json(['message' => 'People not found'], 404);
        }
        return response()->json($people, 200);
    }

    public function update(Request $request, $id)
    {
        $people = People::find($id);
        if (is_null($people)) {
            return response()->json(['message' => 'People not found'], 404);
        }
        $people->update($request->all());
        return response()->json($people, 200);
    }

    public function destroy($id)
    {
        $people = People::find($id);
        if (is_null($people)) {
            return response()->json(['message' => 'People not found'], 404);
        }
        $people->delete();
        return response()->json(null, 204);
    }


    public function create(Request $request)
    {
        $people = People::create($request->all());
        return response()->json($people, 201);
    }
}
