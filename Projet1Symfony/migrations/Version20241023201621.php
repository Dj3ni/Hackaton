<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241023201621 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE asset (id INT AUTO_INCREMENT NOT NULL, perso_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, filepath VARCHAR(255) DEFAULT NULL, description LONGTEXT DEFAULT NULL, choice_condition LONGTEXT DEFAULT NULL, INDEX IDX_2AF5A5C1221E019 (perso_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE asset_story (id INT AUTO_INCREMENT NOT NULL, story_node_id INT DEFAULT NULL, asset_id INT DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, INDEX IDX_7E0D2A7F15F10F55 (story_node_id), INDEX IDX_7E0D2A7F5DA1941 (asset_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `character` (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE choice (id INT AUTO_INCREMENT NOT NULL, ending_id INT DEFAULT NULL, text VARCHAR(255) DEFAULT NULL, INDEX IDX_C1AB5A927C6D4E1C (ending_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dialogs (id INT AUTO_INCREMENT NOT NULL, choice_id INT DEFAULT NULL, story_node_id INT DEFAULT NULL, perso_id INT DEFAULT NULL, text LONGTEXT DEFAULT NULL, state VARCHAR(255) DEFAULT NULL, INDEX IDX_B8F7AEA7998666D1 (choice_id), INDEX IDX_B8F7AEA715F10F55 (story_node_id), INDEX IDX_B8F7AEA71221E019 (perso_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ending (id INT AUTO_INCREMENT NOT NULL, story_node_id INT DEFAULT NULL, text LONGTEXT DEFAULT NULL, INDEX IDX_1413D44F15F10F55 (story_node_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE story_choice (id INT AUTO_INCREMENT NOT NULL, choice_id INT DEFAULT NULL, story_node_id INT DEFAULT NULL, INDEX IDX_8EA8E860998666D1 (choice_id), INDEX IDX_8EA8E86015F10F55 (story_node_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE story_node (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, pseudo VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_choice (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, choice_id INT DEFAULT NULL, timestamp DATETIME DEFAULT NULL, INDEX IDX_A4F941AFA76ED395 (user_id), INDEX IDX_A4F941AF998666D1 (choice_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE asset ADD CONSTRAINT FK_2AF5A5C1221E019 FOREIGN KEY (perso_id) REFERENCES `character` (id)');
        $this->addSql('ALTER TABLE asset_story ADD CONSTRAINT FK_7E0D2A7F15F10F55 FOREIGN KEY (story_node_id) REFERENCES story_node (id)');
        $this->addSql('ALTER TABLE asset_story ADD CONSTRAINT FK_7E0D2A7F5DA1941 FOREIGN KEY (asset_id) REFERENCES asset (id)');
        $this->addSql('ALTER TABLE choice ADD CONSTRAINT FK_C1AB5A927C6D4E1C FOREIGN KEY (ending_id) REFERENCES ending (id)');
        $this->addSql('ALTER TABLE dialogs ADD CONSTRAINT FK_B8F7AEA7998666D1 FOREIGN KEY (choice_id) REFERENCES choice (id)');
        $this->addSql('ALTER TABLE dialogs ADD CONSTRAINT FK_B8F7AEA715F10F55 FOREIGN KEY (story_node_id) REFERENCES story_node (id)');
        $this->addSql('ALTER TABLE dialogs ADD CONSTRAINT FK_B8F7AEA71221E019 FOREIGN KEY (perso_id) REFERENCES `character` (id)');
        $this->addSql('ALTER TABLE ending ADD CONSTRAINT FK_1413D44F15F10F55 FOREIGN KEY (story_node_id) REFERENCES story_node (id)');
        $this->addSql('ALTER TABLE story_choice ADD CONSTRAINT FK_8EA8E860998666D1 FOREIGN KEY (choice_id) REFERENCES choice (id)');
        $this->addSql('ALTER TABLE story_choice ADD CONSTRAINT FK_8EA8E86015F10F55 FOREIGN KEY (story_node_id) REFERENCES story_node (id)');
        $this->addSql('ALTER TABLE user_choice ADD CONSTRAINT FK_A4F941AFA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_choice ADD CONSTRAINT FK_A4F941AF998666D1 FOREIGN KEY (choice_id) REFERENCES choice (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE asset DROP FOREIGN KEY FK_2AF5A5C1221E019');
        $this->addSql('ALTER TABLE asset_story DROP FOREIGN KEY FK_7E0D2A7F15F10F55');
        $this->addSql('ALTER TABLE asset_story DROP FOREIGN KEY FK_7E0D2A7F5DA1941');
        $this->addSql('ALTER TABLE choice DROP FOREIGN KEY FK_C1AB5A927C6D4E1C');
        $this->addSql('ALTER TABLE dialogs DROP FOREIGN KEY FK_B8F7AEA7998666D1');
        $this->addSql('ALTER TABLE dialogs DROP FOREIGN KEY FK_B8F7AEA715F10F55');
        $this->addSql('ALTER TABLE dialogs DROP FOREIGN KEY FK_B8F7AEA71221E019');
        $this->addSql('ALTER TABLE ending DROP FOREIGN KEY FK_1413D44F15F10F55');
        $this->addSql('ALTER TABLE story_choice DROP FOREIGN KEY FK_8EA8E860998666D1');
        $this->addSql('ALTER TABLE story_choice DROP FOREIGN KEY FK_8EA8E86015F10F55');
        $this->addSql('ALTER TABLE user_choice DROP FOREIGN KEY FK_A4F941AFA76ED395');
        $this->addSql('ALTER TABLE user_choice DROP FOREIGN KEY FK_A4F941AF998666D1');
        $this->addSql('DROP TABLE asset');
        $this->addSql('DROP TABLE asset_story');
        $this->addSql('DROP TABLE `character`');
        $this->addSql('DROP TABLE choice');
        $this->addSql('DROP TABLE dialogs');
        $this->addSql('DROP TABLE ending');
        $this->addSql('DROP TABLE story_choice');
        $this->addSql('DROP TABLE story_node');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_choice');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
