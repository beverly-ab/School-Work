
<?php
for ($i = 1; $i <= 100; $i++)
{
    if ($i % 15 == 0)
        echo "By 3 and 5\n";
     
    else if ($i % 3 == 0)
        echo "By 3\n";            
    else if ($i % 5 == 0)                
        echo "By 5\n";            
     else   
        echo "$i\n" ;            
}
 
?>
