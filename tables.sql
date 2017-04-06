create table users (
	emailID varchar(40) not null primary key,
	password varchar(40) not null
);

create table profiles (
	emailID varchar(40) not null primary key,
	fname varchar(15) not null,
	lname varchar(15) not null,
	dob char(10) not null,
	cellno char(10) not null,
	cv_file varchar(44) not null
);
