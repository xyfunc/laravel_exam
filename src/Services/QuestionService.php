<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/3
 * Time: 15:04
 */

namespace XYfunc\LaravelExam\Services;

use XYfunc\LaravelExam\Models\Resource\Book;
use XYfunc\LaravelExam\Models\Resource\Question;

class QuestionService
{

    public function getExamQuestionByBookId( $book_id)
    {
        $book = Book::find($book_id);
        if( $book ){
            return $book->examquestions;
        }else{
            return null;
        }
    }

}