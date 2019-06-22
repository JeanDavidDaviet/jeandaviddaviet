<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190622150145 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE post2');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE post2 (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, slug VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, content LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, excerpt VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci, dossier_id INT DEFAULT NULL, INDEX IDX_5A8A6C8D611C0C56 (dossier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D611C0C56');
    }
}
