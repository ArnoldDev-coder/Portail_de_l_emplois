<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210720173501 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE candidat (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, postnom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, sexe VARCHAR(1) NOT NULL, etat_civil VARCHAR(255) NOT NULL, nationalite VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, province_origine VARCHAR(255) NOT NULL, lieu_naissance VARCHAR(255) NOT NULL, date_naissance DATETIME NOT NULL, telephone VARCHAR(255) DEFAULT NULL, langues LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', connaissance_informatique LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE candidat');
    }
}
