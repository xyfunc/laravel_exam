<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/3
 * Time: 14:17
 */

namespace XYfunc\LaravelExam\Controllers;


use Illuminate\Http\Request;

class ExamController extends BaseController
{

    public function getQuestion(Request $request)
    {
        $book_id = $request->input('book_id');
        $questions = $this->exam_app->question->getExamQuestionByBookId($book_id);
        return [
            'questions' => $questions,
        ];
    }

}