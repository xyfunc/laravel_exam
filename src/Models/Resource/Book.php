<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/3
 * Time: 10:54
 */

namespace XYfunc\LaravelExam\Models\Resource;


class Book extends BaseModel
{

    protected $table = 'resource.books';

    public function questions()
    {
        return $this->hasMany('XYfunc\LaravelExam\Models\Resource\Question', 'book_id')->orderBy('id', 'desc');
    }

    /**
     * 考试问题
     * @return mixed
     */
    public function examQuestions()
    {
        return $this->hasMany('XYfunc\LaravelExam\Models\Resource\Question', 'book_id')->where([
            'status' => 1,
        ])->orderBy('type');
    }

}