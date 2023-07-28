<?php
namespace App\Traits;
 
trait DateTrait {
    public function date_Format($val)
    {
        return date("y-m-d h:i:s",strtotime($val));
    }
}
