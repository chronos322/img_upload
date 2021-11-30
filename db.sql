create database img;
create table upload (
    img_id int(11) primary key auto_increment not null,
    img_name varchar(255),
    uploaddate datetime
);