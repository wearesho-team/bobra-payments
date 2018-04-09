# Bobra Payments
[![Latest Stable Version](https://poser.pugx.org/wearesho-team/bobra-payments/v/stable.png)](https://packagist.org/packages/wearesho-team/bobra-payments)
[![Total Downloads](https://poser.pugx.org/wearesho-team/bobra-payments/downloads.png)](https://packagist.org/packages/wearesho-team/bobra-payments)
[![Build Status](https://travis-ci.org/wearesho-team/bobra-payments.svg?branch=master)](https://travis-ci.org/wearesho-team/bobra-payments)
[![codecov](https://codecov.io/gh/wearesho-team/bobra-payments/branch/master/graph/badge.svg)](https://codecov.io/gh/wearesho-team/bobra-payments)

This repository only contains interfaces for processing payments.
Implementation of this interfaces is available in other repositories.

## Contents
- [ClientInterface](./src/ClientInterface.php) - payment initializer
- [PaymentInterface](./src/PaymentInterface.php) - result of initializing payment using transaction
- [TransactionInterface](./src/TransactionInterface.php) - payment transaction to initialize payment
- [UrlPairInterface](./src/UrlPairInterface.php) - also available [implementation](./src/UrlPair.php)

## License
MIT  
[Wearesho Team](https://wearesho.com)
