CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `avatar` varchar(500) NOT NULL DEFAULT 'public/avatar.png',
  `password` varchar(500) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `role` varchar(20) DEFAULT 'user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `users` (`name`, `avatar`, `password`, `phone`, `email`, `age`, `gender`, `role`) VALUES
('Dương Thị Hồng Lam', 'public/avatar_lam.png', 'duonglam123', '1234567890', 'duonglam.@gmail.com', 30, 'Female', 'admin'),
('Trần Đức Hùng', 'public/avatar_hung.png', 'tranhung123', '0987654321', 'tranhung.smith@gmail.com', 25, 'Male', 'admin'),
('Phạm Thị Hỉ', 'public/avatar_hi.png', 'phamhi123', '9876543210', 'phamhi@gmail.com', 35, 'Female', 'user'),
('Nguyễn Thị Linh', 'public/avatar_linh.png', 'nguyenlinh123', '0123456789', 'nguyenlinh@gmail.com', 28, 'Female', 'user'),
('Hồ Thị Ngân', 'public/avatar_ngan.png', 'hongan123', '5678901234', 'hongan@gmail.com', 32, 'Female', 'user');

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `availability` tinyint(1) NOT NULL,
  `description` varchar(500) NOT NULL,
  `rating` tinyint(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `rooms` (`name`, `type`, `price`, `availability`, `description`, `rating`) VALUES
('Duluxe', 'Deluxe', '50.00', 1, 'Deluxe Rooms are luxurious and spacious hotel accommodations, featuring modern amenities and stunning city views. Bringing visitors memorable and enjoyable experiences', 4),
('Chic Lounge Oasis', 'Deluxe', '100.00', 0, 'Premium service along with a wide range of amenities will bring you the experience of the most fulfilling vacation.The 24-hour reception desk is always ready to serve you from check-in to check-out or any requests.', 5),
('The Prestige Parlor', 'Family room', '120.00', 1, 'Prestige Parlor is a luxurious living room that exudes elegance and sophistication. Every aspect of this room has been carefully designed to create a feeling of prestige and sophistication.', 5),
('Paradise of Rest', 'Family room', '200.00', 1, 'Paradise of Rest is a living room designed to create a wonderful space of relaxation and rest. It brings a feeling of peace, comfort and convenience, helping you find relaxation and refresh your spirit.', 5),
('Peaceful Room', 'Family room', '90.00', 1, 'Peaceful Living Room: This living room creates a peaceful and relaxing space. Soft colors, dim lights and comfortable furniture can be used to create an airy and relaxing space.', 5),
('Honeymoon Suite', 'Family room', '120.00', 1, 'Honeymoon Suite is a type of hotel room specially designed to serve newlyweds or couples who want to enjoy romantic and special moments during their honeymoon. This room is often spacious and beautifully decorated to create an ideal space for love and romance.', 5),
('Royal Parlor', 'Family room', '60.00', 1, 'Prestige Parlor is a luxurious living room that exudes elegance and sophistication. Every aspect of this room has been carefully designed to create a feeling of prestige and sophistication', 5),
('Glamorous Den ', 'Suite', '160.00', 1, 'Glamorous Den is a room full of charm and luxury, creating a classy and stylish resort space. With exquisite design and unique furniture, this room brings a desirable living space to customers.', 5),
('Regal Gathering Space', 'Family room', '230.00', 1, 'Regal Gathering Space is a great space to gather and meet, giving you a luxurious and elegant space to hold special events. With its premium design and spacious space, this room creates a cozy and classy environment for important meetings and events.', 5),
( 'Artistic Lounge Retreat', 'View', '80.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space ', 5),
( 'Artistic Lounge Retreat', 'View', '80.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration.', 5),
('Artistic Lounge Retreat', 'View', '80.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable.', 5),
('Artistic Lounge Retreat', 'View', '80.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space.', 5),
('Artistic Lounge Retreat', 'View', '80.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space.', 5),
('Artistic Lounge Retreat', 'View', '80.00', 1, 'Artistic Lounge Retreat is a unique and creative art space where you can relax and find inspiration. With its distinctive design and unique artistic decoration, this space offers a memorable space ', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5),
('Stylish Sitting Area ', 'Suite', '56.00', 1, 'Stylish Sitting Area is a luxurious and trendy sitting space, creating a comfortable and classy environment for relaxation and conversation. With a modern design and unique interior, this space brings a sense of elegance and style to customers.', 5);

CREATE TABLE `convenients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_room` int(11) NOT NULL,
  `convenient` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_room`) REFERENCES rooms(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `convenients` (`id_room`, `convenient`) VALUES
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


CREATE TABLE `detail_room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_room` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_room`) REFERENCES rooms(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `detail_room` (`id_room`, `image_url`) VALUES
(1, 'public/images/duluxe_room1.jpg'),
(1, 'public/images/duluxe_room2.jpg'),
(1, 'public/images/duluxe_room3.jpg'),
(1, 'public/images/duluxe_room4.jpg'),
(1, 'public/images/duluxe_room5.jpg'),
(2, 'public/images/chic_lounge_oasis_room1.png'),
(2, 'public/images/chic_lounge_oasis_room2.png'),
(2, 'public/images/chic_lounge_oasis_room3.png'),
(2, 'public/images/chic_lounge_oasis_room4.png'),
( 2, 'public/images/chic_lounge_oasis_room5.png'),
( 3, 'public/images/paradise_of_rest_room1.png'),
( 3, 'public/images/paradise_of_rest_room2.png'),
( 3, 'public/images/paradise_of_rest_room3.png'),
( 3, 'public/images/paradise_of_rest_room4.png'),
( 3, 'public/images/paradise_of_rest_room5.png'),
( 4, 'public/images/peaceful_room1.png'),
( 4, 'public/images/peaceful_room2.png'),
( 4, 'public/images/peaceful_room3.png'),
( 4, 'public/images/peaceful_room4.png'),
( 4, 'public/images/peaceful_room5.png'),
( 5, 'public/images/honeymoon_suite_room1.png'),
( 5, 'public/images/honeymoon_suite_room2.png'),
( 5, 'public/images/honeymoon_suite_room3.png'),
( 5, 'public/images/honeymoon_suite_room4.png'),
( 5, 'public/images/honeymoon_suite_room5.png'),
( 6, 'public/images/royal_parlor_room1.png'),
( 6, 'public/images/royal_parlor_room2.png'),
( 6, 'public/images/royal_parlor_room3.png'),
( 6, 'public/images/royal_parlor_room4.png'),
( 6, 'public/images/royal_parlor_room5.png'),
( 7, 'public/images/glamorous_den_room1.png'),
( 7, 'public/images/glamorous_den_room2.png'),
( 7, 'public/images/glamorous_den_room3.png'),
( 7, 'public/images/glamorous_den_room4.png'),
( 7, 'public/images/glamorous_den_room5.png'),
( 8, 'public/images/regal_gathering_space_room1.png'),
( 8, 'public/images/regal_gathering_space_room2.png'),
( 8, 'public/images/regal_gathering_space_room3.png'),
( 8, 'public/images/regal_gathering_space_room4.png'),
( 8, 'public/images/regal_gathering_space_room5.png'),
( 9, 'public/images/artistic_lounge_retreat_room1.png'),
( 9, 'public/images/artistic_lounge_retreat_room2.png'),
( 9, 'public/images/artistic_lounge_retreat_room3.png'),
( 9, 'public/images/artistic_lounge_retreat_room4.png'),
( 9, 'public/images/artistic_lounge_retreat_room5.png'),
( 10, 'public/images/chic_lounge_oasis_room1.png'),
( 10, 'public/images/chic_lounge_oasis_room2.png'),
( 10, 'public/images/chic_lounge_oasis_room3.png'),
( 10, 'public/images/chic_lounge_oasis_room4.png'),
( 10, 'public/images/chic_lounge_oasis_room5.png'),
( 11, 'public/images/glamorous_den_room1.png'),
( 11, 'public/images/glamorous_den_room2.png'),
( 11, 'public/images/glamorous_den_room3.png'),
( 11, 'public/images/glamorous_den_room4.png'),
( 11, 'public/images/glamorous_den_room5.png'),
( 12, 'public/images/peaceful_room1.png'),
( 12, 'public/images/peaceful_room2.png'),
( 12, 'public/images/peaceful_room3.png'),
( 12, 'public/images/peaceful_room4.png'),
( 12, 'public/images/peaceful_room5.png'),
( 13, 'public/images/honeymoon_suite_room1.png'),
( 13, 'public/images/honeymoon_suite_room2.png'),
( 13, 'public/images/honeymoon_suite_room3.png'),
( 13, 'public/images/honeymoon_suite_room4.png'),
( 13, 'public/images/honeymoon_suite_room5.png'),
( 14, 'public/images/honeymoon_suite_room1.png'),
( 14, 'public/images/honeymoon_suite_room2.png'),
( 14, 'public/images/honeymoon_suite_room3.png'),
( 14, 'public/images/honeymoon_suite_room4.png'),
( 14, 'public/images/honeymoon_suite_room5.png'),
( 15, 'public/images/glamorous_den_room1.png'),
( 15, 'public/images/glamorous_den_room2.png'),
( 15, 'public/images/glamorous_den_room3.png'),
( 15, 'public/images/glamorous_den_room4.png'),
( 15, 'public/images/glamorous_den_room5.png'),
( 16, 'public/images/honeymoon_suite_room1.png'),
( 16, 'public/images/honeymoon_suite_room2.png'),
( 16, 'public/images/honeymoon_suite_room3.png'),
( 16, 'public/images/honeymoon_suite_room4.png'),
( 16, 'public/images/honeymoon_suite_room5.png'),
( 17, 'public/images/glamorous_den_room1.png'),
( 17, 'public/images/glamorous_den_room2.png'),
( 17, 'public/images/glamorous_den_room3.png'),
( 17, 'public/images/glamorous_den_room4.png'),
( 17, 'public/images/glamorous_den_room5.png'),
( 18, 'public/images/artistic_lounge_retreat_room1.png'),
( 18, 'public/images/artistic_lounge_retreat_room2.png'),
( 18, 'public/images/artistic_lounge_retreat_room3.png'),
( 18, 'public/images/artistic_lounge_retreat_room4.png'),
( 18, 'public/images/artistic_lounge_retreat_room5.png'),
( 19, 'public/images/chic_lounge_oasis_room1.png'),
( 19, 'public/images/chic_lounge_oasis_room2.png'),
( 19, 'public/images/chic_lounge_oasis_room3.png'),
( 19, 'public/images/chic_lounge_oasis_room4.png'),
( 19, 'public/images/chic_lounge_oasis_room5.png'),
( 20, 'public/images/honeymoon_suite_room1.png'),
( 20, 'public/images/honeymoon_suite_room2.png'),
( 20, 'public/images/honeymoon_suite_room3.png'),
( 20, 'public/images/honeymoon_suite_room4.png'),
( 20, 'public/images/honeymoon_suite_room5.png');



CREATE TABLE `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_room` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `check_in_date` datetime DEFAULT NULL,
  `check_out_date` datetime DEFAULT NULL,
  `note` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_room`) REFERENCES rooms(id),
  FOREIGN KEY (`id_user`) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `booking` (`id_room`, `id_user`, `check_in_date`, `check_out_date`, `note`) VALUES
(1, 1, '2023-01-01', '2023-01-03', 'Hello'),
(2, 2, '2023-02-10', '2023-02-15', 'Ok'),
(3, 3, '2023-03-20', '2023-03-25', 'I will come on the weekend'),
(4, 4, '2023-04-05', '2023-04-07', 'I will come on Monday'),
(4, 4, '2023-04-05', '2023-04-07', 'I will come on Monday'),
(1, 2, '2023-05-15', '2023-05-20', 'I will come on Tuesday');

CREATE TABLE bill (
  `id` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_booking` INT(11) NOT NULL,
  date DATETIME DEFAULT NULL,
  `total_price` DECIMAL(10, 0) DEFAULT NULL,
  FOREIGN KEY (`id_booking`) REFERENCES booking(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `bill` (`id_booking`, `date`, `total_price`) VALUES
(1, '2023-01-03', "50"),
(2, '2023-02-15', "100"),
(3, '2023-03-25', "120"),
(4, '2023-04-07', "200"),
(5, '2023-05-20', "50");

CREATE TABLE `favorite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_room` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`id_room`) REFERENCES rooms(id),
  FOREIGN KEY (`id_user`) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `favorite` (`id_room`, `id_user`) VALUES
(1, 1),
(2, 2),
(3, 1),
(2, 3),
(1, 4);
