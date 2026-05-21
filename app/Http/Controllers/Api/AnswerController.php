<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index()
    {
        return response()->json(Answer::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);

        $answer = Answer::create($validated);

        return response()->json($answer, 201);
    }

    public function show(Answer $answer)
    {
        return response()->json($answer);
    }

    public function update(Request $request, Answer $answer)
    {
        $validated = $request->validate([
            'question_id' => 'required|exists:questions,id',
            'answer' => 'required|string',
            'is_correct' => 'required|boolean',
        ]);

        $answer->update($validated);

        return response()->json($answer);
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();

        return response()->json(null, 204);
    }
}