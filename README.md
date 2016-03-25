Crate
===

[![Build Status](https://travis-ci.org/cmpayments/crate.svg)](https://travis-ci.org/cmpayments/crate)

What is it?
-----------

Crate is based on [Box](https://github.com/box-project/box2) and aimd to simplifiy the Phar building process.
Out of the box (no pun intended), the application can do many great things:

- Add, replace, and remove files and stubs in existing Phars.
- Extract a whole Phar, or cherry pick which files you want.
- Retrieve information about the Phar extension, or a Phar file.
  - List the contents of a Phar.
- Verify the signature of an existing Phar.
- Generate RSA (PKCS#1 encoded) private keys for OpenSSL signing.
  - Extract public keys from existing RSA private keys.
- Use Git tags and short commit hashes for versioning.

Since the application is based on the [Crate library](https://github.com/cmtelecom/crate-lib), you get its benefits as well:

- On the fly search and replace of placeholders.
- Compact file contents based on file type.
- Generate custom stubs.

Difference between Box and Crate
--------------------------------

The Box project aims to be cross-platform, while Crate has a Linux focus. Effectively this means that Linux specific features are more likely to find their way into Crate


How do I get started?
---------------------

You can use Crate in one of three ways:

### As a Phar (Recommended)

You may download a ready-to-use version of Crate as a Phar:

```sh
$ curl -LSs https://cmpayments.github.io/crate/installer.php | php
```

The command will check your PHP settings, warn you of any issues, and the download it to the current directory. From there, you may place it anywhere that will make it easier for you to access (such as `/usr/local/bin`) and chmod it to `755`. You can even rename it to just `crate` to avoid having to type the `.phar` extension every time.

```sh
$ crate --version
```

Whenever a new version of the application is released, you can simply run the `update` command to get the latest version:

```sh
$ crate update
```

### As a Global Composer Install

This is probably the best way when you have other tools like phpunit and other tools installed in this way:

```sh
$ composer global require cmpayments/crate --prefer-source
```

### As a Composer Dependency

You may also install Crate as a dependency for your Composer managed project:

```sh
$ composer require --dev cmpayments/crate
```

(or)

```json
{
    "require-dev": {
        "cmpayments/crate": "~1.0"
    }
}
```

> Be aware that using this approach requires additional configuration steps to prevent Crate's own dependencies from accidentally being added to your Phar, causing file size bloat.

Once you have installed the application, you can run the `help` command to get detailed information about all of the available commands. This should be your go-to place for information about how to use Crate. If you happen to come across any information that could prove to be useful to others, the wiki is open for you to contribute.

```sh
$ crate help
```

Creating a Phar
---------------

To get started, you may want to check out the [example application](https://github.com/kherge/php-crate-example) that is ready to be built by Crate. How your project is structured is entirely up to you. All that Crate requires is that you have a file called `crate.json` at the root of your project directory. You can find a complete and detailed list of configuration settings available by seeing the help information for the `build` command:

```sh
$ crate help build
```

> You may find example configuration files for popular projects on the wiki.

Once you have configured your project using `crate.json` (or `crate.json.dist`), you can simply run the `build` command in the directory containing `crate.json`:

```sh
$ crate build -v
```

> The `-v` option enabled verbose output. This will provide you with a lot of useful information for debugging your build process. Once you are satisfied with the results, I recommend not using the verbose option. It may considerably slow down the build process.

Contributing
------------

You can contribute in one of three ways:

1. File bug reports using the [issue tracker](https://github.com/cmpayments/crate/issues).
2. Answer questions or fix bugs on the issue tracker.
3. Contribute new features or update the wiki.

> The code contribution process is not very formal. You just need to make sure that you follow the PSR-0, PSR-1, and PSR-2 coding guidelines. Any new code contributions must be accompanied by unit tests where applicable.
