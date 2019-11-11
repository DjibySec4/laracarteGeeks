<?php

if(! function_exists('set_active_link'))
{
     function set_active_link($route)
     {
        return Route::is($route) ? 'active' : '';
     }
}
?>