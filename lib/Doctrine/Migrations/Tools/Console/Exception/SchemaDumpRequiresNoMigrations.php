<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Tools\Console\Exception;

use RuntimeException;

final class SchemaDumpRequiresNoMigrations extends RuntimeException implements ConsoleException
{
    public static function new() : self
    {
        return new self('Delete your old historical migrations before dumping your schema.');
    }
}
