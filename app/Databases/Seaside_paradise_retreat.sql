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
    `rating` INT(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Detail_room` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_room` INT(11) NOT NULL,
    `image_url` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `Convenients` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `id_room` INT(11) NOT NULL,
    'convenient' VARCHAR(255) NOT NULL
    PRIMARY KEY (`id`),
    FOREIGN KEY (`room_id`) REFERENCES `Rooms` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE 'Favorite' (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_room INT,
  id_user INT,
  FOREIGN KEY (id_room) REFERENCES Rooms(id),
  FOREIGN KEY (id_user) REFERENCES Users(id)
);

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
  data DATE,
  FOREIGN KEY (id_room) REFERENCES Rooms(id),
  FOREIGN KEY (id_user) REFERENCES Users(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE 'Bill'(
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_booking INT NOT NULL,
  date  DATE,
  total_price DECIMAL,
  FOREIGN KEY (id_booking) REFERENCES Booking_history(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE 'Booking_history'(
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_booking INT NOT NULL,
  id_user INT NOT NULL,
  id_bill INT NOT NULL,
  FOREIGN KEY (id_bill) REFERENCES Bill(id),
  FOREIGN KEY (id_user) REFERENCES Users(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



-- inser data into Rooms
INSERT INTO Rooms (name, type, price, availability, description, rating)
VALUES ('Duluxe', 'Deluxe', 50, 1, 'Deluxe Rooms are luxurious and spacious hotel accommodations, featuring modern amenities and stunning city views. Bringing visitors memorable and enjoyable experiences', 4),

('Chic Lounge Oasis', 'Deluxe',100, 0, 'Premium service along with a wide range of amenities will bring you the experience of the most fulfilling vacation.The 24-hour reception desk is always ready to serve you from check-in to check-out or any requests. If you need help, please contact the reception team, we are always ready to assist you.', 5),

('The Prestige Parlor', 'Family room',120, 1, 'Prestige Parlor is a luxurious living room that exudes elegance and sophistication. Every aspect of this room has been carefully designed to create a feeling of prestige and sophistication.', 5),

('Paradise of Rest', 'Family room',200, 1, 'Paradise of Rest is a living room designed to create a wonderful space of relaxation and rest. It brings a feeling of peace, comfort and convenience, helping you find relaxation and refresh your spirit.', 5),

('Peaceful Room', 'Family room',90, 1, 'Peaceful Living Room: This living room creates a peaceful and relaxing space. Soft colors, dim lights and comfortable furniture can be used to create an airy and relaxing space.', 5),

('Honeymoon Suite', 'Family room',120, 1, 'Honeymoon Suite is a type of hotel room specially designed to serve newlyweds or couples who want to enjoy romantic and special moments during their honeymoon. This room is often spacious and beautifully decorated to create an ideal space for love and romance.', 5),

('Royal Parlor', 'Family room',60, 1, 'Prestige Parlor is a luxurious living room that exudes elegance and sophistication. Every aspect of this room has been carefully designed to create a feeling of prestige and sophistication', 5),

('Glamorous Den ', 'Suite',160, 1, 'Glamorous Den is a room full of charm and luxury, creating a classy and stylish resort space. With exquisite design and unique furniture, this room brings a desirable living space to customers.', 5),

('Regal Gathering Space', 'Family room',230, 1, 'Regal Gathering Space is a great space to gather and meet, giving you a luxurious and elegant space to hold special events. With its premium design and spacious space, this room creates a cozy and classy environment for important meetings and events.', 5),

('Artistic Lounge Retreat', 'View',80, 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space of relaxation and creativity.', 5),

('Artistic Lounge Retreat', 'View',80, 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space of relaxation and creativity.', 5),
('Artistic Lounge Retreat', 'View',80, 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space of relaxation and creativity.', 5),
('Artistic Lounge Retreat', 'View',80, 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space of relaxation and creativity.', 5),
('Artistic Lounge Retreat', 'View',80, 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space of relaxation and creativity.', 5),
('Artistic Lounge Retreat', 'View',80, 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space of relaxation and creativity.', 5),
('Stylish Sitting Area ', 'Suite',56, 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite',56, 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite',56, 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite',56, 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite',56, 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5);

INSERT INTO Detail_room (id_room, image_url, convenient) VALUES
(1, '../../../public/images/duluxe_room1.jpg'),
(1, '../../../public/images/duluxe_room2.jpg'),
(1, '../../../public/images/duluxe_room3.jpg'),
(1, '../../../public/images/duluxe_room4.jpg'),
(1, '../../../public/images/duluxe_room5.jpg'),
(2, '../../../public/images/chic_lounge_oasis_room1.png'),
(2, '../../../public/images/chic_lounge_oasis_room2.png'),
(2, '../../../public/images/chic_lounge_oasis_room3.png'),
(2, '../../../public/images/chic_lounge_oasis_room4.png'),
(2, '../../../public/images/chic_lounge_oasis_room5.png');
(3, '../../../public/images/paradise_of_rest_room1.png'),
(3, '../../../public/images/paradise_of_rest_room2.png'),
(3, '../../../public/images/paradise_of_rest_room3.png'),
(3, '../../../public/images/paradise_of_rest_room4.png'),
(3, '../../../public/images/paradise_of_rest_room5.png');
(4, '../../../public/images/peaceful_room1.png'),
(4, '../../../public/images/peaceful_room2.png'),
(4, '../../../public/images/peaceful_room3.png'),
(4, '../../../public/images/peaceful_room4.png'),
(4, '../../../public/images/peaceful_room5.png');
(5, '../../../public/images/honeymoon_suite_room1.png'),
(5, '../../../public/images/honeymoon_suite_room2.png'),
(5, '../../../public/images/honeymoon_suite_room3.png'),
(5, '../../../public/images/honeymoon_suite_room4.png'),
(5, '../../../public/images/honeymoon_suite_room5.png');
(6, '../../../public/images/royal_parlor_room1.png'),
(6, '../../../public/images/royal_parlor_room2.png'),
(6, '../../../public/images/royal_parlor_room3.png'),
(6, '../../../public/images/royal_parlor_room4.png'),
(6, '../../../public/images/royal_parlor_room5.png');
(7, '../../../public/images/glamorous_den_room1.png'),
(7, '../../../public/images/glamorous_den_room2.png'),
(7, '../../../public/images/glamorous_den_room3.png'),
(7, '../../../public/images/glamorous_den_room4.png'),
(7, '../../../public/images/glamorous_den_room5.png');
(8, '../../../public/images/regal_gathering_space_room1.png'),
(8, '../../../public/images/regal_gathering_space_room2.png'),
(8, '../../../public/images/regal_gathering_space_room3.png'),
(8, '../../../public/images/regal_gathering_space_room4.png'),
(8, '../../../public/images/regal_gathering_space_room5.png');
(9, '../../../public/images/artistic_lounge_retreat_room1.png'),
(9, '../../../public/images/artistic_lounge_retreat_room2.png'),
(9, '../../../public/images/artistic_lounge_retreat_room3.png'),
(9, '../../../public/images/artistic_lounge_retreat_room4.png'),
(9, '../../../public/images/artistic_lounge_retreat_room5.png');
(10, '../../../public/images/chic_lounge_oasis_room1.png'),
(10, '../../../public/images/chic_lounge_oasis_room2.png'),
(10, '../../../public/images/chic_lounge_oasis_room3.png'),
(10, '../../../public/images/chic_lounge_oasis_room4.png'),
(10, '../../../public/images/chic_lounge_oasis_room5.png');
(11, '../../../public/images/glamorous_den_room1.png'),
(11, '../../../public/images/glamorous_den_room2.png'),
(11, '../../../public/images/glamorous_den_room3.png'),
(11, '../../../public/images/glamorous_den_room4.png'),
(11, '../../../public/images/glamorous_den_room5.png');
(12, '../../../public/images/peaceful_room1.png'),
(12, '../../../public/images/peaceful_room2.png'),
(12, '../../../public/images/peaceful_room3.png'),
(12, '../../../public/images/peaceful_room4.png'),
(12, '../../../public/images/peaceful_room5.png');
(13, '../../../public/images/honeymoon_suite_room1.png'),
(13, '../../../public/images/honeymoon_suite_room2.png'),
(13, '../../../public/images/honeymoon_suite_room3.png'),
(13, '../../../public/images/honeymoon_suite_room4.png'),
(13, '../../../public/images/honeymoon_suite_room5.png');
(14, '../../../public/images/duluxe_room1.png'),
(14, '../../../public/images/duluxe_room2.png'),
(14, '../../../public/images/duluxe_room3.png'),
(14, '../../../public/images/duluxe_room4.png'),
(14, '../../../public/images/duluxe_room5.png');
(15, '../../../public/images/glamorous_den_room1.png'),
(15, '../../../public/images/glamorous_den_room2.png'),
(15, '../../../public/images/glamorous_den_room3.png'),
(15, '../../../public/images/glamorous_den_room4.png'),
(15, '../../../public/images/glamorous_den_room5.png');
(16, '../../../public/images/honeymoon_suite_room1.png'),
(16, '../../../public/images/honeymoon_suite_room2.png'),
(16, '../../../public/images/honeymoon_suite_room3.png'),
(16, '../../../public/images/honeymoon_suite_room4.png'),
(16, '../../../public/images/honeymoon_suite_room5.png');
(18, '../../../public/images/artistic_lounge_retreat_room1.png'),
(18, '../../../public/images/artistic_lounge_retreat_room2.png'),
(18, '../../../public/images/artistic_lounge_retreat_room3.png'),
(18, '../../../public/images/artistic_lounge_retreat_room4.png'),
(18, '../../../public/images/artistic_lounge_retreat_room5.png');
(19, '../../../public/images/chic_lounge_oasis_room1.png'),
(19, '../../../public/images/chic_lounge_oasis_room2.png'),
(19, '../../../public/images/chic_lounge_oasis_room3.png'),
(19, '../../../public/images/chic_lounge_oasis_room4.png'),
(19, '../../../public/images/chic_lounge_oasis_room5.png');
(20, '../../../public/images/honeymoon_suite_room1.png'),
(20, '../../../public/images/honeymoon_suite_room2.png'),
(20, '../../../public/images/honeymoon_suite_room3.png'),
(20, '../../../public/images/honeymoon_suite_room4.png'),
(20, '../../../public/images/honeymoon_suite_room5.png');
INSERT INTO Convenients (id_room, convenient) VALUES
(1, 'Air conditioning, Television, 2 bed, 1 bath, wifi'),
(2, 'Television, 3 bed, 1 bath, wifi'),
(3, 'Television, 3 bed, 1 bath, wifi'),
(4, 'Mini fridge'),
(5, 'Air conditioning, Television, 1 bed, 1 bath, wifi'),
(6, 'Balcony,Air conditioning, Television, 1 bed, 1 bath, wifi'),
(7, 'Television, 2 bed, 1 bath, wifi'),
(8, 'Air conditioning, Television, 2 bed, 1 bath, wifi'),
(9, 'Air conditioning, Television, 4 bed, 2 bath, wifi'),
(10, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(11, 'Air conditioning, 2 bed, 1 bath, wifi'),
(12, 'Television, 3 bed, 1 bath, wifi'),
(13, 'Balcony, Television, 3 bed, 1 bath, wifi'),
(14, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(15, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(16, 'Balcony, Television, 3 bed, 1 bath, wifi'),
(17, 'Air conditioning, Television, 4 bed, 1 bath, wifi'),
(18, 'Air conditioning, Television, 3 bed, 1 bath, wifi'),
(19, 'Air conditioning, Television, 6 bed, 1 bath, wifi'),
(20, 'Air conditioning, Television, 2 bed, 1 bath, wifi');
