<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413004042 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY fk_galeriearticle');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY fk_articleuser');
        $this->addSql('DROP INDEX fk_galeriearticle ON articles');
        $this->addSql('DROP INDEX fk_articleuser ON articles');
        $this->addSql('ALTER TABLE articles DROP id_user, DROP id_galerie');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_idtyperreclam');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_userreclam');
        $this->addSql('DROP INDEX fk_userreclam ON reclam');
        $this->addSql('DROP INDEX fk_idtyperreclam ON reclam');
        $this->addSql('ALTER TABLE reclam DROP idtyper, DROP id_user');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY fk_reclam_reponse');
        $this->addSql('DROP INDEX fk_reclam_reponse ON reponse');
        $this->addSql('ALTER TABLE reponse DROP idrec');
        $this->addSql('ALTER TABLE typereclamation MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON typereclamation');
        $this->addSql('ALTER TABLE typereclamation CHANGE id idtr INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typereclamation ADD PRIMARY KEY (idtr)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE articles ADD id_user INT NOT NULL, ADD id_galerie INT NOT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT fk_galeriearticle FOREIGN KEY (id_galerie) REFERENCES galeries (id_galerie) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT fk_articleuser FOREIGN KEY (id_user) REFERENCES users (id_user) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_galeriearticle ON articles (id_galerie)');
        $this->addSql('CREATE INDEX fk_articleuser ON articles (id_user)');
        $this->addSql('ALTER TABLE reclam ADD idtyper INT NOT NULL, ADD id_user INT NOT NULL');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_idtyperreclam FOREIGN KEY (idtyper) REFERENCES typereclamation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_userreclam FOREIGN KEY (id_user) REFERENCES users (id_user) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_userreclam ON reclam (id_user)');
        $this->addSql('CREATE INDEX fk_idtyperreclam ON reclam (idtyper)');
        $this->addSql('ALTER TABLE reponse ADD idrec INT NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT fk_reclam_reponse FOREIGN KEY (idrec) REFERENCES reclam (idr) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_reclam_reponse ON reponse (idrec)');
        $this->addSql('ALTER TABLE typereclamation MODIFY idtr INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON typereclamation');
        $this->addSql('ALTER TABLE typereclamation CHANGE idtr id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typereclamation ADD PRIMARY KEY (id)');
    }
}
