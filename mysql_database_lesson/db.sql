CREATE database school;
CREATE table teachers(
 id int primary key auto_increment,
 name varchar(225)not null,
 join_date DATE,
 bio Text,
 room_id int,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
## insert data 
INSERT INTO students (
 name, join_date, bio, room_id)
 VALUES ("MayMyatHmu", "2022-02-10", "Student to learn SQL", 221);