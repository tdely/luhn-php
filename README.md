# PHP Luhn Algorithm

PHP implementation of the Luhn algorithm. Commonly used in identification
numbers, including IMEI and credit card numbers.

Unlike some implementations this one handles both odd and even number of
digits.

## Example

```php
<?php

// Preferably autoload instead of using require
require 'src/Luhn.php';
use Tdely\Luhn\Luhn;

$original = 82356937851;

// Calculate check digit
var_dump(Luhn::checksum($original));  // int(1)

// Calculate and add check digit to number
$checksum = Luhn::create($original);
var_dump($checksum);                  // string(12) "823569378511"

// Validate numbers
var_dump(Luhn::isValid($original));   // bool(false)
var_dump(Luhn::isValid($checksum));   // bool(true)
```

