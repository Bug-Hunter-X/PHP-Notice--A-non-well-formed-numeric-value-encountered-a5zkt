# PHP Type Juggling Bug
This example demonstrates a common error in PHP related to type juggling. The `calculate_sum` function attempts to add numbers in an array; however, the presence of a non-numeric string ('4a' in this case) leads to a `PHP Notice: A non well formed numeric value encountered` and an incorrect sum.

The solution involves implementing robust type checking before performing arithmetic operations to prevent such errors and ensure the function works correctly with various data types.