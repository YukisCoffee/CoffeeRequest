# CoffeeRequest V1

A simple wrapper for cURL in PHP.

## Installation

The recommended installation method is via [Composer](//getcomposer.org):

```sh
composer require yukiscoffee/coffeerequest:1.0
```

## Usage

Performing a network request with CoffeeRequest v1 is simple. The `request()` API has you covered!

```php
use YukisCoffee\CoffeeRequest\CoffeeRequest;

$responseText = CoffeeRequest::request("http://example.org");
echo $responseText;
```

You can provide a set of options to the request body to change how it works. Here is a list of supported options:

| **Name**            | **Type**          | **Default**                                          | **Description**                                                                                               |
|---------------------|-------------------|------------------------------------------------------|---------------------------------------------------------------------------------------------------------------|
| `"post"`            | `bool`            | `false`                                              | Makes the request use the POST method.                                                                        |
| `"returnTransfer"`  | `bool`            | `true`                                               | Makes the `request()` function return the response body.                                                      |
| `"encoding"`        | `string`          | `"gzip"`                                             | Type of transfer encoding to use. This must be supported by PHP cURL: `"identity"`, `"deflate"`, or `"gzip"`. |
| `"body"`            | `string`          | none                                                 | Request body to use for POST requests.                                                                        |
| `"headers"`         | associative array | Forwards request cookies sent to the current script. | HTTP headers to provide in the request.                                                                       |
| `"overrideResolve"` | `string`          | none                                                 | Alternative DNS server address to use for DNS lookups.                                                        |

Asynchronous requesting is supported via the `queueRequest()` and `runQueue()` functions. These assign an ID to your queued request so you can identify them later.

```php
use YukisCoffee\CoffeeRequest\CoffeeRequest;

CoffeeRequest::queueRequest("https://example.org", [], "example-1");
CoffeeRequest::queueRequest("https://www.google.com", [], "example-2");

$responses = CoffeeRequest::runQueue();

foreach ($responses as $id => $response)
{
    echo $id;
    echo $response;
}
```

The request queue can be cleared via the `clearRequestQueue()` API.

## Acknowledgements

CoffeeRequest has been supported by the work of the following developers or projects:

- [Rehike](//github.com/Rehike/Rehike) - The primary project for which CoffeeRequest was made.
- [Isabella (kawapure)](//github.com/kawapure) - A lead developer of Rehike who revised the CoffeeRequest source code during its use in Rehike.
- [Aubrey Pankow (aubymori)](//github.com/aubymori) - A lead developer of Rehike who revised the CoffeeRequest source code during its use in Rehike.