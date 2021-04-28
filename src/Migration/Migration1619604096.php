<?php declare(strict_types=1);

namespace Greg\TeamCms\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1619604096 extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1619604096;
    }

    /**
     * @throws \Doctrine\DBAL\Exception
     */
    public function update(Connection $connection): void
    {
        $connection->executeUpdate('
        CREATE TABLE `greg_team`(
            `id` BINARY(16) NOT NULL,
            `name` VARCHAR(255) COLLATE utf8mb4_unicode_ci NULL,
            `postition` VARCHAR(255) COLLATE utf8mb4_unicode_ci NULL,
            `information` VARCHAR(255) COLLATE utf8mb4_unicode_ci NULL,
            `media_id` BINARY(16) NULL,
            PRIMARY KEY (`id`),
            CONSTRAINT `fk.greg_team.media_id` FOREIGN KEY (`media_id`)
              REFERENCES `media` (`id`)
         ) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
        ');
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
