<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230613083932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE media (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, url VARCHAR(255) DEFAULT NULL, content LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE media_figure (media_id INT NOT NULL, figure_id INT NOT NULL, INDEX IDX_932E29A4EA9FDD75 (media_id), INDEX IDX_932E29A45C011B5 (figure_id), PRIMARY KEY(media_id, figure_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE media_figure ADD CONSTRAINT FK_932E29A4EA9FDD75 FOREIGN KEY (media_id) REFERENCES media (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE media_figure ADD CONSTRAINT FK_932E29A45C011B5 FOREIGN KEY (figure_id) REFERENCES figure (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE media_figure DROP FOREIGN KEY FK_932E29A4EA9FDD75');
        $this->addSql('ALTER TABLE media_figure DROP FOREIGN KEY FK_932E29A45C011B5');
        $this->addSql('DROP TABLE media');
        $this->addSql('DROP TABLE media_figure');
    }
}
