<?php
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/04/18
 * Time: 4:30
 */

namespace Chatbox\PostalCode\Http\Controllers;


class CodeController extends ControllerRest{
    /**
     * @param \Chatbox\Rumic\Http\Controllers\ControllerCollection $cc
     * @return \Chatbox\Rumic\Http\Controllers\ControllerCollection
     */
    public function connect(\Chatbox\Rumic\Http\Controllers\ControllerCollection $cc)
    {
        $cc->get("{code}",[$this,"getCode"]);
        return $cc;
    }

    public function getCode($code){
        $result = \Chatbox\PostalCode\Eloquent\RawData::getByCode($code);


        return $this->responseOk([
            "addressList" => $result
        ]);
    }

}