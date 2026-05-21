<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Score;
use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function index()
    {
        return response()->json(Score::with('category')->orderBy('score', 'desc')->get());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pseudo' => 'required|string|max:255',
            'score' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $score = Score::create($validated);

        return response()->json($score, 201);
    }

    public function show(Score $score)
    {
        return response()->json($score->load('category'));
    }

    public function destroy(Score $score)
    {
        $score->delete();

        return response()->json(null, 204);
    }
}