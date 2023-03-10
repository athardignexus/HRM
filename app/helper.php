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
function role($login_user_type,$option=0)
{
    $array=[0=>'', 1=>"Natinal Head",2=>"CEO",3=>"ZM",4=>"BDM",5=>"SM",6=>"SP",7=>"TC"];
    if($option==0)
    {

        foreach($array as $key=>$val)
        {
            if($key > $login_user_type )
            echo "<option value='$key'>$val</option>";
        }
    }
    else
    {
        foreach($array as $key=>$val)
        {
            if($login_user_type==$key)
                return $val;
        }
    }
}
function getmonth($opt,$option=0)
{
    $array=[1=>"JAN",2=>"FEB",3=>"MAR",4=>"APR",5=>"MAY",6=>"JUN",7=>"JUL",8=>"AUG",9=>"SEP",10=>"OCT",11=>"NOV",7=>"DEC"];
    if($option==0)
    {

        foreach($array as $key=>$val)
        {
            if($key ==$opt )
                echo "<option value='$key' selected>$val</option>";
             else
             echo "<option value='$key'>$val</option>";
        }
    }
    else
    {
        foreach($array as $key=>$val)
        {
            if($opt==$key)
                return $val;
        }
    }
}
function getYear($year)
{
    $data=Date('Y');
    for($i=$data-2; $i<=$data; $i++ )
    {
        if($year ==$i )
        echo "<option value='$i' selected>$i</option>";
        else
        echo "<option value='$i'>$i</option>";
    }
}

