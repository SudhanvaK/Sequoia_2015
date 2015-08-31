CREATE TABLE tbl_pets (
  pet_id int unsigned NOT NULL AUTO_INCREMENT,
  pet_category VARCHAR(25) NOT NULL,
  pet_breed VARCHAR(25) ,
  pet_sex CHAR(1) NOT NULL,
  pet_colour VARCHAR(25),
  pet_age int NOT NULL,
  pet_location VARCHAR(25) NOT NULL,
  pet_owner_id int NOT NULL,
  pet_health_checked CHAR(1) NOT NULL DEFAULT 'N',
  pet_name VARCHAR(25) NOT NULL,
  pet_last_verified_by int,
  created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (pet_id)
) ;

CREATE TABLE tbl_owner (
  owner_id int unsigned NOT NULL AUTO_INCREMENT,
  owner_name VARCHAR(25) NOT NULL,
  owner_phone VARCHAR(25),
  owner_email VARCHAR(25) NOT NULL,
  created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (owner_id)
) ;

CREATE TABLE tbl_photos(
 photo_id int unsigned NOT NULL AUTO_INCREMENT,
 pet_id int NOT NULL,
 photo_url VARCHAR(100) NOT NULL,
 created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (photo_id)
) ;


CREATE TABLE tbl_vets(
 vet_id int unsigned NOT NULL AUTO_INCREMENT,
 vet_name VARCHAR(25) NOT NULL,
 vet_location VARCHAR(25) NOT NULL,
 vet_timings VARCHAR(25),
 created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (vet_id)
) ;


ALTER TABLE tbl_pets DROP COLUMN pet_location;

ALTER TABLE tbl_pets ADD  pet_latitude DOUBLE NOT NULL;
ALTER TABLE tbl_pets ADD  pet_longitude DOUBLE NOT NULL;


CREATE TABLE tbl_pairs(
 pair_id int unsigned NOT NULL AUTO_INCREMENT,
 source_id int NOT NULL,
 dest_id int NOT NULL,
 pair_final_yn CHAR(1) NOT NULL DEFAULT 'N',
 created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (pair_id)
) ;

-- drop table tbl_msgs; 
CREATE TABLE tbl_msgs(
 msg_id int unsigned NOT NULL AUTO_INCREMENT,
 owner1_id int NOT NULL,
 pet1_id int NOT NULL,
 owner2_id int NOT NULL,
 pet2_id int NOT NULL,
 owner_message VARCHAR(100) NOT NULL,
 created_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (msg_id)
) ;