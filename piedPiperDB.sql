
-- create table for membership
CREATE TABLE `membership` (
 `membership_id` int(11) NOT NULL AUTO_INCREMENT,
 `membership_duration` int(11) NOT NULL,
 `membership_price` decimal(10,0) NOT NULL,
 PRIMARY KEY (`membership_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci


-- crate a table for usermembership
CREATE TABLE `usermembership` (
 `membership_id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `start_date` date NOT NULL,
 `end_date` date NOT NULL,
 PRIMARY KEY (`membership_id`),
 KEY `user_id` (`user_id`),
 CONSTRAINT `usermembership_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
 CONSTRAINT `usermembership_ibfk_2` FOREIGN KEY (`membership_id`) REFERENCES `membership` (`membership_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci



-- create table for users
CREATE TABLE `users` (
 `user_id` int(11) NOT NULL AUTO_INCREMENT,
 `Name` varchar(30) NOT NULL,
 `user_name` varchar(30) NOT NULL,
 `password` varchar(30) NOT NULL,
 `user_email` varchar(30) NOT NULL,
 PRIMARY KEY (`user_id`),
 UNIQUE KEY `user_email` (`user_email`),
 UNIQUE KEY `user_name` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci



-- add Random services to the tables
-- Insert random values into the services table
-- Insert random non-duplicated values into the services table
INSERT INTO services (service_1, service_2, service_3)
SELECT *
FROM (
    SELECT t.service_1, t.service_2, t.service_3
    FROM (
        SELECT 'couch' AS service_1, 'swimming pool' AS service_2, 'meal' AS service_3
        UNION ALL
        SELECT 'couch', 'meal', 'swimming pool'
        UNION ALL
        SELECT 'swimming pool', 'couch', 'meal'
        UNION ALL
        SELECT 'swimming pool', 'meal', 'couch'
        UNION ALL
        SELECT 'meal', 'couch', 'swimming pool'
        UNION ALL
        SELECT 'meal', 'swimming pool', 'couch'
    ) t
    ORDER BY RAND()
    LIMIT 1
) x;


-- fesback table 
CREATE TABLE `feedback` (
 `trainer_name` varchar(30) DEFAULT NULL,
 `trainer_rating` int(11) DEFAULT NULL,
 `gym_feedback` varchar(300) DEFAULT NULL,
 `contact_methods` varchar(30) DEFAULT NULL,
 `equipment_satisfaction` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci
