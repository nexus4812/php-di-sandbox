# php-di-sandbox

## これは何？

phpのDIツールを比較する為の遊び場（sandbox）

```shell
composer i # 動作確認するのであれば必要
```

## symfony/dependency-injection

[Document](https://symfony.com/doc/current/components/dependency_injection.html)

サービスコンテナにクラスを登録して、取り出すサンプル

```shell
php vendor/phpunit/phpunit/phpunit test/SymfonyDI/Simple/SimpleDITest.php
```

## php-di/php-di

[Document](https://php-di.org/)

サービスコンテナにクラスを登録して、取り出すサンプル

```shell
php vendor/phpunit/phpunit/phpunit test/PHPDI/Simple/MailerTest.php
```

フレームワークっぽく作ってみて、Controllerとその周りのクラスをDIするサンプル

```shell
# エンドポイントにアクセスが来たと仮定して下記のphpを実行する
php src/PHPDI/AutoWire/www/endpoint.php
> Hi. My name is Foo
```
