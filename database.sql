-- creating table food
CREATE TABLE food(
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    food VARCHAR(256) NOT NULL,
    calories INT(11) NOT NULL,
    healthy_unhealthy VARCHAR(256) NOT NULL
    
);

-- inserting values to the food table
INSERT INTO meals(food, calories, healthy_unhealthy)
VALUES('pizza', 1000, 'u');
INSERT INTO meals(food, calories, healthy_unhealthy) 
VALUES('salad', 200, 'h');
INSERT INTO meals(food, calories, healthy_unhealthy) 
VALUES('pasta', 600, 'h');
 