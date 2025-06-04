<?php

if(!function_exists('returnAvatar')){
    function returnAvatar($avatar){
        if(str_contains($avatar,'http')){
            return $avatar;
        }
        else{
            return asset('uploaded_data/'.$avatar);
        }
    }
}

if(!function_exists('returnMedia')){
    function returnMedia($mediaFile){
        if(str_contains($mediaFile,'http')){
            return $mediaFile;
        }
        else{
            return asset($mediaFile);
//            return asset('uploaded_data/'.$avatar);
        }
    }
}
