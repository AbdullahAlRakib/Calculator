<?php


namespace App\classes;


class Calc
{
    public function mainCalculation(){
        $obj=(object)$_POST;
        if($_POST['btn']=='+'){
            $ans=$_POST['first_number']+$_POST['second_number'];
        return $ans;
    }
        if($_POST['btn']=='-'){
            $ans=$_POST['first_number']-$_POST['second_number'];
            return $ans;
        }
        if($_POST['btn']=='*'){
            $ans=$_POST['first_number']*$_POST['second_number'];
            return $ans;
        }
        if($_POST['btn']=='/'){
            $ans=$_POST['first_number']/$_POST['second_number'];
            return $ans;
        }
        if($_POST['btn']=='%'){
            $ans=$_POST['first_number']%$_POST['second_number'];
            return $ans;
        }

    }
}