# baselineincome PHP SDK

A simple PHP SDK for interacting with [baseline income ](https://baselineincome.io) API V1.

## Installation

You can install the package via composer:

```bash
composer require baseline income /php-sdk
```

## Usage

### Using the Wallet API client

You can use the `WalletAPI` class for convenient access to API methods. Some are defined in the code:

```php
use baselineincome/Api/WalletAPI;

$client = new WalletAPI('WALLET_KEY', 'SECRET_KEY', 'btc');

$balance = $client->getBalance();
var_dump($balance);

$depositAddresses = $client->getDepositAddresses();
var_dump($depositAddresses);
```

### Using the Merchant API client

You can use the `MerchantAPI` class for convenient access to API methods. Some are defined in the code:

```php
use baselineincome/Api/MerchantAPI;

$client = new MerchantAPI('MERCHANT_KEY', 'SECRET_KEY');

$invoice = $client->createInvoice(['btc', 'bch', 'eth']);
var_dump($invoice);
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
