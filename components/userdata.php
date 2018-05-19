<?php
    function getuserProducts($user, $dataType)
    {
        $products = array();        

        if($user == "kristian")
        {
            $handle = $dataType=="home"? fopen("img/home/kristian/data.csv", "r") : fopen("img/srp/kristian/data.csv", "r");
            if($handle)
            {
                while($line = fgets($handle))
                {
                    list($name, $type, $img, $price, $color) = explode(",", $line);
                    $pathAd = $dataType == "home"? "img/home/kristian/ads/" : "img/srp/kristian/ads/normal/";
                    $pathProducts = $dataType == "home"? "img/home/kristian/small/" : "img/srp/kristian/products/";
                    $imgSrc = $type == "ad"? $pathAd.$img : $pathProducts.$img;
                    $products[] = array(
                        "price" => $price,
                        "name" => $name,
                        "type" => $type,
                        "img" => $imgSrc,
                        "color" => $color
                    );
                }                
            }
        }
        elseif($user == "annesofie")
        {
            $handle = $dataType=="home"? fopen("img/home/annesofie/data.csv", "r") : fopen("img/srp/annesofie/data.csv", "r");
            if($handle)
            {
                while($line = fgets($handle))
                {
                    list($name, $type, $img, $price, $color) = explode(",", $line);
                    $pathAd = $dataType == "home"? "img/home/annesofie/ads/" : "img/srp/annesofie/ads/normal/";
                    $pathProducts = $dataType == "home"? "img/home/annesofie/small/" : "img/srp/annesofie/products/";
                    $imgSrc = $type == "ad"? $pathAd.$img : $pathProducts.$img;
                    $products[] = array(
                        "price" => $price,
                        "name" => $name,
                        "type" => $type,
                        "img" => $imgSrc,
                        "color" => $color
                    );
                }                
            }
        }

        return $products;
    }

    function getUserName($user)
    {
        $userName = ""; 
        if($user == "kristian")
        {
            $userName = "Kristian";
        }
        elseif($user == "annesofie")
        {
            $userName = "Anne Sofie";
        }

       return $userName;
    }
    