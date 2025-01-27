<?php

function activeUrl($routeName){

    if(is_array($routeName)){
        // return in_array(request()->route()->getName(), $routeName);
        return collect($routeName)->filter(fn($name) =>  app('Str')->is(request()->route()->getName(), $name))->isNotEmpty();
    }

    return request()->routeIs($routeName);
}