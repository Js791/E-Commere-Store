CREATE TABLE IF NOT EXISTS Rating
(
    id int AUTO_INCREMENT PRIMARY KEY,
    rating int,
    comments TEXT(65535),
    product_id int,
    user_id int,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES Users(id),
    FOREIGN KEY (product_id) REFERENCES Products(id),
    check (rating > 0 AND rating <= 5)
)