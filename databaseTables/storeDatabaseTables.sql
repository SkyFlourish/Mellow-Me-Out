CREATE TABLE Items (
    ItemID INT NOT NULL AUTO_INCREMENT,
    ItemName VARCHAR(50) NOT NULL, 
    ItemPrice DECIMAL(15,2) NOT NULL,
    ItemQuantity INT NOT NULL,
    PRIMARY KEY (ItemID)
);

CREATE TABLE Discount 
(
    DiscountID INT NOT NULL AUTO_INCREMENT,
    DiscountCode VARCHAR(50) NOT NULL,
    DiscountPercentage INT NOT NULL,
    PRIMARY KEY (DiscountID)
);

CREATE TABLE Staff
(
    StaffID INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Passphrase VARCHAR(50) NOT NULL,
    PRIMARY KEY (StaffID)
);

CREATE TABLE Customer
(
    CustomerID INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(50) NOT NULL,
    LastName VARCHAR(50) NOT NULL,
    EmailAddress VARCHAR(100) NOT NULL,
    Username VARCHAR(50) NOT NULL,
    Passphrase VARCHAR(50) NOT NULL,
    PRIMARY KEY (CustomerID)
);

CREATE TABLE Orders
(
    OrderID INT NOT NULL AUTO_INCREMENT,
    CustomerID INT NOT NULL,
    ItemID  INT NOT NULL,
    OrderDate VARCHAR(50) NOT NULL,
    TotalOrderTab DECIMAL(15,2) NOT NULL,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    FOREIGN KEY (ItemID) REFERENCES Items(ItemID)
);