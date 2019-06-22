<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190622160959 extends AbstractMigration
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
        $this->addSql('ALTER TABLE post CHANGE excerpt excerpt VARCHAR(500) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE jddwp_posts (ID BIGINT UNSIGNED NOT NULL, post_author BIGINT UNSIGNED DEFAULT 0, post_date TEXT DEFAULT NULL COLLATE utf8_general_ci, post_date_gmt TEXT DEFAULT NULL COLLATE utf8_general_ci, post_content LONGTEXT DEFAULT NULL COLLATE utf8_general_ci, post_title TEXT DEFAULT NULL COLLATE utf8_general_ci, post_excerpt TEXT DEFAULT NULL COLLATE utf8_general_ci, post_status VARCHAR(20) DEFAULT \'publish\' COLLATE utf8_general_ci, comment_status VARCHAR(20) DEFAULT \'open\' COLLATE utf8_general_ci, ping_status VARCHAR(20) DEFAULT \'open\' COLLATE utf8_general_ci, post_password VARCHAR(255) DEFAULT \'\' COLLATE utf8_general_ci, post_name VARCHAR(200) DEFAULT \'\' COLLATE utf8_general_ci, to_ping TEXT DEFAULT NULL COLLATE utf8_general_ci, pinged TEXT DEFAULT NULL COLLATE utf8_general_ci, post_modified TEXT DEFAULT NULL COLLATE utf8_general_ci, post_modified_gmt TEXT DEFAULT NULL COLLATE utf8_general_ci, post_content_filtered LONGTEXT DEFAULT NULL COLLATE utf8_general_ci, post_parent BIGINT UNSIGNED DEFAULT 0, guid VARCHAR(255) DEFAULT \'\' COLLATE utf8_general_ci, menu_order INT DEFAULT 0, post_type VARCHAR(20) DEFAULT \'post\' COLLATE utf8_general_ci, post_mime_type VARCHAR(100) DEFAULT \'\' COLLATE utf8_general_ci, comment_count BIGINT DEFAULT 0, PRIMARY KEY(ID)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('ALTER TABLE post CHANGE excerpt excerpt VARCHAR(255) DEFAULT NULL COLLATE utf8mb4_unicode_ci');
    }
}
