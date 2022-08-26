<p align="center">
  <a href="https://github.com/brandon14/ebay-sdk-php/actions/workflows/run-tests.yml"><img src="https://img.shields.io/github/workflow/status/brandon14/ebay-sdk-php/run-tests?style=flat-square&maxAge=36000" alt="Build Status"></a>
  <a href="https://codeclimate.com/github/brandon14/ebay-sdk-php/maintainability"><img src="https://img.shields.io/codeclimate/maintainability/brandon14/ebay-sdk-php.svg?style=flat-square" alt="Code Climate Maintainability"></a>
  <a href="https://codecov.io/gh/brandon14/ebay-sdk-php"><img src="https://img.shields.io/codecov/c/github/brandon14/ebay-sdk-php.svg?style=flat-square" alt="CodeCov"></a>
  <a href="https://github.com/brandon14/ebay-sdk-php/blob/master/LICENSE"><img src="https://img.shields.io/github/license/brandon14/ebay-sdk-php.svg?style=flat-square" alt="License"></a>
</p>
<p align="center">
  <a href="https://github.com/brandon14/ebay-sdk-php/issues"><img src="https://img.shields.io/github/issues/brandon14/ebay-sdk-php.svg?style=flat-square" alt="Issues"></a>
  <a href="https://github.com/brandon14/ebay-sdk-php/issues?q=is%3Aissue+is%3Aclosed"><img src="https://img.shields.io/github/issues-closed/brandon14/ebay-sdk-php.svg?style=flat-square" alt="Issues Closed"></a>
  <a href="https://github.com/brandon14/ebay-sdk-php/pulls"><img src="https://img.shields.io/github/issues-pr/brandon14/ebay-sdk-php.svg?style=flat-square" alt="Pull Requests"></a>
  <a href="https://github.com/brandon14/ebay-sdk-php/pulls?q=is%3Apr+is%3Aclosed"><img src="https://img.shields.io/github/issues-pr-closed/brandon14/ebay-sdk-php.svg?style=flat-square" alt="Pull Requests Closed"></a>
</p>

# brandon14/ebay-sdk-php

**NOTE:** This library has not been fully tested, and should not be considered stable or suitable for production
environments.

## Table Of Contents

1. [Requirements](https://github.com/brandon14/ebay-sdk-php#requirements)
2. [Purpose](https://github.com/brandon14/ebay-sdk-php#purpose)
3. [Installation](https://github.com/brandon14/ebay-sdk-php#installation)
4. [Standards](https://github.com/brandon14/ebay-sdk-php#standards)
5. [Coverage](https://github.com/brandon14/ebay-sdk-php#coverage)
6. [Documentation](https://github.com/brandon14/ebay-sdk-php#documentation)
7. [Contributing](https://github.com/brandon14/ebay-sdk-php#contributing)
8. [Versioning](https://github.com/brandon14/ebay-sdk-php#versioning)
9. [Security Vulnerabilities](https://github.com/brandon14/ebay-sdk-php#security-vulnerabilities)

## Requirements

| Tech                                 | Version                |
|--------------------------------------|------------------------|
| [PHP](https://secure.php.net/)       | ^7.2 &#124;&#124; ^8.0 |
| [Composer](https://getcomposer.org/) | *                      |

| PHP Extension | Version |
|---------------|---------|
| ext-curl      | *       |
| ext-json      | *       |
| ext-mbstring  | *       |

| Composer Packages                                                     | Version                    |
|-----------------------------------------------------------------------|----------------------------|
| [guzzlehttp/guzzle](https://packagist.org/packages/guzzlehttp/guzzle) | ^6.5.8 &#124;&#124; ^7.4.5 |
| [guzzlehttp/psr7](https://packagist.org/packages/guzzlehttp/psr7)     | ^2.0                       |


## Purpose

A single package containing a PHP SDK to access all of Ebay's OpenAPI spec endpoints found
[here](https://developer.ebay.com/docs). It only covers the RESTful APIs that have OpenAPI specifications available.

To view the OpenAPI files these packages were generated from, please browse the `api-specs` directory.

## Installation

You can install the entire bundle of Ebay libraries via:

```bash
composer require brandon14/ebay-sdk-php
```

_NOTE: This is not implemented yet, and will be available in an upcoming release once we get the subtree splitting
set up._

If you wish to install individual API libraries, you can via the following (this would for example install the
`Buy/Browser/V1` library):

```bash
composer require brandon14/ebay-buy-browse-v1

# More generic:
# composer require brandon14/ebay-<general-api>-<api>-<version>
```

## Standards

We strive to meet the [PSR-12](https://www.php-fig.org/psr/psr-12/) coding style for PHP projects, and enforce our
coding standard via the [php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) linting tool. Our ruleset can be
found in the `.php-cs-fixer.dist.php` file.

## Coverage

The latest code coverage information can be found via [Codecov](https://codecov.io/gh/brandon14/ebay-sdk-php). We
strive to maintain 100% coverage across the entire Ebay API, so if you are
[contributing](https://github.com/brandon14/ebay-sdk-php#contributing), please make sure to include tests for new
code added.

## Documentation

Documentation to this project can be found [here](https://brandon14.github.io/ebay-sdk-php/).

## Contributing

Got something you want to add? Found a bug or otherwise bad code? Feel free to submit pull
requests to add in new features, fix bugs, or clean things up. Just be sure to follow the
[Code of Conduct](https://github.com/brandon14/ebay-sdk-php/blob/master/.github/CODE_OF_CONDUCT.md)
and [Contributing Guide](https://github.com/brandon14/ebay-sdk-php/blob/master/.github/CONTRIBUTING.md),
and we encourage creating clean and well described pull requests if possible.

If you notice an issues with the library or want to suggest new features, feel free to create issues appropriately using
the [issue tracker](https://github.com/brandon14/ebay-sdk-php/issues).

## Versioning

php-licenses-generator uses [semantic versioning](https://semver.org/) that looks like `MAJOR.MINOR.PATCH`.

Major version changes will include backwards-incompatible changes and may require refactoring of projects using it.
Minor version changes will include backwards-compatible new features and changes and will not break existing usages.
Patch version changes will include backwards-compatible bug and security fixes, and should be updated as soon as
possible.

## Security Vulnerabilities

If you discover a vulnerability within this package, please email Brandon Clothier via
[brclothier@trollandtoad.com](mailto:brclothier@trollandtoad.com). All security vulnerabilities will be promptly
addressed.

---

This code is released under the MIT license.

Copyright &copy; 2022 Brandon Clothier

---

## Contributors

![GitHub Contributors Image](https://contrib.rocks/image?repo=brandon14/ebay-sdk-php)

---

## 😂 Here is a random joke that'll make you laugh!

![Jokes Card](https://readme-jokes.vercel.app/api)
