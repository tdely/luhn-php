<?php

/**
 * Luhn algorithm
 */
class Luhn
{
    /**
     * Main algorithm.
     *
     * @param int|string $number
     * @return int
     */
    private static function algorithm($number)
    {
        $sum = 0;
        settype($number, 'string');
        for ($i = strlen($number) - 1; $i >= 0; $i--) {
            if ($i % 2 == 0) {
                $product = $number[$i] * 2;
                if ($product > 9) {
                    $product = array_sum(str_split($product));
                }
            } else {
                $product = $number[$i];
            }
            $sum += $product;
        }
        return $sum;
    }

    /**
     * Compute Luhn checksum digit.
     *
     * @param int|string $number
     * @return int
     */
    public static function luhnChecksum($number)
    {
        return ((self::algorithm($number) * 9) % 10);
    }

    /**
     * Validate number with a Luhn checksum digit.
     *
     * @param int|string $number
     * @return bool
     */
    public static function isValidLuhn($number)
    {
        return (self::algorithm($number) % 10) === 0 ? true : false;
    }
}
