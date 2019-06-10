<?php

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View;

use App\Maintext;

class SiteComposer{
    public function compose(View $view){
        $name = 'glasses';
        $s_objs = Maintext::where('status','')->get();
        //dd($s_objs);
        $view->with('name', $name)->with('s_objs', $s_objs);
    }
}