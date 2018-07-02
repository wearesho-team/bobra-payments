Upgrading Instructions for Bobra Payment
========================================
This file contains list of BC that can break your application when you upgrade.

Upgrade to 1.5.0
----------------
- Implement [Credit](./src/Credit) interfaces

Upgrade to 1.4.0
----------------
- *ServiceInterface* should check if transaction implements [HasLanguage](./src/HasLanguage.php)
interface and use language from *getLanguage* method instead of own configuration.

Update to 1.2.0
-----------------
- Rename usages of *_setNumeric* to *setNumeric* in [Transaction](./src/Transaction.php)
if you extend it
