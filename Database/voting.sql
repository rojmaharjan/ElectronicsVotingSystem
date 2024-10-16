-- Creating User Table
CREATE TABLE  users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    address TEXT,
    email VARCHAR(255) NOT NULL,
    registrationnum VARCHAR(50) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    role INT NOT NULL,
    status INT NOT NULL DEFAULT 0,
    votes INT NOT NULL DEFAULT 0
);

-- Creating Admins Table 
CREATE TABLE admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role INT NOT NULL
);


-- Inserting data into the users table
INSERT INTO users (name, mobile, password, address, email, registrationnum, photo, role, status, votes) 
VALUES 
('Janak San', '1234567890', 'password123', '123 Main St, City', 'john@example.com', 'USR123456', 'user_photo.jpg', 1, 0, 0),
('Jane Smith', '0987654321', 'password456', '456 Elm St, Town', 'jane@example.com', 'USR789012', 'user_photo2.jpg', 1, 0, 0),
('Bob Johnson', '5554443333', 'password789', '789 Oak St, Village', 'bob@example.com', 'USR345678', 'user_photo3.jpg', 1, 0, 0);

-- Inserting data into the admins table
INSERT INTO admins (username, password, role)
VALUES
('admin1', 'admin123', 2),
('admin3', 'admin789', 2);
