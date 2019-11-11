<?php

   if(! function_exists('titre_dynamique'))
   {
        function titre_dynamique($titre)
        {
            $titre_de_base = 'Liste of artisans';
            if($titre == '')
            {
                return $titre_de_base;
            }
            else
            {
                return $titre ;
            }
        }
    }
?>