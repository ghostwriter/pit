# Git

[![Compliance](https://github.com/ghostwriter/git/actions/workflows/compliance.yml/badge.svg)](https://github.com/ghostwriter/git/actions/workflows/compliance.yml)
[![Supported PHP Version](https://badgen.net/packagist/php/ghostwriter/git?color=8892bf)](https://www.php.net/supported-versions)
[![GitHub Sponsors](https://img.shields.io/github/sponsors/ghostwriter?label=Sponsor+@ghostwriter/git&logo=GitHub+Sponsors)](https://github.com/sponsors/ghostwriter)
[![Code Coverage](https://codecov.io/gh/ghostwriter/git/branch/main/graph/badge.svg)](https://codecov.io/gh/ghostwriter/git)
[![Type Coverage](https://shepherd.dev/github/ghostwriter/git/coverage.svg)](https://shepherd.dev/github/ghostwriter/git)
[![Psalm Level](https://shepherd.dev/github/ghostwriter/git/level.svg)](https://psalm.dev/docs/running_psalm/error_levels)
[![Latest Version on Packagist](https://badgen.net/packagist/v/ghostwriter/git)](https://packagist.org/packages/ghostwriter/git)
[![Downloads](https://badgen.net/packagist/dt/ghostwriter/git?color=blue)](https://packagist.org/packages/ghostwriter/git)

Git abstraction layer written in PHP

> [!WARNING]
>
> This project is not finished yet, work in progress.

## Installation

You can install the package via composer:

``` bash
composer require ghostwriter/git
```

### Star ⭐️ this repo if you find it useful

You can also star (🌟) this repo to find it easier later.

## Usage

```php
use Ghostwriter\Git\Git;
use Ghostwriter\Git\EnvironmentVariables;
use Ghostwriter\Git\Repository;

// Path to the repository
$path = '/path/to/repo';

// Environment variables
$env = [
    'GIT_AUTHOR_NAME' => 'John Doe',
    'GIT_AUTHOR_EMAIL' => 'john@doe.com',
    'HOME' => '/path/to/home',
    'PATH' => '/usr/local/bin:/usr/bin:/bin',
];

// Initialize and return a Git instance
$git = Git::new($path, $env);

// Or use composition

$environmentVariables = EnvironmentVariables::new($env);
$repository = Repository::new($path);
$git = new Git($repository, $environmentVariables);

// ==============================
// Initialize and return a RepositoryInterface instance
$git->init();

// Clone and return a RepositoryInterface instance
$git->clone('git://github.com/ghostwriter/git.git', '/path/to/repo');

// Add a file to the index
$git->add('file.txt');
$git->add('file.txt', 'file2.txt');

// Commit changes
$git->commit('Initial commit');

// Push changes
$git->push('origin', 'main');

// Pull changes
$git->pull('origin', 'main');

// Fetch changes
$git->fetch('origin');

// Merge changes
$git->merge('origin/main');

// Checkout branch
$git->checkout('main');

// Create a new branch
$git->branch('new-branch');

// Delete a branch
$git->deleteBranch('new-branch');

// List branches
$git->branches();

// Get the current branch
$git->currentBranch();

// Get the repository status
$git->status();

// Switch branch
$git->switch('feature-branch');

// Get the repository log
$git->log();

// Get the repository diff
$git->diff();
```

### Credits

- [Nathanael Esayeas](https://github.com/ghostwriter)
- [All Contributors](https://github.com/ghostwriter/git/contributors)

### Changelog

Please see [CHANGELOG.md](./CHANGELOG.md) for more information on what has changed recently.

### License

Please see [LICENSE](./LICENSE) for more information on the license that applies to this project.

### Security

Please see [SECURITY.md](./SECURITY.md) for more information on security disclosure process.
