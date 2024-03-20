/*
Luka Mayer
3/20/2024
IT202 Internet Applications | Section 006
Phase 3 Assignment: Create SQL Data using PHP
ldm29@njit.edu 

Version 1.0
*/

CREATE TABLE techaccessoriesCategories (
 techaccessoriesCategoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
 techaccessoriesCategoryName     VARCHAR(64)   NOT NULL,
 dateCreated                     DATETIME       NOT NULL,
 PRIMARY KEY (techaccessoriesCategoryID )
);


CREATE TABLE techaccessories (
 techaccessoriesID               INT(11)        NOT NULL   AUTO_INCREMENT,
 techaccessoriesCategoryID       INT(11)        NOT NULL,
 techaccessoriesCode             VARCHAR(10)    NOT NULL   UNIQUE,
 techaccessoriesName             VARCHAR(64)   NOT NULL,
 description                     TEXT           NOT NULL,
 price                           DECIMAL(10,2)  NOT NULL,
 techaccessoriesStock            INT(11)        NOT NULL,
 dateCreated                     DATETIME       NOT NULL,
 PRIMARY KEY (techaccessoriesID )
);