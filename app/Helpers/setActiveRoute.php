<?php

if(! function_exists('set_active_link'))
{
     function set_active_route($route)
     {
        return Route::is($route) ? 'active' : '';
     } 
}
?>