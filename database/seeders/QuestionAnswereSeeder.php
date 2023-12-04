<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Question;
use App\Models\Answere;

class QuestionAnswereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $question1 = Question::insertGetId([
            'question' => 'PHP stands for?', 
            'created_at' => date('Y-m-d H:i:s')
        ]);    
        Answere::insert([
            [
                'answere' => 'Hypertext Preprocessor',
                'question_id' => $question1,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => 'Pretext Hypertext Preprocessor',
                'question_id' => $question1,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => 'Personal Home Processor',
                'question_id' => $question1,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => 'None of the above',
                'question_id' => $question1,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);

        $question2 = Question::insertGetId([
            'question' => 'Who is known as the father of PHP?', 
            'created_at' => date('Y-m-d H:i:s')
        ]);    
        Answere::insert([
            [
                'answere' => 'Drek Kolkevi',
                'question_id' => $question2,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => 'List Barely',
                'question_id' => $question2,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => 'Rasmus Lerdrof',
                'question_id' => $question2,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => 'None of the above',
                'question_id' => $question2,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);

        $question3 = Question::insertGetId([
            'question' => 'Variable name in PHP starts with?', 
            'created_at' => date('Y-m-d H:i:s')
        ]);    
        Answere::insert([
            [
                'answere' => '! (Exclamation)',
                'question_id' => $question3,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => '$ (Dollar)',
                'question_id' => $question3,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => '& (Ampersand)',
                'question_id' => $question3,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => '# (Hash)',
                'question_id' => $question3,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);

        $question4 = Question::insertGetId([
            'question' => 'Which of the following is the default file extension of PHP?', 
            'created_at' => date('Y-m-d H:i:s')
        ]);    
        Answere::insert([
            [
                'answere' => '.php',
                'question_id' => $question4,
                'status' => 1,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => '.hphp',
                'question_id' => $question4,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => '.xml',
                'question_id' => $question4,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'answere' => '.html',
                'question_id' => $question4,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
