CREATE TABLE IF NOT EXISTS Cart
(
     id int AUTO_INCREMENT PRIMARY Key,
     product_id int,
     Users_id int,
     desired_quantity int,
     unit_cost int,
     created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
     modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
     FOREIGN KEY (`id`) REFERENCES Products(`id`),
     FOREIGN KEY (`Users_id`) REFERENCES Users(`id`),
     UNIQUE KEY (`Users_id`, `product_id`),
     check (desired_quantity >= 0)
)