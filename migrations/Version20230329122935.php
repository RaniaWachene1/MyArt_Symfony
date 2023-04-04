<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230329122935 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE role (id_role INT AUTO_INCREMENT NOT NULL, desc_role VARCHAR(15) DEFAULT NULL, PRIMARY KEY(id_role)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE articles CHANGE id_galerie id_galerie INT DEFAULT NULL, CHANGE rate rate INT NOT NULL');
        $this->addSql('ALTER TABLE users ADD id_role INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9DC499668 FOREIGN KEY (id_role) REFERENCES role (id_role)');
        $this->addSql('CREATE INDEX id_role ON users (id_role)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9DC499668');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE articles CHANGE id_galerie id_galerie INT NOT NULL, CHANGE rate rate INT DEFAULT 0 NOT NULL');
        $this->addSql('DROP INDEX id_role ON users');
        $this->addSql('ALTER TABLE users DROP id_role');
    }
}
