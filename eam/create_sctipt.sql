-- MySQL Script
-- -----------------------------------------------------
-- Base is  sdi1500039


DROP TABLE Users;
DROP TABLE Student;
DROP TABLE Secretary;
DROP TABLE University;
DROP TABLE Department;
DROP TABLE Books;

-- -----------------------------------------------------
-- Table sdi1500039.Users
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Users (
  idUsers INT AUTO_INCREMENT NOT NULL ,
  Email VARCHAR(250) NOT NULL,
  Password VARCHAR(45) NOT NULL,
  FirstName VARCHAR(250) NOT NULL,
  LastName VARCHAR(250) NOT NULL,
  DateOfBirth VARCHAR(250) NOT NULL,
  Phone VARCHAR(10) NULL,
  Address VARCHAR(250) NULL,
  UserType VARCHAR(250) NOT NULL,
  PRIMARY KEY (idUsers)
);

-- -----------------------------------------------------
-- Table sdi1500039.Student
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Student (
  idStudent INT NOT NULL,
  DepartmentName VARCHAR(250) NOT NULL,
  UniversityName VARCHAR(250) NOT NULL,
  PRIMARY KEY (idStudent)
);

-- -----------------------------------------------------
-- Table sdi1500039.Secretary
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Secretary (
  idSecretary INT NOT NULL,
  UniversityName VARCHAR(250) NOT NULL,
  DepartmentName VARCHAR(250) NOT NULL,
  PRIMARY KEY (idSecretary)
);

-- -----------------------------------------------------
-- Table sdi1500039.Publisher
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Publisher (
  idPublisher INT NOT NULL,
  IdNumber VARCHAR(10) NOT NULL,
  TaxNumber VARCHAR(10) NOT NULL,
  Amka VARCHAR(10) NOT NULL,
  PRIMARY KEY (idPublisher)
);
-- -----------------------------------------------------
-- Table sdi1500039.University
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.University (
  UniversityName VARCHAR(250) NOT NULL,
  PRIMARY KEY (UniversityName)
);

-- -----------------------------------------------------
-- Table sdi1500039.Department
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS sdi1500039.Department (
  DepartmentName VARCHAR(250) NOT NULL,
  UniversityName VARCHAR(250) NOT NULL,
  CONSTRAINT PK_Department PRIMARY KEY (UniversityName, DepartmentName)
);

-- -----------------------------------------------------
-- Table sdi1500039.Books
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS Books (
  ISBN INT NOT NULL,
  Name VARCHAR(250) NULL,
  Author VARCHAR(250) NULL,
  PublishYear INT NULL,
  Publisher VARCHAR(250) NOT NULL,
  PRIMARY KEY (ISBN)
);

-- -----------------------------------------------------
-- Insert some mock data
-- -----------------------------------------------------
INSERT INTO `University`(`UniversityName`)
                VALUES ('National and Kapodistrian Univeristy of Athens');
INSERT INTO `University`(`UniversityName`)
                VALUES ('Aristotelian Univerity of Thesalonica');

INSERT INTO `Department`(`DepartmentName`, `UniversityName`)
                        VALUES ('Department of Informatics and Telecomunications', 'National and Kapodistrian Univeristy of Athens');
INSERT INTO `Department`(`DepartmentName`, `UniversityName`)
                        VALUES ('Department of Mathematics', 'National and Kapodistrian Univeristy of Athens');
INSERT INTO `Department`(`DepartmentName`, `UniversityName`)
                        VALUES ('Department of Mathematics', 'Aristotelian Univerity of Thesalonica');

-- -----------------------------------------------------
-- Insert student
-- -----------------------------------------------------
INSERT INTO `Users`(`idUsers`, `Email`, `Password`, `FirstName`, `LastName`,
                    `DateOfBirth`, `Phone`, `Address`, `UserType`)
                    VALUES (0, 'dougas97@gmail.com', '123456789', 'Vagos',
                            'Spi', '10', '2102102102', 'Thar 5, ath, 17', 'Student');

INSERT INTO `Student`(`idStudent`, `DepartmentName`, `UniversityName`)
                VALUES (0, 'Department of Informatics and Telecomunications',
                        'National and Kapodistrian Univeristy of Athens' );

-- -----------------------------------------------------
-- Insert Secretary
-- -----------------------------------------------------
INSERT INTO `Users`(`idUsers`, `Email`, `Password`, `FirstName`, `LastName`,
                    `DateOfBirth`, `UserType`)
                    VALUES (1, 'sdi1500147@di.uoa.com', '987654321', 'Nancy',
                            'Nanacy', '10', 'Secretary');

INSERT INTO `Secretary`(`idSecretary`, `DepartmentName`, `UniversityName`)
                    VALUES (1, 'Department of Informatics and Telecomunications',
                            'National and Kapodistrian Univeristy of Athens' );

-- -----------------------------------------------------
-- Insert Publisher
-- -----------------------------------------------------
INSERT INTO `Users`(`idUsers`, `Email`, `Password`, `FirstName`, `LastName`,
                    `DateOfBirth`, `UserType`)
                    VALUES (2, 'joeDoe11@di.uoa.com', 'abcdefghij', 'Joe',
                            'Doe', '10', 'Publisher');

INSERT INTO `Publisher`(`idPublisher`, `IdNumber`, `TaxNumber`, `Amka`)
                    VALUES (2, 'A123456789', '9876543210', '1472583690');

-- -----------------------------------------------------
-- Insert Books
-- -----------------------------------------------------
INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (111, 'Discrete MAths', 'Rosen', '1997', 'Publisher A');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (222, 'Calcullus', 'Thomas', '1997', 'Publisher B');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (333, 'The C++ Programming Language', 'Stroustup', '1997', 'Publisher C');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (444, 'The C Programming Language', 'K & R', '1997', 'Publisher A');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (555, 'Graphics and Visualisation', 'Theoxaris', '1997', 'Publisher A');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (666, 'Stoixeia of Discrete Maths', 'Liu', '1997', 'Publisher B');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (777, 'Introduction to Algorithms', 'Someone', '1997', 'Publisher A');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (888, 'Carrer Guide', 'Kapoioiw', '1997', 'Publisher C');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (999, 'Introducation to Philosophy', 'Joe Doe', '1997', 'Publisher C');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (123, 'AIMA', 'Koubarakis and Takis', '1997', 'Publisher B');

INSERT INTO `Books`(`ISBN`, `Name`, `Author`, `PublishYear`, `Publisher`)
                    VALUES (741, 'History of the Ancient World', 'Me', '1997', 'Publisher B');
