SET
    SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

SET
    AUTOCOMMIT = 0;

START TRANSACTION;

SET
    time_zone = "+00:00";

CREATE TABLE pf_name (
    pfn_id INT(8) UNSIGNED AUTO_INCREMENT,
    pfn_th VARCHAR(255) NULL,
    pfn_en VARCHAR(255) NULL,
    pfn_full_th VARCHAR(255) NULL,
    pfn_full_en VARCHAR(255) NULL,
    PRIMARY KEY (pfn_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE utf8_general_ci;

CREATE TABLE register (
    reg_id INT(8) UNSIGNED AUTO_INCREMENT,
    reg_username VARCHAR(255) NOT NULL,
    reg_password VARCHAR(255) NOT NULL,
    reg_timestamp TIMESTAMP NOT NULL DEFAULT current_timestamp(),
    reg_use ENUM('y', 'n') NOT NULL DEFAULT 'y',
    reg_admin ENUM('y', 'n') NOT NULL DEFAULT 'n',
    PRIMARY KEY (reg_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE utf8_general_ci;

CREATE TABLE member (
    mem_id INT(8) UNSIGNED AUTO_INCREMENT,
    mem_fname VARCHAR(255) NOT NULL,
    mem_lname VARCHAR(255) NOT NULL,
    mem_picture VARCHAR(255) NOT NULL,
    mem_addr VARCHAR(255) NOT NULL,
    mem_tel VARCHAR(255) NOT NULL,
    mem_email VARCHAR(255) NOT NULL,
    mem_fb VARCHAR(255) NULL,
    mem_ig VARCHAR(255) NULL,
    mem_reg_id INT(8) UNSIGNED,
    mem_pfn_id INT(8) UNSIGNED,
    PRIMARY KEY (mem_id),
    FOREIGN KEY (mem_reg_id) REFERENCES mem_db.register(reg_id),
    FOREIGN KEY (mem_pfn_id) REFERENCES mem_db.pf_name(pfn_id)
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE utf8_general_ci;