<?php

function activeUrl($routeName){
    return request()->routeIs($routeName) ? 'active' : '';
}