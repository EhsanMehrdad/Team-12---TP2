/* Handle conflict in testing; simply rerun script */
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS products;
DROP TABLE IF EXISTS orders;
DROP TABLE IF EXISTS feedback;

/* #####################
    Init tables
   ##################### */

CREATE TABLE users (
    uid SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    forename VARCHAR(64),
    surname VARCHAR(64),
    username VARCHAR(16) NOT NULL,
    email VARCHAR(64) NOT NULL,
    password TINYTEXT NOT NULL,
    privileges BOOLEAN DEFAULT FALSE,
    timeout_stamp INT,
    timeout_duration INT,
    verified BOOLEAN DEFAULT FALSE,
    verification_token TINYTEXT,
    change_password_token TINYTEXT,
    remember_me BOOLEAN DEFAULT FALSE,

    PRIMARY KEY(uid)
);

CREATE TABLE products (
    pid SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,      /* (for indexing directories in web root) */
    model VARCHAR(48) NOT NULL,                         /* e.g. 09JF-DJ93-J3KS-JNG3 */
    name VARCHAR(128) NOT NULL,                         /* Necklaces, rings, chains, bracelets, pendants, earrings */
    category VARCHAR(32) NOT NULL,                      /* Gold, rose gold, white gold, platinum, sterling silver, diamond, pearl, coloured gemstone */
    price DOUBLE NOT NULL,
    stock INT DEFAULT 0,                                /* (# of items available in imaginary depot) */
    views INT DEFAULT 0,                                /* (# of hits on specific item e.g. products?pid=4) */
    bought_all_time BIGINT DEFAULT 0,                   /* (# of of times item has been bought) */
    avg_rating DOUBLE DEFAULT 0,                        /* (calculated using ratings from feedback table) */
    description TEXT,                                   /* (store item description here) */
    date_time DATETIME DEFAULT NOW(),                   /* (epoch of listing) */
    PRIMARY KEY(pid)
);

CREATE TABLE orders (
    tid SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,      /* e.g. base64(SHA-256(base64('$username:$timestamp'))) */
    uid SMALLINT UNSIGNED NOT NULL,
    pid SMALLINT UNSIGNED NOT NULL,
    status VARCHAR(32) DEFAULT "processing",            /* processing/dispatched/delivered/cancelled/refunded */
    date_time DATETIME DEFAULT NOW(),                   /* (timestamp for when order was created) */
    PRIMARY KEY(tid)
);

CREATE TABLE feedback (
    fid SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    model VARCHAR(48) NOT NULL,                         /* e.g. 09JF-DJ93-J3KS-JNG3 */
    username VARCHAR(16) NOT NULL,
    review LONGTEXT,                                    /* (comment given in customer review) */
    rating INT NOT NULL,                                /* (1-5 rating given in customer review) */
    seconds_since_epoch INT,                            /* (timestamp for when customer review was created) */
    PRIMARY KEY(fid)
);

/* #####################
    Seeding users table
   ##################### */

/* >>password => "password" */
INSERT INTO users (username, email, password, privileges, verified)
VALUES ('admin', 'admin@domain.ac.uk', '$2y$10$zyWUmQmdYxZOStAgctHRw.u7vgnMeunS2DxUEATvh6y/CLIhULzje', true, true);         /* NOTE: admin must have uid=1, and does since first entry to AUTO_INCREMENT */

/* >>password => "caesar" */
INSERT INTO users (username, email, password, verified)
VALUES ('julius', 'julius@domain.com', '$2y$10$vAiVC77oQJn3ylwqiXZH7OihcgxJJjVHLRcWtyhQRkNMpoDlqNbQG', true);

/* >>password => "khan" */
INSERT INTO users (username, email, password, verified)
VALUES ('genghis', 'carlos@domain.com', '$2y$10$s.74gjCCcMBwWZ2eGQTA.udrVAK9a3a8EpmBQl1IAiSGwnXDmFnMG', true);

/* >>password => "musk" */
INSERT INTO users (username, email, password, verified)
VALUES ('elon', 'elon@domain.com', '$2y$10$Yuk2IQ7TlPhI7NruJTZiH.hF/v/Hd337BOaEJG11IU8pd3k1HpDbe', true);

/* >>password => "bonaparte" */
INSERT INTO users (username, email, password, verified)
VALUES ('napoleon', 'napoleon@domain.com', '$2y$10$YHVXlAvuSmveONz3Bo5r2./QVpnZCW/4W3wvIeWE.QNvUCAe48Sru', true);

/* >>password => "jackson" */
INSERT INTO users (username, email, password, verified)
VALUES ('michael', 'michael@domain.com', '$2y$10$F.5h5dY/fYnmoRq.slhM4.67dpei0BU/7J4sLBErsZGNkLOZIIm.W', true );

/* #####################
    Seeding products table
   ##################### */

/* >>NULL PRODUCT (everything NULL is given a value at the admin panel when a listing is posted, everything 0 stays as zero - EXCEPT for price, this should be given a value too) */
SET @model_null := UUID();
INSERT INTO products (model, name, category, price, stock, views, bought_all_time, avg_rating, description, date_time)
VALUES (@model_null, 'NULL', 'NULL', 0, 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', NULL);

/* >>EXAMPLE PRODUCT #1 */
SET @model_a := UUID();
INSERT INTO products (model, name, category, price, stock, views, bought_all_time, avg_rating, description, date_time)
VALUES (@model_a, 'SILVER_BRACELET', 'silver', 80.00, 14, 8, 1, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "2022-09-01 05-30-01");

/* >>EXAMPLE PRODUCT #2 */
SET @model_b := UUID();
INSERT INTO products (model, name, category, price, stock, views, bought_all_time, avg_rating, description, date_time)
VALUES (@model_b, 'GOLD_BRACELET', 'gold', 120.00, 13, 16, 2, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "2022-09-01 05-30-01");

/* >>EXAMPLE PRODUCT #3 */
SET @model_c := UUID();
INSERT INTO products (model, name, category, price, stock, views, bought_all_time, avg_rating, description, date_time)
VALUES (@model_c, 'PEARL_NECKLACE', 'pearl', 280.00, 19, 24, 1, 5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', "2022-09-01 05-30-01");

/* #####################
    Seeding orders table
   ##################### */

/*>>PRODUCT #1 ORDERS */
INSERT INTO orders (uid, pid, status, date_time)
VALUES (2, 2, 'delivered', "2022-09-04 06-30-53");

/*>>PRODUCT #2 ORDERS */
INSERT INTO orders (uid, pid, status, date_time)
VALUES (3, 3, 'refunded', "2022-09-08 14-23-21");

INSERT INTO orders (uid, pid, status, date_time)
VALUES (4, 3, 'delivered', "2022-09-12 11-53-21");

/*>>PRODUCT #3 ORDERS */
INSERT INTO orders (uid, pid, status, date_time)
VALUES (5, 4, 'delivered', "2022-09-16 22-05-01");

/* #####################
    Seeding feedback table
   ##################### */

/*>>PRODUCT #3 FEEDBACK */
INSERT INTO feedback (username, model, review, rating, seconds_since_epoch)
VALUES ('genghis', @model_c, "Excellent.", 5, 1667130294);
