<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/1
 * Time: 16:48
 */

namespace Angkees\Admin;


class Admin
{

	protected $dateReg1 = '/^\d{4}(\-|\/|\.)\d{1,2}\1\d{1,2}$/';

	protected $dateReg2 = '/^(^(\d{4}|\d{2})(\-|\/|\.)\d{1,2}\3\d{1,2}$)|(^\d{4}年\d{1,2}月\d{1,2}日$)$/';

	protected $emailReg = "/([a-z0-9]*[-_\.]?[a-z0-9]+)*@([a-z0-9]*[-_]?[a-z0-9]+)+[\.][a-z]{2,3}([\.][a-z]{2})?/i";

	protected $phoneReg = '#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#';


    public function printRunning()
    {
        echo 'running';
    }


    public function check(string $pattern , string $subject){
    	if( empty($pattern) || empty($subject)) return false;

    	return preg_match($this->$pattern,$subject)? true : false;
    }





}