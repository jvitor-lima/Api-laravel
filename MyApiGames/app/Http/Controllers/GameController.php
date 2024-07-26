<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    public function show($id)
    {
        $game = Game::find($id);
        return $game ? response()->json($game) : abort(404);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'genre' => 'required',
            'description' => 'nullable',
            'release_date' => 'nullable|date'
        ]);

        $game = Game::create($validatedData);
        return response()->json($game, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'sometimes|required|min:3',
            'genre' => 'sometimes|required',
            'description' => 'nullable',
            'release_date' => 'nullable|date'
        ]);

        $game = Game::update($id, $validatedData);

        return response()->json($game);
    }

    public function destroy($id)
    {
        $message = Game::delete($id);
        return response()->json(['message' => $message], 204);
    }
}