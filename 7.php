<?php

declare(strict_types=1);

/**
 * Calculate the sum of $a and $b
 *
 * @throws OverflowException If the result of $a + $b is above the PHP_INT_MAX
 */
function sum(int $a, int $b): int
{
    $result = $a + $b;
    if (!is_int($result)) {
        throw new OverflowException('The result of $a + $b is above the PHP_INT_MAX');
    }

    return $result;
}
