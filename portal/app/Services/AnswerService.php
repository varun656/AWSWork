<?php

namespace App\Services;

use App\Http\Resources\AnswerResource;
use App\Models\Answer;
use App\Models\Question;

class AnswerService
{
    public function getAll()
    {
        return AnswerResource::collection(Answer::all());
    }

    public function create($data)
    {
        $answer = new Answer;
        $answer->answer = $data['answer'];

        $answer->user_id = $data['user_id'];
        $answer->save();

        // $answer->question()->attach($data['question_id']);
        // $question->subcategories()->attach($data['subcategories']);
        $question = Question::find($data['question_id']);

        $question->answers()->attach($answer);
        $question->save();

    }

    public function edit($id)
    {

    }

    public function update($data)
    {
        $id = $data['id'];
        $answer = Answer::find($id);
        $answer->Answer = $data['Answer'];
        $answer->user_id = $data['user_id'];
        $answer->categories()->sync($data['categories']);
        $answer->subcategories()->sync($data['subcategories']);
        $answer->save();

        // $answer = Answer::update($data);
        return new AnswerResource($answer);

    }

    public function delete($data)
    {
        // $id = $data['id'];
        $answer = Answer::find($data);
        $answer->delete();
    }

}
