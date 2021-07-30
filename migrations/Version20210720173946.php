<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720173946 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat ADD experiences_professionnelles LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', ADD personnes_references LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', CHANGE langues langues LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\', CHANGE connaissance_informatique connaissance_informatique LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidat DROP experiences_professionnelles, DROP personnes_references, CHANGE langues langues LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci` COMMENT \'(DC2Type:array)\', CHANGE connaissance_informatique connaissance_informatique LONGTEXT CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_unicode_ci` COMMENT \'(DC2Type:array)\'');
    }
}
