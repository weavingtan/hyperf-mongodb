<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/10/24
 * Time: 14:36
 */

namespace Hyperf\Mongodb\Traits;


use MongoDB\BSON\ObjectId;

trait Attributes {


    public function fromInt($data){
        if (!is_array($data)){
            $data = (int)$data;
        }else{
            foreach ($data as &$value){
                $value = (int)$value;
            }
        }
        return $data;
    }

    public function fromIdObj($data){
        if (!is_array($data)){
            $data = new ObjectId($data);
        }else{
            foreach ($data as &$value){
                $data = new ObjectId($value);
            }
        }
        return $data;
    }

    public function fromString($data){
        if (!is_array($data)){
            $data = (string)$data;
        }else{
            foreach ($data as &$value){
                $data = (string)$data;
            }
        }
        return $data;
    }

    public function fromBool($data){
        if (!is_array($data)){
            $data = (boolean)$data;
        }else{
            foreach ($data as &$value){
                $data = (boolean)$data;
            }
        }
        return $data;
    }


}