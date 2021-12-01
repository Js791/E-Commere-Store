CREATE TABLE IF NOT EXISTS Cart
(
     product_id int AUTO_INCREMENT,
     created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
     Users_id int,
     desired_quantity int,
     unit_cost int,
     FOREIGN KEY (`product_id`) REFERENCES Products(`id`),
     FOREIGN KEY (`Users_id`) REFERENCES Users(`id`),
     UNIQUE KEY (`Users_id`, `product_id`)
)