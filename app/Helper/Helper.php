<?php


namespace App\Helper;


class Helper
{
    public static function uploadFile($fileObject,$directory)
    {
        $fileName = time().rand(10,1000).getClientOriginalName();
        $fileDirectory = 'admin/assets/images/upload-images'.$directory.'/';
        $fileObject->move($fileDirectory,$fileName);
        $fileUrl = $fileDirectory.$fileName;
        return $fileUrl;


    }

}
