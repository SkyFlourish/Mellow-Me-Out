/* Changes */
/*
    05/04/2018 - Added a table (ItemsInOrder) to address issue of only being able
                to order one item at a time, as well as removing the ItemID
                references in the Orders table and shifting it into the new table
                for a one to many relationship.
                Also did some formatting work to make it easier to read.
    15/04/2018 - Changed Customer table name to Users to align with other code,
                 alongside the first column name.
*/

CREATE TABLE Items (
    ItemID              INT             NOT NULL    AUTO_INCREMENT,
    ItemName            VARCHAR(50)     NOT NULL, 
    ItemPrice           DECIMAL(15,2)   NOT NULL,
    ItemQuantity        INT             NOT NULL,
    PRIMARY KEY (ItemID)
);

CREATE TABLE Discount 
(
    DiscountID          INT             NOT NULL    AUTO_INCREMENT,
    DiscountCode        VARCHAR(50)     NOT NULL,
    DiscountPercentage  INT             NOT NULL,
    PRIMARY KEY (DiscountID)
);

CREATE TABLE Staff
(
    StaffID             INT             NOT NULL    AUTO_INCREMENT,
    FirstName           VARCHAR(50)     NOT NULL,
    LastName            VARCHAR(50)     NOT NULL,
    Username            VARCHAR(50)     NOT NULL,
    Passphrase          VARCHAR(50)     NOT NULL,
    PRIMARY KEY (StaffID)
);

/* Table name change */
CREATE TABLE Users
(
    /* First field name changed */
    UserID              INT             NOT NULL    AUTO_INCREMENT,
    FirstName           VARCHAR(50)     NOT NULL,
    LastName            VARCHAR(50)     NOT NULL,
    EmailAddress        VARCHAR(100)    NOT NULL,
    Username            VARCHAR(50)     NOT NULL,
    Passphrase          VARCHAR(50)     NOT NULL,
    PRIMARY KEY (CustomerID)
);

/* Need a one to many relation table in addition */
CREATE TABLE Orders
(
    OrderID             INT             NOT NULL    AUTO_INCREMENT,
    CustomerID          INT             NOT NULL,
    /* ItemID  INT NOT NULL, */
    /* will need to be able to implement multiple item ID's, or else
        people will only be able to order one thing at a time */
    OrderDate           VARCHAR(50)     NOT NULL,
    TotalOrderTab       DECIMAL(15,2)   NOT NULL,
    PRIMARY KEY (OrderID),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID)
    /* FOREIGN KEY (ItemID) REFERENCES Items(ItemID) */
);
    
CREATE TABLE ItemsInOrder
(
    OrderID             INT             NOT NULL,
    ItemID              INT             NOT NULL,
    FOREIGN KEY (ItemID) REFERENCES Items(ItemID),
    FOREIGN KEY (Orders) REFERENCES Orders(OrderID)
)

/* Customer will make an order and  */

/* Assumed workflow for ordering is as follows */
/*  1. Customer registers details 
    2. Customer puts orders in a cart for later ordering
    3. Customer orders items
    4. Order is generated and details are stored in 'Orders' table
    5. Items selected are looked up, their ID's retrieved and an order
        number assigned to it (the one in the same session), and then
        entered into the database.
        This is repeated until there are no items left in the cart.
*/