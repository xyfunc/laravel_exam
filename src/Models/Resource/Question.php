<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/3
 * Time: 10:46
 */

namespace XYfunc\LaravelExam\Models\Resource;


class Question extends BaseModel
{
    protected $table = 'resource.questions';

    public function book()
    {
        return $this->belongsTo('XYfunc\LaravelExam\Models\Resource\Book', 'book_id');
    }

}