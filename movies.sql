create database movies;
create table movie(
                      id int auto_increment primary key,
                      title nvarchar(255),
                      category_id int,
                      genre_id int,
                      realise_date year,
                      rate decimal,
                      quality_id int,
                      age int,
                      run_time time,
                      description longtext
);

create table category(
                         id int primary key auto_increment,
                         name varchar(30)
);
alter table movie
    add foreign key (category_id) references category(id);

create table genre(
                      id int primary key auto_increment,
                      name varchar(30)
);
alter table movie
    add foreign key (genre_id) references genre(id);

create table quality(
                        id int primary key auto_increment,
                        name varchar(30) /* yoki type db ketish keremi?*/
);

alter table movie
    add column country_id int;

create table country(
                        id int primary key auto_increment,
                        name varchar(30)
);

alter table movie
    add foreign key (country_id) references country(id);

create table plan(
                     id int primary key auto_increment,
                     type varchar(30),
                     cost decimal
);

create table user(
                     id int primary key auto_increment,
                     name varchar(30),
                     email varchar(30),
                     password varchar(30)
);