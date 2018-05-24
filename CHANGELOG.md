Bobra Payment Change Log
==========================
[Upgrade instructions](./UPGRADE.md)

1.4.0 May 24, 2017
------------------
- Add [HasLanguage](./src/HasLanguage.php) interface with 
[trait](./src/LanguageTrait.php) and [class](./src/LanguageTransaction.php) implementations

1.3.0 April 15, 2018
--------------------
- Implement \JsonSerializable by [Transaction](./src/Transaction.php)
and [TransactionCollection](./src/TransactionCollection.php)

1.2.0 April 14, 2018
--------------------

- Rename Transaction::_setNumeric to Transaction::setNumeric to match PSR-2
- Add [TransactionCollection](./src/TransactionCollection.php) with
[TransactionInterface](./src/TransactionInterface.php) type checking
- Add PaymentTrait [test](./tests/PaymentTraitTest.php)
- Move PHPUnit to dev dependencies
