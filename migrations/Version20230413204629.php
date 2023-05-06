<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413204629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY fk_articleuser');
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY fk_galeriearticle');
        $this->addSql('DROP INDEX fk_galeriearticle ON articles');
        $this->addSql('DROP INDEX fk_articleuser ON articles');
        $this->addSql('ALTER TABLE articles DROP id_user, DROP id_galerie');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_idtyperreclam');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_userreclam');
        $this->addSql('DROP INDEX fk_idtyperreclam ON reclam');
        $this->addSql('DROP INDEX fk_userreclam ON reclam');
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
        $this->addSql('ALTER TABLE articles ADD id_user INT NOT NULL, ADD id_galerie INT NOT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT fk_articleuser FOREIGN KEY (id_user) REFERENCES users (id_user) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT fk_galeriearticle FOREIGN KEY (id_galerie) REFERENCES galeries (id_galerie) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_galeriearticle ON articles (id_galerie)');
        $this->addSql('CREATE INDEX fk_articleuser ON articles (id_user)');
        $this->addSql('ALTER TABLE reclam ADD idtyper INT NOT NULL, ADD id_user INT NOT NULL');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_idtyperreclam FOREIGN KEY (idtyper) REFERENCES typereclamation (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_userreclam FOREIGN KEY (id_user) REFERENCES users (id_user) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_idtyperreclam ON reclam (idtyper)');
        $this->addSql('CREATE INDEX fk_userreclam ON reclam (id_user)');
        $this->addSql('ALTER TABLE reponse ADD idrec INT NOT NULL');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT fk_reclam_reponse FOREIGN KEY (idrec) REFERENCES reclam (idr) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX fk_reclam_reponse ON reponse (idrec)');
        $this->addSql('ALTER TABLE typereclamation MODIFY idtr INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON typereclamation');
        $this->addSql('ALTER TABLE typereclamation CHANGE idtr id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE typereclamation ADD PRIMARY KEY (id)');
    }
}
