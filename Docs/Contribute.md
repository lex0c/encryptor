# How to Contribute
=====================

##Pull Requests

1. Make fork the repository
2. Create a new branch for each feature or improvement
3. Send a pull request from each feature branch to the "development" branch

> It is very important to separate new features or improvements into separate feature branches, and to send a
pull request for each branch. This allows me to review and pull in new features or improvements individually.

##### Follow the default of git flow [features, releases, hotfixes, bug fixes, support]

## Style Guide

> All pull requests must adhere to the [my style guide for PHP](https://github.com/lleocastro/styles-guide/blob/master/php/README.md).

```php
<?php namespace Package\Subpackage;

/*
 ===========================================================================
 = Preview About Class content
 ===========================================================================
 =
 = Brief description about functionality of class...
 = 
 */

use \Package\Subpackage\Something;
use \Package\Subpackage\IOtherSomethting;
use \RuntimeException;

/**
 * PHPDoc
 * 
 * 
 * 
 * 
 */
 
 //Names in UpperCamelCase
class ClassName extends Something implements IOtherSomethting
{
    //Names in LowerCamelCase and initialize hever all variables
    protected $variable = '';
    private $arrExample = [];
    public $status = false;
    
    //...
    
}

```

## Unit Testing

> All pull requests must be accompanied by passing unit tests and complete code coverage. The Slim Framework uses phpunit for testing.

[Learn about PHPUnit](https://github.com/sebastianbergmann/phpunit/)


## Security

> If you discover security related issues, please email leonardo_carvalho@outlook.com instead of using the issue tracker.
