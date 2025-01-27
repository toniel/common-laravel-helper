<?php

function activeUrl($routeName){

    if(is_array($routeName)){

        foreach($routeName as $route){
            if(request()->routeIs($route)){
                return true;
            }
        }
    }

    return request()->routeIs($routeName);
}