    CREATE TABLE IF NOT EXISTS Products
    (
        id int AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(250) UNIQUE,
        description text,
        category text,
        stock int DEFAULT 0,
        unit_price int DEFAULT 99999,
        image text,
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
        visibility BOOLEAN 
    )
    ---