function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    //Check if the number is numeric before adding
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately. 
      //You can choose to ignore them, throw an error, or use a default value. 
      //For this example, we will ignore them
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a', 5.5];
$sum = calculate_sum($numbers);
echo "Sum: " . $sum; //This will produce the correct sum: 11.5