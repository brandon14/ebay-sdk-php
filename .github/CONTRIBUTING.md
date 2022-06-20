# Contributing

We love contributions from everyone. By participating in this project, you agree to abide by the [code of conduct].

  [code of conduct]: https://github.com/brandon14/ebay-sdk-php/blobs/master/.github/CODE_OF_CONDUCT.md

We expect everyone to follow the code of conduct anywhere in this project's codebase.

## Contributing Code

Make sure you have the proper dependencies:

- PHP ^7.2 || ^8.0
- Composer

Fork the repo.

Set up the project

```bash
composer install
```

Make sure the tests pass:

```bash
composer run-script test
```

Make your change, with new passing tests. Follow PSR coding style standards. In order to lint new code
to keep up to our coding standards, please run:

```bash
composer run-script lint:[fix|check]
```

Push to your fork. Write a [good commit message][commit]. Submit a pull request.

  [commit]: http://tbaggery.com/2008/04/19/a-note-about-git-commit-messages.html

Others will give constructive feedback. This is a time for discussion and improvements, and making the necessary changes
will be required before we can merge the contribution.
