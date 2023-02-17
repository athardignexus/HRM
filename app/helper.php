<?php

use App\Models\Country;
use App\Models\Developer;
use App\Models\Feature;
use App\Models\Headermenu;
use App\Models\Property;
use App\Models\Property_type;
use App\Models\Region;
use App\Models\State;
use Illuminate\Support\Facades\DB;
use llluminate\Support\Facades\Auth;

function test()
{
    return "ali";
}
function role($login_user_type)
{
    $array=[0=>'', 1=>"Natinal Head",2=>"CEO",3=>"ZM",4=>"BDM",5=>"SM",6=>"SP",7=>"TC"];
    foreach($array as $key=>$val)
    {
        if($key > $login_user_type )
       echo "<option value='$key'>$val</option>";
    }
}
