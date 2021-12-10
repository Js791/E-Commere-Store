CREATE TABLE IF NOT EXISTS OrderItems
(
    id int AUTO_INCREMENT PRIMARY KEY,
    order_id int,
    product_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    quantity int,
    unit_price int,
    FOREIGN KEY (`order_id`) REFERENCES Orders(`id`),
    Foreign key (product_id) REFERENCES Products(id)
)