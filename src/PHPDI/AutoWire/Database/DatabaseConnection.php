<?php

declare(strict_types=1);

namespace My\PhpDiSandbox\PHPDI\AutoWire\Database;

class DatabaseConnection
{
    public function getMasterPDO(): \PDO
    {
        return new \PDO();
    }

    public function getSlavePDO(): \PDO
    {
        return new \PDO();
    }
}
