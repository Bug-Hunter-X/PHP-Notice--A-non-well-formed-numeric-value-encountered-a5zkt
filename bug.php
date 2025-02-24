function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a']; //Note the string '4a' in the array
$sum = calculate_sum($numbers);
echo "Sum: " . $sum; //This will produce a warning and unexpected result