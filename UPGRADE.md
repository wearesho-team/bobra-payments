Upgrading Instructions for Bobra Payment
========================================
This file contains list of BC that can break your application when you upgrade.

Update from 1.1.0
-----------------
- Rename usages of *_setNumeric* to *setNumeric* in [Transaction](./src/Transaction.php)
if you extend it
