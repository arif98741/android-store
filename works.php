CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
    PRIMARY KEY(id)
) ;

CREATE TABLE `subcategory` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
   `subcategory_name` varchar(100) NOT NULL,
    category_id int(11),
    PRIMARY KEY(id),
    FOREIGN KEY(category_id) REFERENCES category(id)
) ;