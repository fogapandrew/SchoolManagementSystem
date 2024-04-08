DROP DATABASE schoolmanagementsystem;
CREATE DATABASE schoolmanagementsystem;

use schoolmanagementsystem;

CREATE TABLE Student (
    Student_id INT NOT NULL AUTO_INCREMENT,
    First_Name CHAR(50) NOT NULL,
    Last_Name CHAR(50) NOT NULL,
    Phone_number VARCHAR(20),
    Email_address VARCHAR(100),
    Date_Of_Birth DATE NOT NULL,
    Gender CHAR(2) NOT NULL,
    Address VARCHAR(200) NOT NULL,
    PRIMARY KEY (Student_id)
);


-- Creating Teacher table
CREATE TABLE Teacher (
    Teacher_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    First_Name CHAR(50) NOT NULL,
    Last_Name CHAR(50) NOT NULL,
    Phone_number VARCHAR(20),
    Email_address VARCHAR(100),
    Date_Of_Birth DATE NOT NULL,
    Gender CHAR(2) NOT NULL,
    Subjects_Taught VARCHAR(20),
    Years_of_experience INT
);

CREATE TABLE Course (
    Course_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Course_Name CHAR(20) NOT NULL,
    Course_Code CHAR(20) NOT NULL,
    Course_Description VARCHAR(100),
    Credits INT NOT NULL
);

CREATE TABLE Department (
    Department_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Dep_Name CHAR(20) NOT NULL,
    Dep_Code CHAR(10) NOT NULL,
    Dep_Description VARCHAR(50),
    Dep_Contact VARCHAR(20) NOT NULL
);

CREATE TABLE Enrollment (
    Enrollment_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Student_id INT NOT NULL,
    Course_id INT NOT NULL,
    Enroll_Date DATE NOT NULL,
    Complete_Date DATE NOT NULL,
    Enrol_Status CHAR(20) NOT NULL,
    Payment_status CHAR(20) NOT NULL,
    FOREIGN KEY (Student_id) REFERENCES Student(Student_id),
    FOREIGN KEY (Course_id) REFERENCES Course(Course_id)
);

-- Adding foreign key constraints to the Course table
ALTER TABLE Course
ADD Student_id INT NOT NULL,
ADD Teacher_ID INT NOT NULL,
ADD CONSTRAINT fk_Student_id FOREIGN KEY (Student_id) REFERENCES Student(Student_id),
ADD CONSTRAINT fk_Teacher_ID FOREIGN KEY (Teacher_ID) REFERENCES Teacher(Teacher_ID);

-- Adding foreign key constraints to the Teacher table
ALTER TABLE Teacher
ADD Course_id INT NOT NULL,
ADD CONSTRAINT fk_Course_id FOREIGN KEY (Course_id) REFERENCES Course(Course_id);

-- Adding foreign key constraints to the Department table
ALTER TABLE Department
ADD Teacher_id INT NOT NULL,
ADD CONSTRAINT Teacher_id FOREIGN KEY (Teacher_id) REFERENCES Teacher(Teacher_id);


SELECT * FROM Department;
SELECT * FROM Teacher;
SELECT * FROM Course;
SELECT * FROM Enrollment;
SELECT * FROM Student;