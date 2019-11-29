<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191127235327 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE darbuotojas ADD sale_id INT DEFAULT NULL, CHANGE vardas vardas VARCHAR(255) DEFAULT NULL, CHANGE pavarde pavarde VARCHAR(255) DEFAULT NULL, CHANGE tel_nr tel_nr VARCHAR(255) DEFAULT NULL, CHANGE el_pastas el_pastas VARCHAR(255) DEFAULT NULL, CHANGE dirba_nuo dirba_nuo TIME DEFAULT NULL, CHANGE dirba_iki dirba_iki TIME DEFAULT NULL, CHANGE isidarbinimo_data isidarbinimo_data DATE DEFAULT NULL, CHANGE nebedirba_nuo nebedirba_nuo DATE DEFAULT NULL, CHANGE miestas miestas VARCHAR(255) DEFAULT NULL, CHANGE gatve gatve VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE darbuotojas ADD CONSTRAINT FK_217BA0424A7E4868 FOREIGN KEY (sale_id) REFERENCES sale (id)');
        $this->addSql('CREATE INDEX IDX_217BA0424A7E4868 ON darbuotojas (sale_id)');
        $this->addSql('ALTER TABLE abonementas CHANGE sale_id sale_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE klientas CHANGE vardas vardas VARCHAR(255) DEFAULT \'NULL\', CHANGE pavarde pavarde VARCHAR(255) DEFAULT \'NULL\', CHANGE tel_nr tel_nr VARCHAR(255) DEFAULT \'NULL\', CHANGE el_pastas el_pastas VARCHAR(255) DEFAULT \'NULL\', CHANGE miestas miestas VARCHAR(255) DEFAULT \'NULL\', CHANGE gatve gatve VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE sale CHANGE tipas_id tipas_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE abonementas CHANGE sale_id sale_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE darbuotojas DROP FOREIGN KEY FK_217BA0424A7E4868');
        $this->addSql('DROP INDEX IDX_217BA0424A7E4868 ON darbuotojas');
        $this->addSql('ALTER TABLE darbuotojas DROP sale_id, CHANGE vardas vardas VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE pavarde pavarde VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel_nr tel_nr VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE el_pastas el_pastas VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE dirba_nuo dirba_nuo TIME DEFAULT \'NULL\', CHANGE dirba_iki dirba_iki TIME DEFAULT \'NULL\', CHANGE isidarbinimo_data isidarbinimo_data DATE DEFAULT \'NULL\', CHANGE nebedirba_nuo nebedirba_nuo DATE DEFAULT \'NULL\', CHANGE miestas miestas VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE gatve gatve VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE klientas CHANGE vardas vardas VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'NULL\'\'\' COLLATE `utf8mb4_unicode_ci`, CHANGE pavarde pavarde VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'NULL\'\'\' COLLATE `utf8mb4_unicode_ci`, CHANGE tel_nr tel_nr VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'NULL\'\'\' COLLATE `utf8mb4_unicode_ci`, CHANGE el_pastas el_pastas VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'NULL\'\'\' COLLATE `utf8mb4_unicode_ci`, CHANGE miestas miestas VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'NULL\'\'\' COLLATE `utf8mb4_unicode_ci`, CHANGE gatve gatve VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\'\'NULL\'\'\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE sale CHANGE tipas_id tipas_id INT DEFAULT NULL');
    }
}
