<?php

for ($i = 1; $i <= 100; $i++)
{
   if( ($i % 3 == 0) & ($i % 5 == 0) )
   {
      echo("hot Chocolate<br />");
   }
   elseif ($i % 3 == 0)
   {
      echo("hot<br />");
   } 
   elseif ($i % 5 == 0)
   {
      echo("Chocolate<br />");
   } 
   else
   {
      echo($i . "<br />");
   } 
}
?>
