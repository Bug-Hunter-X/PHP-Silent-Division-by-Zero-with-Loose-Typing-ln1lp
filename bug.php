function foo(int $a, int $b): int {
  return $a + $b;
}

function bar(int $a, int $b): float {
  return $a / $b;
}

// Incorrect usage
echo foo(10, 20);
echo bar(10, 0); //Division by zero