<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230421225429 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT FK_2598381ADCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT FK_2598381A2FBB81F FOREIGN KEY (id_panier) REFERENCES panier (id_panier)');
        $this->addSql('CREATE INDEX IDX_2598381A2FBB81F ON panier_articles (id_panier)');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_commentuser');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_commentarticle');
        $this->addSql('ALTER TABLE commentaire CHANGE id_article id_article INT DEFAULT NULL, CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCDCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6B3CA4B FOREIGN KEY (id_user) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT FK_B7D0A76357AE6D42 FOREIGN KEY (id_favoris) REFERENCES favoris (id)');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT FK_B7D0A763DCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('CREATE INDEX IDX_B7D0A763DCA7A716 ON favoris_article (id_article)');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_userreclam');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY fk_idtyperreclam');
        $this->addSql('ALTER TABLE reclam CHANGE description description VARCHAR(500) NOT NULL, CHANGE image image VARCHAR(500) DEFAULT NULL, CHANGE etat etat VARCHAR(50) NOT NULL');
        $this->addSql('DROP INDEX fk_idtyperreclam ON reclam');
        $this->addSql('CREATE INDEX fk_reclamtype ON reclam (idtyper)');
        $this->addSql('DROP INDEX fk_userreclam ON reclam');
        $this->addSql('CREATE INDEX id_user ON reclam (id_user)');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_userreclam FOREIGN KEY (id_user) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT fk_idtyperreclam FOREIGN KEY (idtyper) REFERENCES typereclamation (idtr)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE user_id user_id INT NOT NULL');
        $this->addSql('ALTER TABLE users DROP blockedAt');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCDCA7A716');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC6B3CA4B');
        $this->addSql('ALTER TABLE commentaire CHANGE id_article id_article INT NOT NULL, CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_commentuser FOREIGN KEY (id_user) REFERENCES users (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_commentarticle FOREIGN KEY (id_article) REFERENCES articles (id_article) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY FK_B7D0A76357AE6D42');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY FK_B7D0A763DCA7A716');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY FK_B7D0A763DCA7A716');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT fk_idfavorisarticle2 FOREIGN KEY (id_favoris) REFERENCES favoris (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT fkid_favorisarticle1 FOREIGN KEY (id_article) REFERENCES articles (id_article) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_b7d0a763dca7a716 ON favoris_article');
        $this->addSql('CREATE INDEX fkid_favorisarticle1 ON favoris_article (id_article)');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT FK_B7D0A763DCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('ALTER TABLE panier_articles DROP FOREIGN KEY FK_2598381ADCA7A716');
        $this->addSql('ALTER TABLE panier_articles DROP FOREIGN KEY FK_2598381A2FBB81F');
        $this->addSql('ALTER TABLE panier_articles DROP FOREIGN KEY FK_2598381A2FBB81F');
        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT fk_panierarticel1 FOREIGN KEY (id_article) REFERENCES articles (id_article) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT fk_panierarticle2 FOREIGN KEY (id_panier) REFERENCES panier (id_panier) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_2598381a2fbb81f ON panier_articles');
        $this->addSql('CREATE INDEX fk_panierarticle2 ON panier_articles (id_panier)');
        $this->addSql('ALTER TABLE panier_articles ADD CONSTRAINT FK_2598381A2FBB81F FOREIGN KEY (id_panier) REFERENCES panier (id_panier)');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY FK_8141D8FEF832D5BF');
        $this->addSql('ALTER TABLE reclam DROP FOREIGN KEY FK_8141D8FE6B3CA4B');
        $this->addSql('ALTER TABLE reclam CHANGE description description VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE etat etat VARCHAR(255) NOT NULL');
        $this->addSql('DROP INDEX fk_reclamtype ON reclam');
        $this->addSql('CREATE INDEX fk_idtyperreclam ON reclam (idtyper)');
        $this->addSql('DROP INDEX id_user ON reclam');
        $this->addSql('CREATE INDEX fk_userreclam ON reclam (id_user)');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT FK_8141D8FEF832D5BF FOREIGN KEY (idtyper) REFERENCES typereclamation (idtr)');
        $this->addSql('ALTER TABLE reclam ADD CONSTRAINT FK_8141D8FE6B3CA4B FOREIGN KEY (id_user) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD blockedAt DATE DEFAULT NULL');
    }
}
