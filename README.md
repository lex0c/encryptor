Data Encryption
============

[![Build Status](https://travis-ci.org/dwyl/esta.svg?branch=master)](https://twitter.com/leobcastro94)
[![codecov.io Code Coverage](https://img.shields.io/codecov/c/github/dwyl/hapi-auth-jwt2.svg?maxAge=2592000)](https://github.com/lleocastro/encryptor/tree/master/tests)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/lleocastro/encryptor/issues)

> "Module developed for my framework "[Genniuz](https://github.com/lleocastro/genniuz-framework)", 
but works perfectly independent of the framework.

##This suite contains three types of data encryption!
Click on any link to go a method-specific documentation.

- [Hash Generator]():

> 107-bit hash for passwords encryption and things that do 
not need to have their values retrieved later, only their hash for comparison

```php
//Construct the HashGenerator
$hash = new HashGenerator();

//Data input
$data = "Hello World!";

//Data Encrypted
$encryptedData = $hash->encode($data);
//Output
string(107) "kFMZV3TGpVTWpnVIZFMs9GTqZldOtGZzZlbGt2VsRWWX1WNO5kbohlSEpEaKRUQ0oUR1UkVUJlTSd0c6RlbwpUTVVTVaNDcQZVMrhHVpVzT"

//Hashs comparables
$check = $hash->isEquals("Hello World!", $encryptedData);
//Output
bool(true)

```

- [SMCrypter]()
- [Disguise]()
