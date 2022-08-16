<?php

namespace App\Services;

use App\Http\Resources\QuestionResource;
use App\Models\Question;

class QuestionService
{
    public function getAll()
    {
        $questions = Question::with('answers', 'answers.user')->get();
        return QuestionResource::collection($questions);
    }

    public function create($data)
    {
        $question = new Question;
        $question->question = $data['question'];

        $question->user_id = $data['user_id'];
        $question->save();

        $question->id;

        $question->categories()->attach($data['categories']);
        $question->subcategories()->attach($data['subcategories']);
        $question->save();

    }

    public function edit($id)
    {

    }

    public function update($data)
    {
        $id = $data['id'];
        $question = Question::find($id);
        $question->question = $data['question'];
        $question->user_id = $data['user_id'];
        $question->categories()->sync($data['categories']);
        $question->subcategories()->sync($data['subcategories']);
        $question->save();

        // $question = Question::update($data);
        return new QuestionResource($question);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $question = Question::find($data);
        $question->delete();
    }

}
