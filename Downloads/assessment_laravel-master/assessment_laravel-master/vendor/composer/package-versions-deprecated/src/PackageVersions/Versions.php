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
    const ROOT_PACKAGE_NAME = 'laravel/laravel';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'asm89/stack-cors' => 'v2.0.3@9cb795bf30988e8c96dd3c40623c48a877bc6714',
  'barryvdh/laravel-dompdf' => 'v1.0.0@e3f429e97087b2ef19b83e5ed313f080f2477685',
  'beste/clock' => '1.0.0@10c02d2b49809168903a6b2e15f5001001972a2e',
  'beste/json' => '1.0.0@6b02a023ffb0ca92d612ce4f5a3b4c2bd6e17df3',
  'brick/math' => '0.9.3@ca57d18f028f84f777b2168cd1911b0dee2343ae',
  'dflydev/dot-access-data' => 'v3.0.1@0992cc19268b259a39e86f296da5f0677841f42c',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/lexer' => '1.2.1@e864bbf5904cb8f5bb334f99209b48018522f042',
  'dompdf/dompdf' => 'v1.2.0@60b704331479a69e9bcdb3496da2315b5c4f94fd',
  'dragonmantank/cron-expression' => 'v3.1.0@7a8c6e56ab3ffcc538d05e8155bb42269abf1a0c',
  'egulias/email-validator' => '2.1.25@0dbf5d78455d4d6a41d186da50adc1122ec066f4',
  'fig/http-message-util' => '1.1.5@9d94dc0154230ac39e5bf89398b324a86f63f765',
  'firebase/php-jwt' => 'v5.5.1@83b609028194aa042ea33b5af2d41a7427de80e6',
  'fruitcake/laravel-cors' => 'v2.0.4@a8ccedc7ca95189ead0e407c43b530dc17791d6a',
  'google/auth' => 'v1.18.0@21dd478e77b0634ed9e3a68613f74ed250ca9347',
  'google/cloud-core' => 'v1.44.0@72706f7d1824777f42294a3c9ccdaddaad670017',
  'google/cloud-firestore' => 'v1.21.0@fc659e9dcb1ac8a1966ef2625762b3f15a347a4a',
  'google/cloud-storage' => 'v1.26.1@1382afef595c2ced1c5e39ead91d903e8ebc8e22',
  'google/common-protos' => '2.0.0@a1bcb7b37f1fa1c92d65c3c6339fc701a65916ee',
  'google/crc32' => 'v0.1.0@a8525f0dea6fca1893e1bae2f6e804c5f7d007fb',
  'google/gax' => 'v1.12.0@d802c9b40c349f5368f077bfcbc2982e7c31f43c',
  'google/grpc-gcp' => 'v0.2.0@2465c2273e11ada1e95155aa1e209f3b8f03c314',
  'google/protobuf' => 'v3.19.4@6f0a54186f133aff98f49d0f36a32d4a4f7d4cbd',
  'graham-campbell/result-type' => 'v1.0.3@296c015dc30ec4322168c5ad3ee5cc11dae827ac',
  'grpc/grpc' => '1.42.0@9fa44f104cb92e924d4da547323a97f3d8aca6d4',
  'guzzlehttp/guzzle' => '7.4.0@868b3571a039f0ebc11ac8f344f4080babe2cb94',
  'guzzlehttp/promises' => '1.5.1@fe752aedc9fd8fcca3fe7ad05d419d32998a06da',
  'guzzlehttp/psr7' => '2.1.0@089edd38f5b8abba6cb01567c2a8aaa47cec4c72',
  'kreait/firebase-php' => '6.2.0@7eee99eb882957350573f3986fae6d2912ad348a',
  'kreait/firebase-tokens' => '2.2.0@b3a2666a716d518277fd85fa2e4462c6b4d1f1d3',
  'kreait/laravel-firebase' => '4.1.0@2e3697af5cd7c03bfbe8ff98769fd540e81408f2',
  'laravel/framework' => 'v8.72.0@5168f8589195a5f48b9c41ad2eec77a6c15f14f3',
  'laravel/helpers' => 'v1.5.0@c28b0ccd799d58564c41a62395ac9511a1e72931',
  'laravel/sanctum' => 'v2.12.2@76b2d552c00477d520338889160f80a0cfb5fc55',
  'laravel/serializable-closure' => 'v1.0.4@8148e72e6c2c3af7f05640ada1b26c3bca970f8d',
  'laravel/tinker' => 'v2.6.2@c808a7227f97ecfd9219fbf913bad842ea854ddc',
  'laravelcollective/html' => 'v6.2.1@ae15b9c4bf918ec3a78f092b8555551dd693fde3',
  'lcobucci/clock' => '2.1.0@903513d28e85376a33385ebc601afd2ee69e5653',
  'lcobucci/jwt' => '4.1.5@fe2d89f2eaa7087af4aa166c6f480ef04e000582',
  'league/commonmark' => '2.0.2@2df87709f44b0dd733df86aef0830dce9b1f0f13',
  'league/config' => 'v1.1.1@a9d39eeeb6cc49d10a6e6c36f22c4c1f4a767f3e',
  'league/flysystem' => '1.1.5@18634df356bfd4119fe3d6156bdb990c414c14ea',
  'league/mime-type-detection' => '1.8.0@b38b25d7b372e9fddb00335400467b223349fd7e',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'mtdowling/jmespath.php' => '2.6.1@9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
  'nesbot/carbon' => '2.54.0@eed83939f1aed3eee517d03a33f5ec587ac529b5',
  'nette/schema' => 'v1.2.2@9a39cef03a5b34c7de64f551538cbba05c2be5df',
  'nette/utils' => 'v3.2.5@9cd80396ca58d7969ab44fc7afcf03624dfa526e',
  'nikic/php-parser' => 'v4.13.1@63a79e8daa781cac14e5195e63ed8ae231dd10fd',
  'opis/closure' => '3.6.2@06e2ebd25f2869e54a306dda991f7db58066f7f6',
  'phenx/php-font-lib' => '0.5.4@dd448ad1ce34c63d09baccd05415e361300c35b4',
  'phenx/php-svg-lib' => '0.4.1@4498b5df7b08e8469f0f8279651ea5de9626ed02',
  'phpoption/phpoption' => '1.8.0@5455cb38aed4523f99977c4a12ef19da4bfe2a28',
  'psr/cache' => '2.0.0@213f9dbc5b9bfbc4f8db86d2838dc968752ce13b',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '2.0.0@ef29f6d262798707a9edd554e2b82517ef3a9376',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'psy/psysh' => 'v0.10.9@01281336c4ae557fe4a994544f30d3a1bc204375',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'ramsey/collection' => '1.2.2@cccc74ee5e328031b15640b51056ee8d3bb66c0a',
  'ramsey/uuid' => '4.2.3@fc9bb7fb5388691fd7373cd44dcb4d63bbcf24df',
  'riskihajar/terbilang' => '1.2.5@924eb6b2f96da2cfb90ed91aa9c4ee78d4986f23',
  'riverline/multipart-parser' => '2.0.9@ebba10245b5a6e03a673ff52c547d05029caedab',
  'rize/uri-template' => '0.3.4@2a874863c48d643b9e2e254ab288ec203060a0b8',
  'sabberworm/php-css-parser' => '8.4.0@e41d2140031d533348b2192a83f02d8dd8a71d30',
  'swiftmailer/swiftmailer' => 'v6.3.0@8a5d5072dca8f48460fce2f4131fcc495eec654c',
  'symfony/cache' => 'v5.4.5@b954c9397b226df319c6dfd002636ddaa4d848ef',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/console' => 'v5.3.10@d4e409d9fbcfbf71af0e5a940abb7b0b4bad0bd3',
  'symfony/css-selector' => 'v5.3.4@7fb120adc7f600a59027775b224c13a33530dd90',
  'symfony/deprecation-contracts' => 'v2.4.0@5f38c8804a9e97d23e0c8d63341088cd8a22d627',
  'symfony/error-handler' => 'v5.3.7@3bc60d0fba00ae8d1eaa9eb5ab11a2bbdd1fc321',
  'symfony/event-dispatcher' => 'v5.3.7@ce7b20d69c66a20939d8952b617506a44d102130',
  'symfony/event-dispatcher-contracts' => 'v2.4.0@69fee1ad2332a7cbab3aca13591953da9cdb7a11',
  'symfony/finder' => 'v5.3.7@a10000ada1e600d109a6c7632e9ac42e8bf2fb93',
  'symfony/http-client-contracts' => 'v2.4.0@7e82f6084d7cae521a75ef2cb5c9457bbda785f4',
  'symfony/http-foundation' => 'v5.3.10@9f34f02e8a5fdc7a56bafe011cea1ce97300e54c',
  'symfony/http-kernel' => 'v5.3.10@703e4079920468e9522b72cf47fd76ce8d795e86',
  'symfony/mime' => 'v5.3.8@a756033d0a7e53db389618653ae991eba5a19a11',
  'symfony/polyfill-ctype' => 'v1.23.0@46cd95797e9df938fdd2b03693b5fca5e64b01ce',
  'symfony/polyfill-iconv' => 'v1.23.0@63b5bb7db83e5673936d6e3b8b3e022ff6474933',
  'symfony/polyfill-intl-grapheme' => 'v1.23.1@16880ba9c5ebe3642d1995ab866db29270b36535',
  'symfony/polyfill-intl-idn' => 'v1.23.0@65bd267525e82759e7d8c4e8ceea44f398838e65',
  'symfony/polyfill-intl-normalizer' => 'v1.23.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.23.1@9174a3d80210dca8daa7f31fec659150bbeabfc6',
  'symfony/polyfill-php72' => 'v1.23.0@9a142215a36a3888e30d0a9eeea9766764e96976',
  'symfony/polyfill-php73' => 'v1.23.0@fba8933c384d6476ab14fb7b8526e5287ca7e010',
  'symfony/polyfill-php80' => 'v1.23.1@1100343ed1a92e3a38f9ae122fc0eb21602547be',
  'symfony/polyfill-php81' => 'v1.23.0@e66119f3de95efc359483f810c4c3e6436279436',
  'symfony/process' => 'v5.3.7@38f26c7d6ed535217ea393e05634cb0b244a1967',
  'symfony/routing' => 'v5.3.7@be865017746fe869007d94220ad3f5297951811b',
  'symfony/service-contracts' => 'v2.4.0@f040a30e04b57fbcc9c6cbcf4dbaa96bd318b9bb',
  'symfony/string' => 'v5.3.10@d70c35bb20bbca71fc4ab7921e3c6bda1a82a60c',
  'symfony/translation' => 'v5.3.10@6ef197aea2ac8b9cd63e0da7522b3771714035aa',
  'symfony/translation-contracts' => 'v2.4.0@95c812666f3e91db75385749fe219c5e494c7f95',
  'symfony/var-dumper' => 'v5.3.10@875432adb5f5570fff21036fd22aee244636b7d1',
  'symfony/var-exporter' => 'v6.0.3@1261b2d4a23081cb2b59a4caa311a5ac43b845b6',
  'tijsverkoyen/css-to-inline-styles' => '2.2.3@b43b05cf43c1b6d849478965062b6ef73e223bb5',
  'vlucas/phpdotenv' => 'v5.4.0@d4394d044ed69a8f244f3445bcedf8a0d7fe2403',
  'voku/portable-ascii' => '1.5.6@80953678b19901e5165c56752d087fc11526017c',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'yajra/laravel-datatables-oracle' => 'v9.19.0@553482df5f68969928acc0ee1a3af032cdaaf824',
  'composer/package-versions-deprecated' => '1.11.99.4@b174585d1fe49ceed21928a945138948cb394600',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/dbal' => '3.1.4@821b4f01a36ce63ed36c090ea74767b72db367e9',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'facade/flare-client-php' => '1.9.1@b2adf1512755637d0cef4f7d1b54301325ac78ed',
  'facade/ignition' => '2.16.1@29b533f63a3b269aa599d08dd4d22a0d720e295f',
  'facade/ignition-contracts' => '1.0.2@3c921a1cdba35b68a7f0ccffc6dffc1995b18267',
  'fakerphp/faker' => 'v1.16.0@271d384d216e5e5c468a6b28feedf95d49f83b35',
  'filp/whoops' => '2.14.4@f056f1fe935d9ed86e698905a957334029899895',
  'hamcrest/hamcrest-php' => 'v2.0.1@8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
  'kitloong/laravel-migrations-generator' => 'v5.1.0@836f6342af64c45ffaa213497b057becbbfa6987',
  'laravel/sail' => 'v1.12.5@d1c31b2c3d226e70e0071e074da69e4801f0f47b',
  'mockery/mockery' => '1.4.4@e01123a0e847d52d186c5eb4b9bf58b0c6d00346',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nunomaduro/collision' => 'v5.10.0@3004cfa49c022183395eabc6d0e5207dfe498d00',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.5.1@a12f7e301eb7258bb68acd89d4aefa05c2906cae',
  'phpspec/prophecy' => '1.14.0@d86dfc2e2a3cd366cee475e52c6bb3bbc371aa0e',
  'phpunit/php-code-coverage' => '9.2.8@cf04e88a2e3c56fc1a65488afd493325b4c1bc3e',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.10@c814a05837f2edb0d1471d6e3f4ab3501ca3899a',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'laravel/laravel' => 'No version set (parsed as 1.0.0)@',
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
        if (!self::composer2ApiUsable()) {
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
        if (self::composer2ApiUsable()) {
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

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}
