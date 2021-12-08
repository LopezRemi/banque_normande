DROP DATABASE IF EXISTS banque_normande;

CREATE DATABASE banque_normande CHARACTER SET 'utf8';

CREATE TABLE IF NOT EXISTS User (
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR (30) NOT NULL,
    last_name VARCHAR (30) NOT NULL,
    user_account_creation DATE NOT NULL,
    birthday DATE NOT NULL,
    email varchar (255) NOT NULL,
    passwordHash binary (64) NOT NULL,
    adresse varchar (128) NOT NULL,
    postcode int (10) NOT NULL,
    phone int (12) NOT NULL,
    country text (30) NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB;

insert into
    User
values
    (
        default,
        "Rémi",
        "Lopez",
        now(),
        "1989-05-25",
        "dev@gmail.com",
        "azerty",
        "12 rue pouet",
        70307,
        0202020202,
        "France"
    );

CREATE TABLE IF NOT EXISTS Account (
    id int not null AUTO_INCREMENT,
    account_number int not null,
    amount float not null,
    account_type varchar (20) not null,
    account_creation_date DATE not null,
    owner_id int not null,
    PRIMARY KEY (id)
) ENGINE = INNODB;

ALTER TABLE Account
ADD CONSTRAINT FK_user_account FOREIGN KEY (owner_id) REFERENCES User(id);

insert into
    Account
values
    (default,2839281,3222312,"Epargne",now(),default
    );

CREATE TABLE IF NOT EXISTS operation (
    id int UNSIGNED not null AUTO_INCREMENT,
    operation_amount int (25) not null,
    operation_status varchar (20) not null,
    operation_date DATE not null,
    operation_type varchar (20) not null,
    account_id int (20),
    PRIMARY KEY (id)
) ENGINE = INNODB;

ALTER TABLE operation
ADD CONSTRAINT FK_Account_operation FOREIGN KEY (account_id) REFERENCES Account(id);

insert into
    operation
values
    (default,20,"done",now(),"transfer",default
    );