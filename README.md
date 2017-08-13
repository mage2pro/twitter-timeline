## How to install
```
composer require mage2pro/twitter-timeline:*
bin/magento setup:upgrade
rm -rf pub/static/* && bin/magento setup:static-content:deploy en_US <additional locales, e.g.: de_DE>
rm -rf var/di var/generation generated/code && bin/magento setup:di:compile
```
If you have some problems while executing these commands, then check the [detailed instruction](https://mage2.pro/t/263).

## Support
- [Documentation](https://mage2.pro/t/174)
- [Ask a question](https://mage2.pro/c/ask)
- [Report an issue](https://github.com/mage2pro/twitter-timeline/issues)
