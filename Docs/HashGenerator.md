## PHP Encrypter

Generates an encrypted hash of 107 byte for max security of data

```php
//Construct the Encrypter.
$encryption = new HashGenerator("2a", "MTc2MzMxNDQ4NTdmZDg4Yz", "8");

//or, not args. Use default settings.
$encryption = new HashGenerator();

//Generate hash
$hash = $encryption->generate("Hello World!");
//Output "UYFSOVDTqZVNjxmUHNVbrVzUVFDeSV0d1N1aGN1THhTdWRkUyElakRnSEpEaKRUQ0oURxUFVYhmTSVEb1QFWwJXZVVjNWRlUO10aWNzVVlDW";

//or, use variables.
$data = "Hello World!";
$hash = $encryption->generate($data);
//Output "UYFSOVDTqZVNjxmUHNVbrVzUVFDeSV0d1N1aGN1THhTdWRkUyElakRnSEpEaKRUQ0oURxUFVYhmTSVEb1QFWwJXZVVjNWRlUO10aWNzVVlDW";


```

## Comparable Hashs

Compare if two hashes are equals returning a boolean value

```php
//Data comparable - is hash a "Hello World!"
$hashGenerated = "UYFSOVDTqZVNjxmUHNVbrVzUVFDeSV0d1N1aGN1THhTdWRkUyElakRnSEpEaKRUQ0oURxUFVYhmTSVEb1QFWwJXZVVjNWRlUO10aWNzVVlDW";
$dataComparable = "Welcome";

$equals = $encryption->isEquals($dataComparable, $hashGenerated); //Return false, because "Hello World!" !== "Welcome".
$equals = $encryption->isEquals("Hello World!", $hashGenerated); //Return true, because "Hello World!" === "Hello World!".


```

## Exceptions
`InvalidArgumentException` - if arguments not valid.
