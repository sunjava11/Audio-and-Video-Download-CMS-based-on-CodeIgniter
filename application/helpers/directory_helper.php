<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include APPPATH . 'third_party/getid3/getid3.php';   

function ListUserUploadedFiles($type)
{
    if($type="mp3")
    {
        $getID3 = new getID3;
        print_r(scandir("uploads/mp3/"));
        
    }
}