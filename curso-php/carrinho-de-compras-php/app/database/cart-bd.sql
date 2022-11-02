CREATE TABLE `cart_udemy`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `price` DECIMAL(9,2) NOT NULL,
  PRIMARY KEY (`id`));

INSERT INTO 'products' ('name', 'price') VALUES ('Cabo HDMi',       '2314');
INSERT INTO 'products' ('name', 'price') VALUES ('Tv Smart',        '5587');
INSERT INTO 'products' ('name', 'price') VALUES ('Motorola',        '4872');
INSERT INTO 'products' ('name', 'price') VALUES ('Iphone',          '8125');
INSERT INTO 'products' ('name', 'price') VALUES ('Moto 0km',        '3000');
INSERT INTO 'products' ('name', 'price') VALUES ('Mercedez benz',   '8854');
INSERT INTO 'products' ('name', 'price') VALUES ('Fifa 21',         '7651');
INSERT INTO 'products' ('name', 'price') VALUES ('Monitor AOC',     '8472');


-- for run in beekeperstudio
INSERT INTO products(name, price) VALUES ('Cabo HDMi',2314);
INSERT INTO products(name, price) VALUES ('Tv Smart',      5587);
INSERT INTO products(name, price) VALUES ('Motorola',      4872);
INSERT INTO products(name, price) VALUES ('Iphone',        8125);
INSERT INTO products(name, price) VALUES ('Moto 0km',      3000);
INSERT INTO products(name, price) VALUES ('Mercedez benz', 8854);
INSERT INTO products(name, price) VALUES ('Fifa 21',       7651);
INSERT INTO products(name, price) VALUES ('Monitor AOC',   8472);