-- DROP DATABASE schoolmanagementsystem;
CREATE DATABASE schoolmanagementsystem;

use schoolmanagementsystem;

CREATE TABLE Student (
    Student_id INT NOT NULL AUTO_INCREMENT,
    First_Name CHAR(50) NOT NULL,
    Last_Name CHAR(50) NOT NULL,
    Phone_number VARCHAR(20),
    Email_address VARCHAR(255),
    Date_Of_Birth DATE NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Country_of_residence VARCHAR(100),
    Address VARCHAR(255) NOT NULL,
    PRIMARY KEY (Student_id)
);


-- Creating Teacher table
CREATE TABLE Teacher (
    Teacher_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    First_Name CHAR(50) NOT NULL,
    Last_Name CHAR(50) NOT NULL,
    Phone_number VARCHAR(20),
    Email_address VARCHAR(255),
    Date_Of_Birth DATE NOT NULL,
    Gender ENUM('M', 'F') NOT NULL,
    Subjects_Taught VARCHAR(20),
    Country_of_residence VARCHAR(100),
    Years_of_experience INT
);

CREATE TABLE Course (
    Course_id INT(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Course_Name CHAR(20) NOT NULL,
    Course_Code CHAR(20) NOT NULL,
    Course_Description VARCHAR(100),
    Credits INT NOT NULL,
    Teacher_id INT NOT NULL,
    FOREIGN KEY (Student_id) REFERENCES Student(Student_id),
    FOREIGN KEY (Teacher_id) REFERENCES Teacher(Teacher_id)
);

CREATE TABLE Department (
    Department_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Dep_Name CHAR(20) NOT NULL,
    Dep_Code CHAR(10) NOT NULL,
    Dep_Description VARCHAR(50),
    Dep_Contact VARCHAR(20) NOT NULL,
    Program_id INT NOT NULL,
    Teacher_id INT NOT NULL,
    FOREIGN KEY (Program_id) REFERENCES Program(Program_id),
    FOREIGN KEY(Teacher_id) REFERENCES Teacher(Teacher_id)
);

CREATE TABLE Enrollment (
    Enrollment_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Student_id INT NOT NULL,
    Program_id INT NOT NULL,
    Enroll_Date DATE NOT NULL,
    Complete_Date DATE NOT NULL,
    Enroll_Status VARCHAR(20) NOT NULL,
    Payment_status VARCHAR(20) NOT NULL,
    FOREIGN KEY (Student_id) REFERENCES Student(Student_id),
    FOREIGN KEY (Program_id) REFERENCES Program(Program_id)
);

CREATE TABLE Program(
    Program_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Program_Name VARCHAR(20),
    Course_id INT NOT NULL,
    FOREIGN KEY (Course_id) REFERENCES Course(Course_id)
);

CREATE TABLE Course_Student (
    Course_id INT NOT NULL,
    Student_id INT NOT NULL,
    PRIMARY KEY (Course_id, Student_id),
    FOREIGN KEY (Course_id) REFERENCES Course(Course_id),
    FOREIGN KEY (Student_id) REFERENCES Student(Student_id)
);

CREATE TABLE Course_Teacher (
    Course_id INT NOT NULL,
    Teacher_id INT NOT NULL,
    PRIMARY KEY (Course_id, Teacher_id),
    FOREIGN KEY (Course_id) REFERENCES Course(Course_id),
    FOREIGN KEY (Teacher_id) REFERENCES Teacher(Teacher_id)
);
-- Adding foreign key constraints to the Course table
-- ALTER TABLE Course
-- ADD Student_id INT NOT NULL,
-- ADD Teacher_ID INT NOT NULL,
-- ADD CONSTRAINT fk_Student_id FOREIGN KEY (Student_id) REFERENCES Student(Student_id),
-- ADD CONSTRAINT fk_Teacher_ID FOREIGN KEY (Teacher_ID) REFERENCES Teacher(Teacher_ID);

-- -- Adding foreign key constraints to the Teacher table
-- ALTER TABLE Teacher
-- ADD Course_id INT NOT NULL,
-- ADD CONSTRAINT fk_Course_id FOREIGN KEY (Course_id) REFERENCES Course(Course_id);

-- -- Adding foreign key constraints to the Department table
-- ALTER TABLE Department
-- ADD Teacher_id INT NOT NULL,
-- ADD CONSTRAINT Teacher_id FOREIGN KEY (Teacher_id) REFERENCES Teacher(Teacher_id);


SELECT * FROM Department;
SELECT * FROM Teacher;
SELECT * FROM Course;
SELECT * FROM Enrollment;
SELECT * FROM Student;
Select * FROM Program