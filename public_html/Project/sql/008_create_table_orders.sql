CREATE Table if not exists Orders
(
    id int AUTO_INCREMENT PRIMARY Key,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_price int,
    payment_method VARCHAR(30),
    address VARCHAR(250),
    FOREIGN KEY (`user_id`) REFERENCES Users(`id`)
)