# Mailjet SDK for PHP

[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE.md)
[![PHP 8.4+](https://img.shields.io/badge/PHP-8.4%2B-777bb4.svg)](composer.json)
[![PHPStan level max](https://img.shields.io/badge/PHPStan-level%20max-brightgreen.svg)](phpstan.neon)
[![Packagist](https://img.shields.io/packagist/v/dmorenof/mailjet-sdk.svg)](https://packagist.org/packages/dmorenof/mailjet-sdk)

**Mailjet contacts, lists, campaigns, templates and statistics as typed PHP.**

The Mailjet Email API v3 REST resources (API keys, contacts, contact lists, campaigns, templates, senders, statistics and more) generated from Mailjet's own OpenAPI document.

> Unofficial. Not affiliated with, endorsed by or supported by Mailjet. See [NOTICE.md](NOTICE.md).

## Why this SDK

- 151 operations with typed models and typed collections.
- Basic authentication handled from the API key and secret you configure.
- PHPStan-clean at the maximum level, so a wrong field name is caught before it runs.
- **Generated from the contract, never edited by hand.** `src/` is produced from `contract/mailjet.yaml` by [sdk-generator](https://github.com/dmorenof/sdk-generator) on top of the shared [sdk-runtime](https://github.com/dmorenof/sdk-runtime): when the contract changes you regenerate, you do not patch.
- **Typed end to end.** 151 operations and 459 typed request, answer and model classes. A request is a model whose fields are checked where you assign them (PHP 8.4 property hooks); an answer is a model; a list is a typed collection. PHPStan at the maximum level reports no error on the whole SDK.
- **One way to fail.** An HTTP answer the contract does not declare as success is an `ApiException` that keeps the raw response and, when the API documents it, the decoded error as a model. Network failures keep their own type.
- **Production controls included.** PSR-18 HTTP client (Guzzle by default), timeouts (30 s / 10 s by default), retries with `Retry-After`, redirect policy, middleware and per-environment servers, all in one `Configuration` object.

## Install

PHP 8.4 or later.

```bash
composer require dmorenof/mailjet-sdk
```

## Quick start

```php
<?php
use MailjetSDK\Configuration;
use MailjetSDK\MailjetAPISDK;
use MailjetSDK\V3\REST\Apikey;
use Dmorenof\SdkRuntime\Security\SecurityCredentials;

$configuration = new Configuration();
$configuration->securityCredentials = new SecurityCredentials([
    'basicAuth' => ['username' => getenv('MAILJET_API_KEY') ?: '', 'password' => getenv('MAILJET_SECRET_KEY') ?: ''],
]);
MailjetAPISDK::configure($configuration);

$keys = Apikey::get();

echo json_encode($keys), "\n";
```

The same example is in [examples/quickstart.php](examples/quickstart.php). Every operation is listed in [docs/OPERATIONS.md](docs/OPERATIONS.md).

## What it covers

151 operations. The biggest areas:

| Area | Operations |
| --- | --- |
| `REST` | 149 |
| `send` | 2 |

## Handling errors

```php
use Dmorenof\SdkRuntime\ApiException;

try {
    // ... any call from the quick start
} catch (ApiException $e) {
    echo $e->response->status, "\n";   // the HTTP status
    echo $e->response->body, "\n";     // the raw body, always kept
    var_dump($e->error);                // the decoded error model, when the API documents one
}
```

## Configuration

`Configuration` is the only place to set anything: `baseUrl`, `securityCredentials`, `headers`, `timeout`, `connectTimeout`, `retryPolicy`, `redirectPolicy`, `middleware`, `httpClient` (any PSR-18 client), `serverVariables`. Use `Client::connect($configuration)` instead of the static facades when you need several independent connections.

## Good to know

- The send API (v3.1) is a separate contract and is not part of this document.
- Version `0.1.0` is a first release: the API of the SDK follows the contract, and a regenerated contract can rename classes. Pin a version.
- The SDK has been checked against its contract (generation, static analysis, serialization of requests); it has not been run against the live service unless the section above says so. Use test credentials first.

## Documentation

- [Operations catalog](docs/OPERATIONS.md)
- [Vendor documentation](https://dev.mailjet.com/)
- [sdk-runtime](https://github.com/dmorenof/sdk-runtime) (what every SDK shares) and [sdk-generator](https://github.com/dmorenof/sdk-generator)
- [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [SECURITY.md](SECURITY.md)

## License

MIT, see [LICENSE.md](LICENSE.md). The license covers this SDK's code, not the API, its trademarks or its terms: see [NOTICE.md](NOTICE.md).
