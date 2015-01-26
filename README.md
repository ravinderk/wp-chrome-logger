wp-chrome-debugger
==================

Thank to [Craig Campbell] for creating awesome debugging tool [chromephp]

## Installation
1. Install the Chrome extension from: https://chrome.google.com/extensions/detail/noaneddfkdjfnfdakjjmocngnfkfehhd
2. Click the extension icon in the browser to enable it for the current tab's domain
3. Download this plugin and activate it.

##How to work
Use any function ( below in example ) to output anything in chrome console ( put these functions in ```plugin file``` or ```functions.php``` ).
```sh
ChromePhp::log('Hello console!');
ChromePhp::log($_SERVER);
ChromePhp::warn('something went wrong!');
```

**Note:**  Use these functions under a WordPress hook before header sent otherwise you will get an *header already sent* error in WordPress.

For more [info visit this link][1]
[1]:https://github.com/ccampbell/chromephp
[Craig Campbell]:https://github.com/ccampbell
[chromephp]:https://github.com/ccampbell/chromephp
