# BFolliot\Date
Provides additional functionality for date manipulation in PHP

## BFolliot\Date\DateInterval

```
public string toSpec ()
```
Return the interval specification.

## BFolliot\Date\DateTime

```
public string strftime(string $format)
```

Format according to locale settings.

See http://php.net/manual/en/function.strftime.php

```
public static DateTime DateTime::createFromFormat ( string $format , string $time [, DateTimeZone $timezone ] )
```

Returns new DateTime object formatted according to the specified format. 

See http://php.net/manual/en/datetime.createfromformat.php