<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230418023516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_commentarticle');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY fk_commentuser');
        $this->addSql('ALTER TABLE commentaire CHANGE id_article id_article INT DEFAULT NULL, CHANGE id_user id_user INT DEFAULT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCDCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC6B3CA4B FOREIGN KEY (id_user) REFERENCES users (id_user)');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY fkid_favorisarticle1');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY fk_idfavorisarticle2');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY fkid_favorisarticle1');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT FK_B7D0A76357AE6D42 FOREIGN KEY (id_favoris) REFERENCES favoris (id)');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT FK_B7D0A763DCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
        $this->addSql('DROP INDEX fkid_favorisarticle1 ON favoris_article');
        $this->addSql('CREATE INDEX IDX_B7D0A763DCA7A716 ON favoris_article (id_article)');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT fkid_favorisarticle1 FOREIGN KEY (id_article) REFERENCES articles (id_article) ON UPDATE CASCADE ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCDCA7A716');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC6B3CA4B');
        $this->addSql('ALTER TABLE commentaire CHANGE id_article id_article INT NOT NULL, CHANGE id_user id_user INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_commentarticle FOREIGN KEY (id_article) REFERENCES articles (id_article) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT fk_commentuser FOREIGN KEY (id_user) REFERENCES users (id_user) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY FK_B7D0A76357AE6D42');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY FK_B7D0A763DCA7A716');
        $this->addSql('ALTER TABLE favoris_article DROP FOREIGN KEY FK_B7D0A763DCA7A716');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT fkid_favorisarticle1 FOREIGN KEY (id_article) REFERENCES articles (id_article) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT fk_idfavorisarticle2 FOREIGN KEY (id_favoris) REFERENCES favoris (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_b7d0a763dca7a716 ON favoris_article');
        $this->addSql('CREATE INDEX fkid_favorisarticle1 ON favoris_article (id_article)');
        $this->addSql('ALTER TABLE favoris_article ADD CONSTRAINT FK_B7D0A763DCA7A716 FOREIGN KEY (id_article) REFERENCES articles (id_article)');
    }
}
