<?php

function activeUrl($routeName){

    if(is_array($routeName)){
        return in_array(request()->route()->getName(), $routeName);
    }

    return request()->routeIs($routeName);
}