CREATE DATABASE dbalbum;
CREATE TABLE tb_album(
	id INT(11),
	name VARCHAR(100),
	text VARCHAR(100),
	photo_id INT(11),
	PRIMARY KEY(id),
	FOREIGN KEY (photo_id) REFERENCES tb_photos(photo_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_photos(
	id INT(11),
	date DATE,
	title VARCHAR(100),
	text TEXT,
	post_id INT(11),
	PRIMARY KEY(id),
	FOREIGN KEY (post_id) REFERENCES tb_post(post_id) ON UPDATE CASCADE ON DELETE RESTRICT
);

CREATE TABLE tb_post(
	id INT(11),
	date DATE,
	slug VARCHAR(25),
	title VARCHAR(100),
	text TEXT,
	cat_id INT(11),
	PRIMARY KEY(id),
	FOREIGN KEY (cate_id) REFERENCES tb_category(cat_id) ON UPDATE CASCADE ON DELETE RESTRICT,
);

CREATE TABLE tb_category(
	id INT(11),
	name VARCHAR(100) NOT NULL,
	text VARCHAR(100) NOT NULL,
	PRIMARY KEY(id),
);