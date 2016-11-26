Data Encryption
============

> "Module developed for my framework "[Genniuz](https://github.com/lleocastro/genniuz-framework)", 
but works perfectly independent of the framework.

##This suite contains three types of data encryption!
Click some to go to the method-specific documentation.

- [Hash Generator]():

> 107-bit hash for passwords encryption and things that do 
not need to have their values retrieved later, only their hash for comparison

```php
//Construct the HashGenerator
$hash = new HashGenerator();

//Data input
$data = "Hello World! 1 abcdefghijklmnopq";

//Data Encrypted
$encryptedData = $hash->encode($data);
//Output
string(107) "QlMGRUYtJFNOdkVpNFRKpGVtpkSVtmR2NVMWF1UwoUbVFjVxJlbwRkSEpEaKRUQ0oURxYTUUZ0TlxmV2QVbwJVTwUTVaNDcQZVMaR3VtZVS"

//Hashs comparables
$check = $hash->isEquals("Hello World! 1 abcdefghijklmnopq", $encryptedData);
//Output
bool(true)

```

- [SMCrypter]()
- [Disguise]()
