## How to install
```
composer require mage2pro/twitter-timeline:*
bin/magento setup:upgrade
rm -rf pub/static/* && bin/magento setup:static-content:deploy
rm -rf var/di var/generation && bin/magento setup:di:compile
```

## Support
- [Documentation](https://mage2.pro/t/174)
- [Ask a question](https://mage2.pro/c/ask)
- [Report an issue](https://github.com/mage2pro/twitter-timeline/issues)

