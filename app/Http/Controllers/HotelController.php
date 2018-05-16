<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HotelController extends Controller
{

    //in function data() Using Curl method to retrieve all data from url

    public function data()
    {

        $ch=curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.myjson.com/bins/pq0f6');
        $result=curl_exec($ch);
        curl_close($ch);
        $arr=json_decode($result,true);    
        return $arr;
        
    }

    /*
    this function return searching by name and sorting values by name OR price 
    */

    public function SearchName($name,$sort)
    {
     
        $array=$this->data();
        $arr1=array();

        if(isset($sort) && $sort=="price")
        usort($array['hotels'], function($a, $b) 
        {
             return $a['price']<=>$b['price'];
        });

        elseif(isset($sort) && $sort=="name")
         usort($array['hotels'], function($a, $b) 
        {
             return $a['name']<=>$b['name'];
        });
    
     echo "<pre>";
        foreach ($array["hotels"] as $key) 
        {
        if ($key["name"]==$name)
        {
           echo print_r ($arr1=($key));
        }
       
        }
       
     echo "</pre>";
     echo "Not found ";
     
    }
    

    /*
    this function return searching by minprice & maxprice  and sorting values by name OR price 
    */

    public function SearchPrice($minprice,$maxprice,$sort)
    {

        $array=$this->data();
        $arr1=array();

        if(isset($sort) && $sort=="price")
            usort($array['hotels'], function($a, $b) 
            {
                 return $a['price']<=>$b['price'];
            });

        elseif(isset($sort) && $sort=="name")
             usort($array['hotels'], function($a, $b) 
            {
                 return $a['name']<=>$b['name'];
            });
       
        
     echo "<pre>";
        foreach ($array["hotels"] as $key)
        {
            
        if ($key["price"]>=$minprice && $key["price"]<=$maxprice)
        {
            print_r($arr1=($key));
               
        }
       
        }
    
     echo "</pre>";
     echo "Not found";
    }


     /*
    this function return searching by city and sorting values by name OR price 
    */
    public function SearchCity($city)
    {
     
        $array=$this->data();
        $arr1=array();

        if(isset($sort) && $sort=="price")
        usort($array['hotels'], function($a, $b) 
        {
             return $a['price']<=>$b['price'];
        });

        elseif(isset($sort) && $sort=="name")
        usort($array['hotels'], function($a, $b) 
        {
             return $a['name']<=>$b['name'];
        });


     echo "<pre>";
        foreach ($array["hotels"] as $key) 
        {
        if ($key["city"]==$city) 
        {
           echo print_r ( $arr1=($key));
        }
        }
     echo "</pre>";
     echo "Not found";
    }

    /*
    this function return searching by mindate & maxdate  and sorting values by name OR price 
    */
    
    public function SearchDate($mindate,$maxdate,$sort=null)
    {
    
     $array=$this->data();
     $arr1=array();

        if(isset($sort) && $sort=="price")
        usort($array['hotels'], function($a, $b) 
        {
           return $a['price']<=>$b['price'];
        });

        elseif(isset($sort) && $sort=="name")
        usort($array['hotels'], function($a, $b) 
        {
        return $a['name']<=>$b['name'];
        });


     echo "<pre>";
       
        foreach ($array["hotels"] as $key)
        {
        foreach ($key["availability"] as $date =>$value) 
        {
        if ($value["from"]==$mindate && $value["to"]<=$maxdate)     
        {
            print_r ($arr1=$key);
                   
        }
        }
        }
     echo "</pre>";
     echo "Not found";
    }

   

}
