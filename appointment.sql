CREATE TABLE `appointments` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `appointment_date` DATE NOT NULL,
    `time_slot` VARCHAR(50) NOT NULL,
    `customer_name` VARCHAR(100) NOT NULL,
    `service` VARCHAR(100) NOT NULL
);