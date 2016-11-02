# PHP Luhn Algorithm

## Methods

### Luhn::luhnChecksum

Compute Luhn checksum digit

```php
public int Luhn::luhnChecksum( int|string $number )
```

### Luhn::isValidLuhn

Validate number with a Luhn checksum digit.

```php
public bool Luhn::isValidLuhn( int|string $number )
```

### Luhn::algorithm

Main algorithm.

```php
private int Luhn::algorithm( int|string $number )
```
