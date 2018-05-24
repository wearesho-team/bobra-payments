# Bobra Payments
[![Latest Stable Version](https://poser.pugx.org/wearesho-team/bobra-payments/v/stable.png)](https://packagist.org/packages/wearesho-team/bobra-payments)
[![Total Downloads](https://poser.pugx.org/wearesho-team/bobra-payments/downloads.png)](https://packagist.org/packages/wearesho-team/bobra-payments)
[![Build Status](https://travis-ci.org/wearesho-team/bobra-payments.svg?branch=master)](https://travis-ci.org/wearesho-team/bobra-payments)
[![codecov](https://codecov.io/gh/wearesho-team/bobra-payments/branch/master/graph/badge.svg)](https://codecov.io/gh/wearesho-team/bobra-payments)

This repository contains interfaces for processing payments.  
Implementation of this interfaces is available in other repositories.

[Change log](./CHANGELOG.md)

## Contents
- [ClientInterface](./src/ClientInterface.php) - payment initializer.
- [PaymentInterface](./src/PaymentInterface.php) - result of initializing payment using transaction.
[Trait](./src/PaymentTrait.php)
- [TransactionInterface](./src/TransactionInterface.php) - payment transaction to initialize payment.
[Implementation](./src/Transaction.php)
- [UrlPairInterface](./src/UrlPairInterface.php) - URL pairs for user redirect after payment. 
[Implementation](./src/UrlPair.php)
- [TransactionCollection](./src/TransactionCollection.php) - \ArrayObject with TransactionInterface type checking
- [HasLanguage](./src/HasLanguage.php) - interface, should be used as *TransactionInterface* extension.
*ServiceInterface* implementation should check if transaction implement this interface and use language
from it instead of global configuration.
- [LanguageTrait](./src/LanguageTrait.php) - *HasLanguage* implementation
- [LanguageTransaction](./src/LanguageTransaction.php) - class extends *Transaction* and implements *HasLanguage*
interface using *LanguageTrait*

## License
MIT  
[Wearesho Team](https://wearesho.com)
