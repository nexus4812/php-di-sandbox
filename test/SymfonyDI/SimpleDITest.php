<?php

namespace My\PhpDiSandbox\SymfonyDI;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class SimpleDITest extends TestCase
{
    public function executeTest()
    {
        $transportName = 'sendmail';

        $containerBuilder = new ContainerBuilder();
        $containerBuilder
            ->register('mailer', Mailer::class)
            ->addArgument($transportName);


        /** @var Mailer $maier */
        $maier = $containerBuilder->get('mailer');

        // サービスコンテナから指定のインスタンスを取得できる
        $this->assertInstanceOf(Mailer::class, $maier);

        // addArgumentで指定した情報を取得できる
        $this->assertSame($transportName, $maier->getTransport());
    }
}
