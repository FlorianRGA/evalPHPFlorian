CREATE TABLE advert (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(50)NOT NULL,
    description VARCHAR(200)NOT NULL,
    postal_code CHAR(5)NOT NULL,
    city VARCHAR(30)NOT NULL,
    type VARCHAR(30)NOT NULL,
    price DECIMAL(20,2)NOT NULL,
    reservation_message VARCHAR(200)
)