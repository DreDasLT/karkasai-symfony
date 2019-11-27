<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191127231014 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE abonementas (id INT AUTO_INCREMENT NOT NULL, klientas_id INT NOT NULL, sale_id INT DEFAULT NULL, galioja_nuo DATETIME NOT NULL, galioja_iki DATETIME NOT NULL, INDEX IDX_68A96D82B480E88C (klientas_id), INDEX IDX_68A96D824A7E4868 (sale_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE darbuotojas (id INT AUTO_INCREMENT NOT NULL, vardas VARCHAR(255) DEFAULT NULL, pavarde VARCHAR(255) DEFAULT NULL, tel_nr VARCHAR(255) DEFAULT NULL, el_pastas VARCHAR(255) DEFAULT NULL, dirba_nuo TIME DEFAULT NULL, dirba_iki TIME DEFAULT NULL, isidarbinimo_data DATE DEFAULT NULL, nebedirba_nuo DATE DEFAULT NULL, miestas VARCHAR(255) DEFAULT NULL, gatve VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE klientas (id INT AUTO_INCREMENT NOT NULL, vardas VARCHAR(255) DEFAULT \'NULL\', pavarde VARCHAR(255) DEFAULT \'NULL\', tel_nr VARCHAR(255) DEFAULT \'NULL\', el_pastas VARCHAR(255) DEFAULT \'NULL\', miestas VARCHAR(255) DEFAULT \'NULL\', gatve VARCHAR(255) DEFAULT \'NULL\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sale (id INT AUTO_INCREMENT NOT NULL, tipas_id INT DEFAULT NULL, pavadinimas VARCHAR(255) NOT NULL, miestas VARCHAR(255) NOT NULL, gatve VARCHAR(255) NOT NULL, namo_nr VARCHAR(255) NOT NULL, dirba_nuo TIME NOT NULL, dirba_iki TIME NOT NULL, INDEX IDX_E54BC0051CEC0959 (tipas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tipas (id INT AUTO_INCREMENT NOT NULL, pavadinimas VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE abonementas ADD CONSTRAINT FK_68A96D82B480E88C FOREIGN KEY (klientas_id) REFERENCES klientas (id)');
        $this->addSql('ALTER TABLE abonementas ADD CONSTRAINT FK_68A96D824A7E4868 FOREIGN KEY (sale_id) REFERENCES sale (id)');
        $this->addSql('ALTER TABLE sale ADD CONSTRAINT FK_E54BC0051CEC0959 FOREIGN KEY (tipas_id) REFERENCES tipas (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonementas DROP FOREIGN KEY FK_68A96D82B480E88C');
        $this->addSql('ALTER TABLE abonementas DROP FOREIGN KEY FK_68A96D824A7E4868');
        $this->addSql('ALTER TABLE sale DROP FOREIGN KEY FK_E54BC0051CEC0959');
        $this->addSql('DROP TABLE abonementas');
        $this->addSql('DROP TABLE darbuotojas');
        $this->addSql('DROP TABLE klientas');
        $this->addSql('DROP TABLE sale');
        $this->addSql('DROP TABLE tipas');
    }
}
