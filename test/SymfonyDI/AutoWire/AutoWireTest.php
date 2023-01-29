<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\AutoWire;

use PHPUnit\Framework\TestCase;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader; // 構成ファイルとして利用するには`symfony/config`コンポーネントが別途必要

/**
 * @internal
 *
 * @coversNothing
 */
class AutoWireTest extends TestCase
{
    public function testExecute(): void
    {
        $containerBuilder = new ContainerBuilder();

        // 設定ファイルを読み込む、本来ならbootstrap.phpなどを用意して実施する処理
        $dir = str_replace('test', 'src', __DIR__); // 無理やり置き換え
        $loader = new PhpFileLoader($containerBuilder, new FileLocator($dir));
        $loader->load('service.php');

        /** @var Rot13Transformer $rot13Transformer */
        $rot13Transformer = $containerBuilder->get(Rot13Transformer::class);

        /** @var TwitterClient $twitterClient */
        $twitterClient = $containerBuilder->get(TwitterClient::class);

        // 設定間違えているのか動かない
        $this->assertInstanceOf(Rot13Transformer::class, $rot13Transformer);
        $this->assertInstanceOf(TwitterClient::class, $twitterClient);
    }
}
