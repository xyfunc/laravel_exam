<?php

/**
 * Created by PhpStorm.
 * User: beechen
 * Date: 17/3/2
 * Time: 16:19
 */
namespace XYfunc\LaravelExam\Util;

class HXConvert
{
    /**
     * @param $number integer
     * @param $list
     */
    private static function tenToBitArray( $number, &$list)
    {
        if( $number >= 1){
            array_unshift( $list, $number % 2);
            self::tenToBitArray( $number / 2, $list);
        }else{
            return;
        }
    }

    /**
     * @param $number integer
     * @return string
     */
    public static function tenToBit( $number )
    {
        $list = [];
        self::tenToBitArray( $number, $list);
        return join('', $list);
    }
}