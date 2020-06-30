<?php

namespace App\Http\Controllers\Front {

    use Illuminate\Http\Request;

    class Secondcontroller extends Request
    {
        public function _construct()
        {
            $this ->middleware('auth')-> except('showString2');
        }

        public function showString(){
            return 'static string';
        }
        public function showString1(){
            return 'static string1';
        }
        public function showString2(){
            return 'static string2';
        }
    }
}
