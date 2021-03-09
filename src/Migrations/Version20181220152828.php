<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181220152828 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, object VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, name VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fos_user ADD nom VARCHAR(50) NOT NULL, ADD prenom VARCHAR(50) NOT NULL, ADD genre SMALLINT NOT NULL, ADD specialite VARCHAR(50) NOT NULL, ADD telephone VARCHAR(50) NOT NULL, ADD site_web VARCHAR(100) DEFAULT NULL, ADD doctolib VARCHAR(100) DEFAULT NULL, ADD offre SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B297B633834');
        $this->addSql('ALTER TABLE profil ADD rue_cabinet VARCHAR(50) DEFAULT NULL, ADD ville_cabinet VARCHAR(50) DEFAULT NULL, ADD code_postal INT DEFAULT NULL, ADD pays_cabinet VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297B633834 FOREIGN KEY (idMedecin) REFERENCES fos_user (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contact');
        $this->addSql('ALTER TABLE fos_user DROP nom, DROP prenom, DROP genre, DROP specialite, DROP telephone, DROP site_web, DROP doctolib, DROP offre');
        $this->addSql('ALTER TABLE profil DROP FOREIGN KEY FK_E6D6B297B633834');
        $this->addSql('ALTER TABLE profil DROP rue_cabinet, DROP ville_cabinet, DROP code_postal, DROP pays_cabinet');
        $this->addSql('ALTER TABLE profil ADD CONSTRAINT FK_E6D6B297B633834 FOREIGN KEY (idMedecin) REFERENCES users (id)');
    }
}
