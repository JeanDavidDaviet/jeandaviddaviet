<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190622145935 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE jddwp_posts');
        $this->addSql('DROP TABLE post2');
        $this->addSql('DROP TABLE post_test');
        $this->addSql('ALTER TABLE post CHANGE created_at created_at DATETIME DEFAULT NULL, CHANGE updated_at updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE jddwp_posts (title TEXT DEFAULT NULL COLLATE utf8_general_ci, slug VARCHAR(200) DEFAULT \'\' COLLATE utf8_general_ci, created_at TEXT DEFAULT NULL COLLATE utf8_general_ci, updated_at TEXT DEFAULT NULL COLLATE utf8_general_ci, content LONGTEXT DEFAULT NULL COLLATE utf8_general_ci, excerpt TEXT DEFAULT NULL COLLATE utf8_general_ci) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post2 (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, slug VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, content LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, excerpt VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, dossier_id INT DEFAULT NULL, INDEX IDX_5A8A6C8D611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE post_test (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, slug VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, content LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, excerpt VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, dossier_id INT DEFAULT NULL, INDEX IDX_5A8A6C8D611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE post CHANGE created_at created_at DATETIME NOT NULL, CHANGE updated_at updated_at DATETIME NOT NULL');
    }
}
