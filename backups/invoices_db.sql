

CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cui` varchar(25) DEFAULT NULL,
  `onrc` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `iban` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=utf8mb4;


INSERT INTO clients VALUES
("202","SUPERLEATHER PROD SRL","44965348","J40/16645/2021","Sos. Pantelimon 291A Bl. 9A Sc. B Et. 6 Ap. 50","","","0733488555",""),
("224","Dumitru Pavel","","","Strada Postei Nr. 30","","","0724531345","pavel.dumitru@gmail.com");




CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial` varchar(50) NOT NULL,
  `client` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`client`)),
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `items` text NOT NULL,
  `shipping_price` varchar(25) NOT NULL,
  `price_total` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=373 DEFAULT CHARSET=utf8;


INSERT INTO invoices VALUES
("147","BIZ","{\"name\":\"SUPERLEATHER PROD SRL\",\"address\":\"Sos. Pantelimon 291A Bl. 9A Sc. B Et. 6 Ap. 50\",\"cui\":\"44965348\",\"onrc\":\"J40\\/16645\\/2021\",\"phone\":\"0733488555\",\"iban\":\"\",\"bank\":\"\",\"email\":\"\"}","210","2022-06-13","[{\"item_name\":\"Prestari servicii\",\"item_um\":\"buc\",\"item_qty\":\"1\",\"item_price\":\"2000\"},{\"item_name\":\"Servetele\",\"item_um\":\"buc\",\"item_qty\":\"1\",\"item_price\":\"19.99\"},{\"item_name\":\"Discount produse\",\"item_um\":\"buc\",\"item_qty\":\"1\",\"item_price\":\"-45.64\"}]","0","2000","normal"),
("371","BIZ","{\"name\":\"Dumitru Pavel\",\"address\":\"Strada Postei Nr. 30\",\"cui\":\"\",\"onrc\":\"\",\"phone\":\"0724531345\",\"iban\":\"\",\"bank\":\"\",\"email\":\"pavel.dumitru@gmail.com\"}","211","2022-06-23","[{\"item_name\":\"Cana din plastic\",\"item_um\":\"buc.\",\"item_qty\":\"2\",\"item_price\":\"59.99\"},{\"item_name\":\"Discount produse\",\"item_um\":\"buc.\",\"item_qty\":\"1\",\"item_price\":\"-10\"}]","19.99","129.97","normal"),
("372","BIZ","{\"name\":\"Dumitru Pavel\",\"address\":\"Strada Postei Nr. 30\",\"cui\":\"\",\"onrc\":\"\",\"phone\":\"0724531345\",\"iban\":\"\",\"bank\":\"\",\"email\":\"pavel.dumitru@gmail.com\"}","212","2022-06-23","[{\"item_name\":\"Cana din plastic\",\"item_um\":\"buc.\",\"item_qty\":\"2\",\"item_price\":-59.99},{\"item_name\":\"Discount produse\",\"item_um\":\"buc.\",\"item_qty\":\"1\",\"item_price\":10}]","-19.99","-129.97","storno");


