<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Repository;

use My\PhpDiSandbox\PHPDI\AutoWire\Database\DatabaseConnection;
use My\PhpDiSandbox\PHPDI\AutoWire\Domain\User;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(private DatabaseConnection $connection)
    {
    }

    public function firstOrFailed(int $user_id): User
    {
//        $statement = $this->connection
//            ->getMasterPDO()
//            ->prepare('select * from users where user_id = :user_id limit 1')
//        ;
//
//        $statement->bindValue(':user_id', $user_id);
//        $statement->execute();
//        $result = $statement->fetch();
//
//        if (empty($result)) {
//            // 本当はModelNotFoundExceptionとかだけど割愛
//            throw new \DomainException('User not found');
//        }
//
//        return new User($result['user_id'], $result['user_name']);

        // 本当は上みたいな感じで返す
        return new User(1, 'Foo');
    }
}
