create database movies;
create table movie
(
    id           int auto_increment primary key,
    title        nvarchar(255),
    category_id  int,
    genre_id     int,
    realise_date year,
    rate         decimal,
    quality_id   int,
    age          int,
    run_time     time,
    description  longtext
);

create table categories
(
    id   int primary key auto_increment,
    name varchar(30)
);
alter table movies
    add foreign key (category_id) references categories (id);

create table genre
(
    id   int primary key auto_increment,
    name varchar(30)
);
alter table movies
    add foreign key (genre_id) references genres (id);

create table quality
(
    id   int primary key auto_increment,
    name varchar(30) /* yoki type db ketish keremi?*/
);

alter table movies
    add column country_id int;

create table country
(
    id   int primary key auto_increment,
    name varchar(30)
);

alter table movies
    add foreign key (country_id) references countries (id);

create table plan
(
    id   int primary key auto_increment,
    type varchar(30),
    cost decimal
);

create table user
(
    id       int primary key auto_increment,
    name     varchar(30),
    email    varchar(30),
    password varchar(30)
);

create table Serials
(
    id       int auto_increment primary key,
    movie_id int,
    status   boolean,
    title    nvarchar(30)
);

alter table serials
    add foreign key (movie_id) references movies (id);

create table Comments
(
    id         int primary key auto_increment,
    media_id   int,
    media_type boolean,
    user_id    int,
    reply_id   int,
    likes      int,
    dislike    int,
    text       text,
    created_at date,
    foreign key (user_id) references user (id)
);
insert into categories(name)
VALUES ('comedy');

alter table serials
    add column image nvarchar(30);


alter table movies
    add column image nvarchar(30);

create table serial_images
(
    id        int primary key auto_increment,
    image     nvarchar(30),
    serial_id int,
    foreign key (serial_id) references serials (id)
);

create table movie_images
(
    id       int primary key auto_increment,
    image    nvarchar(30),
    movie_id int,
    foreign key (movie_id) references movies (id)
);

alter table countries
    rename country;
alter table serials
    drop foreign key serials_ibfk_1;

alter table serials
    drop column movie_id;

alter table movies
    add serial_id int null;


