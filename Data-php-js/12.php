<?
// работает только с английским языком
function longest_palindrome($string)
{
   $length = strlen($string);
   for ($i = floor($length / 2); $i >= 0; $i--) {
      $left = $i;
      $right = $i + floor(($length - 2 * $i) / 2);
      while ($left >= 0 && $right < $length && $string[(int)$left] == $string[(int)$right]) {
         $left--;
         $right++;
      }
      if ($right - $left - 1 > 1) {
         return substr($string, $left + 1, $right - $left - 1);
      }
   }
   return $string[0];
}

$string = "dsdf";
echo longest_palindrome($string);
