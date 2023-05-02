<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230409184214 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE panier_articles (id_article INT NOT NULL, id_panier INT NOT NULL, INDEX IDX_2598381ADCA7A716 (id_article), INDEX IDX_2598381A2FBB81F (id_panier), PRIMARY KEY(id_article, id_panier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id_panier INT AUTO_INCREMENT NOT NULL, total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_panier)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id_role INT AUTO_INCREMENT NOT NULL, desc_role VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id_role)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT FK_2598381ADCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT FK_2598381A2FBB81F FOREIGN KEY (id_panier) REFERENCES panier (id_panier)');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY fk_reclam_reponse');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FKAG');
        $this->addSql('ALTER TABLE articles CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD316840E0BCE0 FOREIGN KEY (id_galerie) REFERENCES galeries (id_galerie)');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_idtyperreclam');
        $this->addSql('ALTER TABLE users ADD id_role INT DEFAULT NULL, DROP roles');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9DC499668 FOREIGN KEY (id_role) REFERENCES role (id_role)');
        $this->addSql('CREATE INDEX id_role ON users (id_role)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9DC499668');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, idrec INT NOT NULL, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, objet VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_reclam_reponse (idrec), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, selector VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, hashed_token VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT fk_reclam_reponse FOREIGN KEY (idrec) REFERENCES reclam (idr) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE panier_articles DROP FOREIGN KEY FK_2598381ADCA7A716');
        $this->addSql('ALTER TABLE panier_articles DROP FOREIGN KEY FK_2598381A2FBB81F');
        $this->addSql('DROP TABLE panier_articles');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE role');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD316840E0BCE0');
        $this->addSql('ALTER TABLE articles CHANGE id_user id_user INT DEFAULT 3 NOT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FKAG FOREIGN KEY (id_galerie) REFERENCES galeries (id_galerie) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_idtyperreclam FOREIGN KEY (idtyper) REFERENCES typereclamation (idtr) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX id_role ON users');
        $this->addSql('ALTER TABLE users ADD roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', DROP id_role');
    }
}
