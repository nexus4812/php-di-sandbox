<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\Simple;

use DI\Container;

use function DI\create;

use PHPUnit\Framework\TestCase;

/**
 * @internal
 *
 * @coversNothing
 */
class MailerTest extends TestCase
{
    public function testExecute(): void
    {
        // サービスコンテナに登録
        $container = new Container();
        $container->set(Mailer::class, create(Mailer::class));
        $container->set(UserManager::class, create(UserManager::class));

        // Mailerをサービスコンテナから取得
        $mailer = $container->make(Mailer::class);
        $this->assertInstanceOf(Mailer::class, $mailer);

        // Mailerに依存したUserManagerをサービスコンテナから生成
        $userManager = $container->make(UserManager::class, [
            'mailer' => $mailer,
        ]);
        $this->assertInstanceOf(UserManager::class, $userManager);
    }
}
