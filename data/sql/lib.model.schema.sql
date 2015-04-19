
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- bc_bicycles
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `bc_bicycles`;


CREATE TABLE `bc_bicycles`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`year` DATETIME,
	`frame` FLOAT,
	`speeds` INTEGER,
	`brakes` VARCHAR(255),
	`application` VARCHAR(255),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Engine=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
