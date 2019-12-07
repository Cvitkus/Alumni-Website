INSERT INTO `accounts` (`name`, `email`, `grad_year`, `location`) VALUES ('Colin', 'cvitkus@mail.umw.edu', 2019, 'Fredericksburg');
INSERT INTO `accounts` (`name`, `email`, `grad_year`, `location`) VALUES ('John', 'jdoe1@mail.umw.edu', 2018, 'The Moon');
INSERT INTO `accounts` (`name`, `email`, `grad_year`, `location`) VALUES ('Jane', 'jdoe2@mail.umw.edu', 2017, 'Mars');
INSERT INTO `accounts` (`name`, `email`, `grad_year`, `location`) VALUES ('Mary', 'm@mail.umw.edu', 2016, 'anywhere');
INSERT INTO `accounts` (`name`, `email`, `grad_year`, `location`) VALUES ('Sean', 's@mail.umw.edu', 2015, 'Frederick');
INSERT INTO `accounts` (`name`, `email`, `grad_year`, `location`) VALUES ('Jordan', 'j@mail.umw.edu', 2014, 'burg');
INSERT INTO `accounts` (`name`, `email`, `location`) VALUES ('Anyone', 'noone@mail.umw.edu', 'Fredericksburg');

INSERT INTO `highlights` (`image_path`, `text`) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTW5cJSXfVGKPfEcThBHv0d1b6fNZkqh8qMB5ILKOJLZ350j1f&s', 'skydiving cool');
INSERT INTO `highlights` (`image_path`, `text`) VALUES ('https://www.itchronicles.com/wp-content/uploads/2018/10/bigstock-Programming-Web-Banner-Best-P-258081862.jpg', 'programming meh');
INSERT INTO `highlights` (`image_path`, `text`) VALUES ('https://www.libertyspecialtymarkets.com.my/uploads/assets/cache/file/31756F34-5056-A21F-91C20AFDAA4D0DB2_square-medium.jpg', 'hail bad');
INSERT INTO `highlights` (`image_path`, `text`) VALUES ('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2p6hjxwOsdaJU1nCJsSgxrtU6gPIVfe7t7YaXWzH2ej0kkylA&s', 'idk');




/*
CREATE TABLE IF NOT EXISTS accounts (
        user_id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR (30),
        email VARCHAR (30),
        grad_year INT DEFAULT 1900,
        location VARCHAR(20),
        PRIMARY KEY (user_id)
        );

CREATE TABLE IF NOT EXISTS highlights (
        post_id INT NOT NULL AUTO_INCREMENT,
        image_path VARCHAR(1024),
        text BLOB,
        PRIMARY KEY (post_id)
        );
*/
