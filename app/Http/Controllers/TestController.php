<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function get_single_question(Request $request) {

        $question = \App\Models\Question::where('id', $request->id)->with('answeres')->first();
        $total_questions = \App\Models\Question::count();
        $view = view('questionpage', ['data' => ['question' => $question, 'total' => $total_questions]])->render();
        return response($view);
        
    }

    public function submit_user(Request $request) {
        $userId = \App\Models\User::insertGetId([
            'name' => $request->name,
            'email' => uniqid().'test@yopmail.com',
            'password' => 'test@12345'
        ]);
        return response()->json(['status' => true, 'user' => $userId], 200);
    }

    public function calculate_result(Request $request) {
        $correct = 0;
        $wrong = 0;
        foreach ($request->answeres as $answere) {

            \App\Models\Result::insert([
                'question_id' => $answere['question_id'],
                'answere_id' => $answere['answere_id'],
                'user_id' => $answere['user_id']
            ]);
            $question = \App\Models\Question::where('id', $answere['question_id'])->with('correct_answere')->first();
            
            if ($question->correct_answere->id == $answere['answere_id']) {
                $correct += 1;
            } else {
                $wrong += 1;
            }
        }

        $view = view('result', ['data' => ['correct' => $correct, 'wrong' => $wrong]])->render();
        return response($view);
        
    }
}
