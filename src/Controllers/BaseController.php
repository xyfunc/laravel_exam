<?php
/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 22:27
 */

namespace XYfunc\LaravelExam\Controllers;


use Illuminate\Routing\Controller;
use XYfunc\LaravelExam\Application as ExamApplication;

class BaseController extends Controller
{

    /**
     * @var ExamApplication
     */
    public $exam_app;

    public function __construct( ExamApplication $application)
    {
        $this->exam_app = $application;
    }

    public function test()
    {
//        return [ "msg" => $this->exam_app->util->toString() ];
        return view('exam::html.index');
    }
}