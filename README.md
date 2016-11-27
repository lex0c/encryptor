Data Encryption
============

[![Build Status](https://travis-ci.org/dwyl/esta.svg?branch=master)](https://twitter.com/leobcastro94)
[![codecov.io Code Coverage](https://img.shields.io/codecov/c/github/dwyl/hapi-auth-jwt2.svg?maxAge=2592000)](https://github.com/lleocastro/encryptor/tree/master/tests)
[![contributions welcome](https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat)](https://github.com/lleocastro/encryptor/issues)

> "Module developed for my framework "[Genniuz](https://github.com/lleocastro/genniuz-framework)", 
but works perfectly independent of the framework.

## Installation

> It's recommended that you use Composer to install Encryptor.

```bash
composer require lleocastro/encryptor
```
<hr>

## This suite contains three types of data encryption!

Click on any link to go a method-specific documentation.

- [Hash Generator](https://github.com/lleocastro/encryptor/blob/master/Docs/HashGenerator.md)

- [SMCrypter]()

- [Disguise]()

### 1. Hash Generator

> 107 bits hash for passwords encryption and things that do 
not need to have their values retrieved later, only their hash for comparison

```php
//Construct the HashGenerator
$hash = new HashGenerator();

//Data input
$data = "Hello World!";

//Data Encrypted
$encryptedData = $hash->encode($data);
//Output: "kFMZV3TGpVTWpnVIZFMs9GTqZldOtGZzZlbGt2VsRWWX1WNO5kbohlSEpEaKRUQ0oUR1UkVUJlTSd0c6RlbwpUTVVTVaNDcQZVMrhHVpVzT";

//Hashs comparables
$check = $hash->isEquals("Hello World!", $encryptedData);
//Output: true;

```

### 2. Simple Message Encrypter

> Encrypt messages with a symmetric key using a simple crazy calculation and a bit of obscurity. Tested only with small messages..

```php
//Construct the SMCrypter
$smCrypt = new SMCrypter();

//Data input
$originalValue = "My EMAIL is 'leonardo_carvalho@outlook.com' and (10+5/2*7=0999) <><because yes. çÇ>";

//Generate symmetric key
$key = $smCrypt->keyGenerator();
//Output: VE4zWXpOPT1RTjBr

//Encrypted
$encoded = $smCrypt->encode($key, $originalValue);
/** 
 * Output: 591047765 928789345 268658075 253306185 529640205 591047765 498936425 560343985 583371820 268658075 253306185
 * 805974225 882733675 268658075 253306185 299361855 829002060 775270445 852029895 844353950 744566665 875057730 767594500
 * 852029895 729214775 759918555 744566665 875057730 905761510 744566665 829002060 798298280 852029895 491260480 852029895
 * 898085565 890409620 829002060 852029895 852029895 821326115 353093470 759918555 852029895 836678005 299361855 268658075
 * 253306185 744566665 844353950 767594500 268658075 253306185 307037800 376121305 368445360 330065635 406825085 360769415
 * 383797250 322389690 422176975 468232645 368445360 437528865 437528865 437528865 314713745 268658075 253306185 291685910
 * 829002060 890409620 452880755 291685910 790622335 890409620 452880755 291685910 829002060 890409620 452880755 752242610
 * 775270445 759918555 744566665 898085565 882733675 775270445 268658075 253306185 928789345 775270445 882733675 353093470
 * 268658075 253306185 291685910 759918555 759918555 775270445 767594500 805974225 829002060 452880755 291685910 514288315
 * 759918555 775270445 767594500 805974225 829002060 452880755 291685910 790622335 890409620 452880755
 */

//Decrypted
$decoded = $smCrypt->decode($key, $encoded);
//Output: "My EMAIL is 'leonardo_carvalho@outlook.com' and (10+5/2*7=0999) <><because yes. çÇ>";

```
### 3. Disguise

> Encrypts and decrypts texts in base64 with some trick and manipulation for strings make a encryption obscure and simple

```php
//Construct the Disguise
$disguise = new Disguise();

//Data input
$data = "This is a Rock ´N Roll..";

//Data Encrypted
$encrypt = $disguise->obscure($data);
//Output: "Mll2SkZJaEJ5Y3BCeWNwaEdWPT1nTHV3R2J2SkZJT1Jyd2dz";

//Decrypted
$decrypt = $disguise->illumin($encrypt);
//Output: "This is a Rock ´N Roll..";

```
<hr>

## Learn More

> This readme is just a preview, for more information access the readme of each method.. 

- [Hash Generator](https://github.com/lleocastro/encryptor/blob/master/Docs/HashGenerator.md)
- [SMCrypter]()
- [Disguise]()


#### Security

> This code is secure counter cross-site scripting (XSS).

If you discover security related issues, please email leonardo_carvalho@outlook.com instead of using the issue tracker.


#### To contributions 

Please, see [doc for contribute](https://github.com/lleocastro/encryptor/blob/master/CONTRIBUTE.md). Thanks!


#### License

The Encryptor is licensed under the MIT license. See [License File](https://github.com/lleocastro/encryptor/blob/master/LICENSE) for more information.
