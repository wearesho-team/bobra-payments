Bobra Payment Change Log
==========================
[Upgrade instructions](./UPGRADE.md)

1.2.0 April 14, 2018
--------------------

- Rename Transaction::_setNumeric to Transaction::setNumeric to match PSR-2
- Add [TransactionCollection](./src/TransactionCollection.php) with
[TransactionInterface](./src/TransactionInterface.php) type checking
- Add PaymentTrait [test](./tests/PaymentTraitTest.php)
- Move PHPUnit to dev dependencies
