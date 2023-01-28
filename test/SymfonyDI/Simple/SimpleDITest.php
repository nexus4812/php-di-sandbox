<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\SymfonyDI\Simple;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @internal
 *
 * @coversNothing
 */
class SimpleDITest extends TestCase
{
    public function testExecute(): void
    {
        // Setup
        $transportName = 'sendmail';

        $containerBuilder = new ContainerBuilder();

        // コンテナにクラスを登録する
        $containerBuilder
            ->register('mailer', Mailer::class)
            ->addArgument($transportName)
        ;

        // クラスの依存先がコンテナに登録されていた場合
        $containerBuilder
            ->register('newsletter_manager', NewsletterManager::class)
            ->addArgument(new Reference('mailer'))
        ;

        // Assertion

        // サービスコンテナから指定のインスタンスを取得できる
        /** @var Mailer $maier */
        $maier = $containerBuilder->get('mailer');
        $this->assertInstanceOf(Mailer::class, $maier);

        /** @var NewsletterManager $newsletterManager */
        $newsletterManager = $containerBuilder->get('newsletter_manager');
        $this->assertInstanceOf(NewsletterManager::class, $newsletterManager);

        // addArgumentで指定した情報を取得できる
        $this->assertSame($transportName, $maier->getTransport());
        $this->assertSame($transportName, $newsletterManager->getMailer()->getTransport());
    }
}
