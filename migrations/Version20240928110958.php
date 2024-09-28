<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240928110958 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE teacher (id INT AUTO_INCREMENT NOT NULL, surname VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, middlename VARCHAR(255) DEFAULT NULL, address LONGTEXT NOT NULL, is_active TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teacher_student_class (teacher_id INT NOT NULL, student_class_id INT NOT NULL, INDEX IDX_AD3DEE7641807E1D (teacher_id), INDEX IDX_AD3DEE76598B478B (student_class_id), PRIMARY KEY(teacher_id, student_class_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE teacher_student_class ADD CONSTRAINT FK_AD3DEE7641807E1D FOREIGN KEY (teacher_id) REFERENCES teacher (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teacher_student_class ADD CONSTRAINT FK_AD3DEE76598B478B FOREIGN KEY (student_class_id) REFERENCES student_class (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE teacher_student_class DROP FOREIGN KEY FK_AD3DEE7641807E1D');
        $this->addSql('ALTER TABLE teacher_student_class DROP FOREIGN KEY FK_AD3DEE76598B478B');
        $this->addSql('DROP TABLE teacher');
        $this->addSql('DROP TABLE teacher_student_class');
    }
}
