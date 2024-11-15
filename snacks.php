<?php
// Vowel Count
function getCount($str) {
  $counter = 0;
  $vowels = ['a', 'e', 'i', 'o', 'u'];

  
  foreach($vowels as $vowel) {
    $counter += substr_count($str, $vowel);
  }
  
  
  return $counter;
}

// Moving Zeros To The End

function moveZeros(array $items): array
{
  $newArray = [];
  $zeros = 0;
  
  foreach($items as  $item){
    if(is_numeric($item) && floatval($item) == 0){
      $zeros++;
    } else {
      $newArray[] = $item;
    }
  }
  
  for($i = 0; $i < $zeros; $i++) {
    $newArray[] = 0; 
  }
  
  return $newArray;  
}

// Stop gninnipS My sdroW!

function spinWords(string $str): string {
    //divido l'array in singole parole
    $words = explode(" ", $str);
    
      //per ogni parola
      foreach ($words as &$word) { 
        if(strlen($word) >= 5) {
         $word = strrev($word);
        }
      }
    
      return implode(' ', $words);
}

// Reversed sequence 
  
function reverseSeq (int $n): array {
  
  $array = [];
  
  for($i = $n; $i >= 1; $i--){
    array_push($array, $i);
  }
  
  return $array;
};