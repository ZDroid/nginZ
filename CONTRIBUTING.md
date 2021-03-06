# Contributing to Hackwork

Here are some rules you should follow while contributing to Hackwork.

## Issues

Only accepted issues are bug reports and feature requests. Bugs are discrete
and reproducible problems fixable within the Hackwork code. Read the following
guidelines before opening any issue.

- **Search for existing issues.** It's painful to go through a lot of duplicate
  issues. You help a lot by first checking has someone else reported the same
  issue.
- **Be sure that the bug is within the Hackwork core.** Errors with your web
  server are out of this project's scope.
- **Share useful information.** Telling what operating system and web server
  you're using and steps to reproduce the bug is very helpful.

## Pull requests

Read the following guidelines before sending the pull request.

- **Don't pollute the pull request with unintended changes.**
- **Describe your changes wisely.**

## Standards

### Golden rule

> Every line of code should appear to be written by a single person, no matter
the number of contributors. &mdash; [@mdo](http://mdo.github.io/code-guide/)

### Wrapping

There is a limit of 80 characters. There are some exceptions (e.g. links).

### Style guide

- 2 spaces indent, no tabs
- Keywords in lower case
- Prefix rarely used (private) variables with `_`
- Opening braces (`{`) goes on same line as statement
- Put a space before opening braces (`{`)
- Put a space before opening parens (`(`) in control structures
- Set off operators with spaces
- Omit closing tag (`?>`) in PHP-only files

Good example:

```php
<?php

if ($a > $b) {
  // ...
}

$c = $a . $b;
$_c = $c; // Safe reference to `$c`

class Example {
  // ...
}
```

### Letter case

Always write sentences, including headings and code comments, in sentence case,
never in title case.

## License

By contributing your code, you agree to license your contributions under the
[MIT License](LICENSE.md).
