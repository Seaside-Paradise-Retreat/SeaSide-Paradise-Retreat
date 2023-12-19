-- creat database with name Seaside_paradise_retreat
CREATE TABLE `Users` (
    `id` int(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(100) NOT NULL,
    `avata` varchar(500) NOT NULL,
    `password` varchar(500) NOT NULL,
    `phone` varchar(10) NOT NULL,
    `email` varchar(50) NOT NULL,
    `age` int(11) NOT NULL,
    `gender` varchar(10) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Rooms` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `type` VARCHAR(50) NOT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    `availability` BOOLEAN NOT NULL,
    `description` VARCHAR(500) NOT NULL,
    `evaluation` VARCHAR(2000),
    `rating` INT(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Detail_room` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `room_id` INT(11) NOT NULL,
    `image_url` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE 'Booking' (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_room INT,
  id_user INT,
  check_in_date DATE,
  check_out_date DATE,
  FOREIGN KEY (id_room) REFERENCES Rooms(id),
  FOREIGN KEY (id_user) REFERENCES Users(id)
);

CREATE TABLE 'Feedback' (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_room INT NOT NULL,
  id_user INT NOT NULL,
  rating INT NOT NULL,
  content VARCHAR(255),
  FOREIGN KEY (id_room) REFERENCES Rooms(id),
  FOREIGN KEY (id_user) REFERENCES Users(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE 'Booking_history'(
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
