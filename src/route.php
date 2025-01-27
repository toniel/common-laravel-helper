<?php

function activeUrl($routeName){

    if(is_array($routeName)){
        // return in_array(request()->route()->getName(), $routeName);
        return collect($routeName)->filter(fn($name) => request()->routeIs($name))->isNotEmpty();
    }

    return request()->routeIs($routeName);
}