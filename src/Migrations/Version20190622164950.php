<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190622164950 extends AbstractMigration
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
        $this->addSql('ALTER TABLE post ADD published TINYINT(1) DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE jddwp_posts (ID BIGINT UNSIGNED NOT NULL, post_date_gmt TEXT DEFAULT NULL COLLATE utf8_general_ci, post_content LONGTEXT DEFAULT NULL COLLATE utf8_general_ci, post_title TEXT DEFAULT NULL COLLATE utf8_general_ci, post_excerpt TEXT DEFAULT NULL COLLATE utf8_general_ci, post_name VARCHAR(200) DEFAULT \'\' COLLATE utf8_general_ci, post_modified_gmt TEXT DEFAULT NULL COLLATE utf8_general_ci, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE post DROP published');
    }
}
