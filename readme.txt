
# StoreEase

A PHP based webside to create a *distribution* webapp to make distributing more easier than before. Through this app, a *Distributor* can control his DSR (Distribution Sales Representatives) employees through this app. The user can also change his employees info, add employees, change inventory items.

## Dependencies

- MySQL Database Tables
  - dsr
    - ``CREATE TABLE `distributor`. ( `serial` INT(5) NOT NULL AUTO\_INCREMENT , `name` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `days` VARCHAR(255) NOT NULL , `ordersdel` INT(25) NOT NULL , `products` VARCHAR(255) NOT NULL , PRIMARY KEY (`serial`)) ENGINE = InnoDB;``
  - inventory
    - ``CREATE TABLE `distributor`. ( `serial` INT(5) NOT NULL AUTO\_INCREMENT , `product-name` VARCHAR(50) NOT NULL , `rate` INT(10) NOT NULL , `Stock` INT(10) NOT NULL , PRIMARY KEY (`serial`)) ENGINE = InnoDB;``
  - userinf
    - ``CREATE TABLE `distributor`. ( `serial` INT(25) NOT NULL AUTO\_INCREMENT , `FirstName` VARCHAR(255) NOT NULL , `LastName` VARCHAR(255) NOT NULL , `phone` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`serial`)) ENGINE = InnoDB;``

- PHP 7.2.34
    - install from [here](https://www.php.net/downloads).

## Authors

- [@nazme-al-nahian](https://www.github.com/nazme-al-nahian) (*Backend Developer*)
- [@Mofazzel-hossain-miraz](https://www.github.com/Mofazzel-hossain-miraz) (*Frontend Developer*)
