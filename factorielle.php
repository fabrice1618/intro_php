<?php
/*
factorielle(1) = 1
factorielle(2) = 1 * 2 = 2 * factorielle(1)
factorielle(3) = 1 * 2 * 3 = 3 * factorielle(2)
factorielle(4) = 1 * 2 * 3 * 4 = 4 * factorielle(3)
factorielle(5) = 1 * 2 * 3 * 4 * 5 = 5 * factorielle(4)
*/

// Algorithme récursif

echo "factorielle de 5 = " . factorielle(5) . PHP_EOL;

function factorielle($n)
{
  if ($n==1)
    return(1);

  return( $n * factorielle($n-1) );
}
