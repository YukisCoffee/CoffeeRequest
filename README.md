# CoffeeRequest

An asynchronous PHP network request library, including an API similar to JavaScript's fetch.

## Installation

The recommended installation method is via [Composer](//getcomposer.org):

```sh
composer require yukiscoffee/coffeerequest
```

## Usage

Network requests in CoffeeRequest use an asynchronous, Promise-based API just like fetch in JavaScript. Here is an example usage:

```php
<?php

use YukisCoffee\CoffeeRequest\CoffeeRequest;

$requestPromise = CoffeeRequest::request("https://example.org");

$requestPromise->then(function($response) {
	echo $response->getText();
});
```

## Acknowledgements

CoffeeRequest has been supported by the work of the following developers or projects:

- [Rehike](//github.com/Rehike/Rehike) - The primary project for which CoffeeRequest was made.
- [Isabella (kawapure)](//github.com/kawapure) - A lead developer of Rehike who revised the CoffeeRequest source code during its use in Rehike.
- [Aubrey Pankow (aubymori)](//github.com/aubymori) - A lead developer of Rehike who revised the CoffeeRequest source code during its use in Rehike.