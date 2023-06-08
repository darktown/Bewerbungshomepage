<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220402200517 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE berufsweg (id INT AUTO_INCREMENT NOT NULL, berufsweg VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lebenslauf (id INT AUTO_INCREMENT NOT NULL, berufsweg_id INT NOT NULL, datebegin VARCHAR(255) NOT NULL, dateend VARCHAR(255) NOT NULL, firma VARCHAR(255) NOT NULL, info VARCHAR(255) NOT NULL, INDEX IDX_3715D8A065B7A8EB (berufsweg_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE lebenslauf ADD CONSTRAINT FK_3715D8A065B7A8EB FOREIGN KEY (berufsweg_id) REFERENCES berufsweg (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lebenslauf DROP FOREIGN KEY FK_3715D8A065B7A8EB');
        $this->addSql('DROP TABLE berufsweg');
        $this->addSql('DROP TABLE lebenslauf');
    }
}
