<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = '__root__';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99@c8c9aa8a14cc3d3bec86d0a8c3fa52ea79936855',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'illuminate/bus' => 'v8.73.1@be400399687b97d5558a224e970060fd5d5f2735',
  'illuminate/collections' => 'v8.73.1@bfb57bc1863689058706eb41287b7ad523d74403',
  'illuminate/container' => 'v8.73.1@6ac391bb27391706c5f921b85060aa2c4ca03fae',
  'illuminate/contracts' => 'v8.73.1@b0886ec05a63b204634d64d0b39d5b78a7c06f81',
  'illuminate/database' => 'v8.73.1@fb71b783458e1e0db6ab19de31ad3523a312726f',
  'illuminate/events' => 'v8.73.1@b7f06cafb6c09581617f2ca05d69e9b159e5a35d',
  'illuminate/macroable' => 'v8.73.1@aed81891a6e046fdee72edd497f822190f61c162',
  'illuminate/pipeline' => 'v8.73.1@23aeff5b26ae4aee3f370835c76bd0f4e93f71d2',
  'illuminate/support' => 'v8.73.1@05b82a3fb311c4a3a40edfc8540463d576d7e65e',
  'jean85/pretty-package-versions' => '1.5.0@e9f4324e88b8664be386d90cf60fbc202e1f7fc9',
  'jenssegers/mongodb' => '3.8.4@6aa6ad12b3b52eeab1d090f282c14123ffad1dc9',
  'mongodb/mongodb' => '1.10.0@b0bbd657f84219212487d01a8ffe93a789e1e488',
  'nesbot/carbon' => '2.54.0@eed83939f1aed3eee517d03a33f5ec587ac529b5',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'symfony/console' => 'v5.3.10@d4e409d9fbcfbf71af0e5a940abb7b0b4bad0bd3',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.10@d70c35bb20bbca71fc4ab7921e3c6bda1a82a60c',
  'symfony/translation' => 'v5.3.10@6ef197aea2ac8b9cd63e0da7522b3771714035aa',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  '__root__' => '1.0.0+no-version-set@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!class_exists(InstalledVersions::class, false) || !InstalledVersions::getRawData()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (class_exists(InstalledVersions::class, false) && InstalledVersions::getRawData()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
