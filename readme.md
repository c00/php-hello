# PHP Hello

A hello world test for PHP. If it returns 'Hello world!', your php setup is correct.

## Settings

Settings are environment variables. Following are possible:

| variable | description | default |
| PHP_MESSAGE | The message to display | 'Hello world!' |
| PHP_INFO_PASS | The passphrase to print `phpinfo()``. (see below) | null |

## phpinfo()

To debug your environment it might be useful to see the output of `phpinfo()`. If you supply a `PHP_INFO_PASS` as an
environment variable and add the same value as a parameter (e.g. `http://localhost?pass=mysecret`), it will print `phpinfo()`.
If you don't set this value, `phpinfo` will not be shown, regardless of query parameters.