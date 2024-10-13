<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012161826 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE result (id INT AUTO_INCREMENT NOT NULL, student_id INT NOT NULL, session_id INT NOT NULL, term_id INT NOT NULL, student_class_id INT NOT NULL, subject_id INT NOT NULL, score SMALLINT NOT NULL, grade VARCHAR(10) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_136AC113CB944F1A (student_id), INDEX IDX_136AC113613FECDF (session_id), INDEX IDX_136AC113E2C35FC (term_id), INDEX IDX_136AC113598B478B (student_class_id), INDEX IDX_136AC11323EDC87 (subject_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC113CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC113613FECDF FOREIGN KEY (session_id) REFERENCES session (id)');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC113E2C35FC FOREIGN KEY (term_id) REFERENCES term (id)');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC113598B478B FOREIGN KEY (student_class_id) REFERENCES student_class (id)');
        $this->addSql('ALTER TABLE result ADD CONSTRAINT FK_136AC11323EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC113CB944F1A');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC113613FECDF');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC113E2C35FC');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC113598B478B');
        $this->addSql('ALTER TABLE result DROP FOREIGN KEY FK_136AC11323EDC87');
        $this->addSql('DROP TABLE result');
    }
}
