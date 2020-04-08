<?php
function optimage($link_image)
{
   $content   = file_get_contents($link_image);
   $base_64   = base64_encode($content);
   $src       = 'data:' . $link_image . ';base64,' . $base_64;

   return $src;
}
