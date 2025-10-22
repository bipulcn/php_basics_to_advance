
Create Database test;
use test;

CREATE TABLE student_info(
  sid varchar(64),
  fname varchar(64),
  mname varchar(64),
  lname varchar(64),
  street_no varchar(64),
  str_name varchar(64),
  city varchar(64),
  department varchar(64),
  dob date,
  semester varchar(64),
  year int(4),
  CONSTRAINT PK_Studnet PRIMARY KEY (sid)
)
