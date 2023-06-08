<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221106183604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE csv ADD rel_id INT NOT NULL');
        $this->addSql('ALTER TABLE csv ADD CONSTRAINT FK_8A452574E0AA1CD FOREIGN KEY (rel_id) REFERENCES berufsweg (id)');
        $this->addSql('CREATE INDEX IDX_8A452574E0AA1CD ON csv (rel_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE csv DROP FOREIGN KEY FK_8A452574E0AA1CD');
        $this->addSql('DROP INDEX IDX_8A452574E0AA1CD ON csv');
        $this->addSql('ALTER TABLE csv DROP rel_id');
    }
}
