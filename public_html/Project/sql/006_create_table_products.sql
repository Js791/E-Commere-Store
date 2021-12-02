    CREATE TABLE IF NOT EXISTS Products
    (
        id int AUTO_INCREMENT,
        name VARCHAR(250) UNIQUE,
        description text,
        category VARCHAR(250) Unique,
        stock int DEFAULT 0,
        unit_price int DEFAULT 99999,
        image text,
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        modified TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
        visibility BOOLEAN
        PRIMARY KEY (`id`) 
    )
    ---fixed---