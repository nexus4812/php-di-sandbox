<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\Simple;

use DI\Container;

use function DI\create;
use function DI\get;

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
            'mailer' => get(Mailer::class),
        ]);
        $this->assertInstanceOf(UserManager::class, $userManager);

        $container->call(function (Mailer $mailer) {
            // callableな形でも呼び出しができる
            $this->assertInstanceOf(Mailer::class, $mailer);
        });
    }
}
