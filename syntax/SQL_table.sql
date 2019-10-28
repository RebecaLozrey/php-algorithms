<?php

CREATE TABLE post(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    subject varchar(128) NOT NULL,
    content varchar(1000) NOT NULL,
    date datetime NOT NULL,
);