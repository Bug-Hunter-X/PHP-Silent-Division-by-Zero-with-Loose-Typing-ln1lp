function foo(int $a, int $b): int {
  return $a + $b;
}

function bar(int $a, int $b): float {
  if ($b == 0) {
    return INF; // Or throw an exception: throw new DivisionByZeroError('Cannot divide by zero');
  }
  return $a / $b;
}

// Correct usage
echo foo(10, 20);
echo bar(10, 0); //Returns INF or throws exception