<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241012150022 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_class_subject (student_class_id INT NOT NULL, subject_id INT NOT NULL, INDEX IDX_6B27A118598B478B (student_class_id), INDEX IDX_6B27A11823EDC87 (subject_id), PRIMARY KEY(student_class_id, subject_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE student_class_subject ADD CONSTRAINT FK_6B27A118598B478B FOREIGN KEY (student_class_id) REFERENCES student_class (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_class_subject ADD CONSTRAINT FK_6B27A11823EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student_class_subject DROP FOREIGN KEY FK_6B27A118598B478B');
        $this->addSql('ALTER TABLE student_class_subject DROP FOREIGN KEY FK_6B27A11823EDC87');
        $this->addSql('DROP TABLE student_class_subject');
    }
}
