<?php
    namespace App\Libs;
    
    use Image;
    use Auth;
    
    class Imag{
        public function __construct()
        {
            
        }
        public function url($path=null, $dirictory=null, $name=null)
        {
            if($path!=null)
            {
                if($dirictory != null)
                {
                    $dir=public_path().'/'.$dirictory.'/';
                }
                else
                {
                    $dir=public_path().'/uploads/';
                }
                if($name!=null)
                {
                     $filename=$name;
                }
                else
                {
                    $filename=time().'.jpg';
                }
                $img= Image::make($path);
                $img->save($dir.$filename);
                $img->resize(300, null, function ($constraint)
                {
                    $constraint->aspectRatio();
                });
                $img->save($dir.'s_'.$filename);
                return $filename;
            }
            else
            {
                return false;
            }
        }
    }
