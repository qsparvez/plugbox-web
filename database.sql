CREATE DATABASE plugbox_db;
USE plugbox_db;

-- ক্যাটাগরি টেবিল
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL
);

-- প্রোডাক্ট টেবিল
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    item_code VARCHAR(10) UNIQUE,
    name VARCHAR(255),
    category_id INT,
    short_desc VARCHAR(100),
    long_desc TEXT,
    price DECIMAL(10,2),
    stock_status VARCHAR(20) DEFAULT 'in stock',
    is_bestseller BOOLEAN DEFAULT 0,
    main_image VARCHAR(255),
    other_images TEXT,
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- অর্ডার ও ইনকোয়ারি টেবিল
CREATE TABLE orders (
    id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT,
    customer_name VARCHAR(100),
    phone VARCHAR(20),
    address TEXT,
    status ENUM('pending', 'delivered') DEFAULT 'pending'
);