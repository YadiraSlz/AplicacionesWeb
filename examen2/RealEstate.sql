-- Active: 1727892150921@@127.0.0.1@3306@RealEstate
drop DATABASE BienesRaices

CREATE DATABASE RealEstate

use RealEstate

CREATE TABLE SELLERS (
    id INT (11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR (32) NOT NULL,
    email VARCHAR (32) NOT NULL,
    phone VARCHAR (10) NULL
)

CREATE TABLE PROPERTIES (
    id INT (11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR (32) NOT NULL,
    price DECIMAL (10, 2) NOT NULL,
    image VARCHAR (512) NULL,
    description LONGTEXT,
    rooms INT NULL,
    wc INT NULL,
    garage INT NULL,
    timeStamp DATE NULL,
    id_Seller INT (11),
    Foreign Key (id_Seller) REFERENCES SELLERS (id)
)


INSERT INTO SELLERS (name, email, phone) VALUES 
('Elite Estates', 'contact@eliteestates.com', '1234567890'),
('Luxury Homes', 'contact@luxuryhomes.com', '2222222222'),
('Exclusive Properties', 'contact@exclusiveproperties.com', '5555555555')

INSERT INTO PROPERTIES (title, price, image, description, rooms, wc, garage, timeStamp, id_Seller) VALUES
('Luxury Lake House', 11111111.00, 'https://imgs.search.brave.com/_XoxP85hoCjIBdVyyoWKTIQpxxQwB68rhDLKIeDr204/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92LnNl/bG9nZXIuY29tL3Mv/Y2RuL3gvdmlzdWVs/cy8wL2Yvbi9mLzBm/bmZvdW8ybDhkZ2hs/bXljMmVuZmFuMTRp/MzFidHpvdjZwbWJr/emswLmpwZw', 'Stunning luxury house by the lake with exclusive finishes.', 3, 3, 2, '2024-10-01', 1),
('Luxury Residence House', 32222222.00, 'https://imgs.search.brave.com/SPelA9UY4--u4e05LAa21yWzAa7bt18Adqr0jjl6wZU/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly92LnNl/bG9nZXIuY29tL3Mv/Y2RuL3gvdmlzdWVs/cy8wL20vcy90LzBt/c3RsNGprZXR3ODB6/azFmejl0b3FsdTF5/bXZ3bXh0MTRqeHZs/Y2hrLmpwZw', 'Luxury residence with premium finishes and space for the whole family.', 6, 6, 3, '2024-09-25', 2),
('House with Pool', 3333333.00, 'https://imgs.search.brave.com/TY03vUmOixoPgbNJuNZxPtpz3oa4iYsMXQERxcY9DB0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9ncHZp/dmllbmRhLmNvbS9i/bG9nL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDIzLzAzL2RpZ2l0/YWwtbWFya2V0aW5n/LWFnZW5jeS1udHdy/ay1nMzlwMWtEanZT/WS11bnNwbGFzaC0x/LmpwZw', 'Beautiful house with a pool and green areas, ideal for relaxation and recreation.', 4, 2, 3, '2024-08-15', 3)

SELECT * FROM SELLERS

SELECT * FROM PROPERTIES
