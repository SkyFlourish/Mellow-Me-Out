/* Changes */
/*
    05/04/2018 - Added a table (ItemsInOrder) to address issue of only being able
                to order one item at a time, as well as removing the ItemID
                references in the Orders table and shifting it into the new table
                for a one to many relationship.
                Also did some formatting work to make it easier to read.
    15/04/2018 - Changed Customer table name to Users to align with other code,
                 alongside the first column name.
    22/04/2018 - Added new table (ServiceDescriptions).
                Changed Items table to services table to
                better reflect the clients needs.
                Put in a number assignment.
                Hopefully add booking functionality.
    23/04/2018 - Changes orders table to booking table, added a service length
                and a booking time.
                Changes references of order to booking.
    24/04/2018 - Added a table for closed days and holidays.
    09/05/2018 - Added blog and faq table, will likely need to change to
                something more functional.
*/

CREATE TABLE Services (
    ServiceID                   INT             NOT NULL    AUTO_INCREMENT,
    ServiceName                 VARCHAR(50)     NOT NULL,
    ServicePrice                DECIMAL(15,2)   NOT NULL,
    ServiceType                 INT             NOT NULL,
    ServiceTime                 INT,
    PRIMARY KEY (ServiceID)
);
/* Service types (massages, eyelash extensions and others will be assigned a number)
    This will help in displaying data depending on the users viewing selection */
/* For now services will be assigned as follows:
Massage             = 1
Spa                 = 2
Eyelash extensions  = 3
*/
/* Service time will be stored as an integer to simplify the storing process.
    It can be stored as NULL due to not all services having a time assignment,
    though I do assume that they will eventually have one. */

CREATE TABLE ServiceDescription
(
    ServiceDescriptionID        INT             NOT NULL    AUTO_INCREMENT,
    ServiceID                   INT             NOT NULL,
    ServiceDescription          TEXT,
    PRIMARY KEY (ServiceDescriptionID),
    FOREIGN KEY (ServiceID) REFERENCES Services(ServiceID)
);
/*
    Due to the nature of the services potentially being divied
    between time allocations, we may wither need loops to ensure both entries will
    have the same desctiption if ever the situation arose where one was
    deleted.
*/

CREATE TABLE Discount
(
    DiscountID                  INT             NOT NULL    AUTO_INCREMENT,
    DiscountCode                VARCHAR(50)     NOT NULL,
    DiscountPercentage          INT             NOT NULL,
    PRIMARY KEY (DiscountID)
);

CREATE TABLE Faq
(
    FaqID                       INT             NOT NULL    AUTO_INCREMENT,
    FaqTitle                    TEXT            NOT NULL,
    FaqContents                 TEXT            NOT NULL,
    PRIMARY KEY (FaqID)
);

CREATE TABLE BlogContent
(
    BlogID                      INT             NOT NULL    AUTO_INCREMENT,
    BlogTitle                   TEXT            NOT NULL,
    BlogContent                 TEXT            NULL,
    BlogTime                    DATETIME        NOT NULL,
    BlogCategory                VARCHAR(50)     NULL,
    BlogTags                    VARCHAR(100)    NULL,
    BlogStaffID                 INT             NOT NULL,
    PRIMARY KEY (BlogID),
    FOREIGN KEY (BlogStaffID) REFERENCES Staff(StaffID)
);

CREATE TABLE BlogComments
(
    BlogCommentID               INT             NOT NULL    AUTO_INCREMENT,
    BlogCommentText             TEXT            NOT NULL,
    BlogCommentUserID           INT             NOT NULL,
);

CREATE TABLE BlogCommentDisplay
(
    BlogDisplayID               INT             NOT NULL    AUTO_INCREMENT,
    BlogID                      INT             NOT NULL,
    BlogCommentID               INT             NOT NULL,
    PRIMARY KEY (BlogDisplayID),
    FOREIGN KEY (BlogID) REFERENCES BlogContent(BlogID),
    FOREIGN KEY (BlogCommentID) REFERENCES BlogComments(BlogCommentID)
);
/* Should act as a one-to-many table relationship, loading the blog conntent
    and then iterating through the comments depending on the blog's ID,
    it will also allow for an easy count function when it comes time to
    implement */

CREATE TABLE Staff
(
    StaffID                     INT             NOT NULL    AUTO_INCREMENT,
    FirstName                   VARCHAR(50)     NOT NULL,
    LastName                    VARCHAR(50)     NOT NULL,
    Username                    VARCHAR(50)     NOT NULL,
    Passphrase                  VARCHAR(50)     NOT NULL,
    PRIMARY KEY (StaffID)
);

CREATE TABLE AdminStaff
(
    AdminStaffID                INT             NOT NULL    AUTO_INCREMENT,
    StaffID                     INT             NOT NULL,
    PRIMARY KEY (AdminStaffID),
    FOREIGN KEY (StaffID) REFERENCES Staff(StaffID)
);

/* Table name change */
CREATE TABLE Users
(
    /* First field name changed */
    UserID                      INT             NOT NULL    AUTO_INCREMENT,
    FirstName                   VARCHAR(50)     NOT NULL,
    LastName                    VARCHAR(50)     NOT NULL,
    EmailAddress                VARCHAR(100)    NOT NULL,
    Username                    VARCHAR(50)     NOT NULL,
    Passphrase                  VARCHAR(50)     NOT NULL,
    PRIMARY KEY (UserID)
);


/* Need a one to many relation table in addition */
CREATE TABLE Bookings
(
    BookingID                   INT             NOT NULL    AUTO_INCREMENT,
    UserID                      INT             NOT NULL,
    /* ItemID  INT NOT NULL, */
    /* will need to be able to implement multiple item ID's, or else
        people will only be able to order one thing at a time */
    /*  Question - will we have an appointment system for all our
        services? Will they fit the time blocks that have been proposed by
        Lachy? */
    BookingDateTimeStart        DATETIME       NOT NULL,
    BookingDateTimeEnd          DATETIME       NOT NULL,
    /* BookingTime                 VARCHAR(50)     NOT NULL, */
    /* BookingServiceLength        INT             NULL, */
    TotalOrderTab               DECIMAL(15,2)   NOT NULL,
    PRIMARY KEY (BookingID),
    FOREIGN KEY (UserID) REFERENCES Users(UserID)
    /* FOREIGN KEY (ItemID) REFERENCES Items(ItemID) */
);

CREATE TABLE ServicesInBooking
(
    /* SibID = Services in booking ID */
    SibID                       INT             NOT NULL    AUTO_INCREMENT,
    ServiceID                   INT             NOT NULL,
    BookingID                   INT             NOT NULL,
    PRIMARY KEY (SibID),
    FOREIGN KEY (ServiceID) REFERENCES Services(ServiceID),
    FOREIGN KEY (BookingID) REFERENCES Bookings(BookingID)
);

CREATE TABLE ServicesBooked
(
    BookedServiceID             INT             NOT NULL    AUTO_INCREMENT,
    BookedServiceDate           DATE            NOT NULL,
    BookedServiceLength         INT             NULL,
    PRIMARY KEY (BookedServiceID)
);

CREATE TABLE NonBussinessDays
(
    NonBussinessDayID           INT             NOT NULL    AUTO_INCREMENT,
    NonBussinessDayDate         DATE            NOT NULL,
    PRIMARY KEY (NonBussinessDayID)
);
/* It's not ideal, but it may be the case where the admin or business owner will need
    to input the dates themselves due to the nature of public holidays being optional for
    busineeses and the like */

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

/* Vestigial tables for reference and backtracking
CREATE TABLE Items (
    ItemID              INT             NOT NULL    AUTO_INCREMENT,
    ItemName            VARCHAR(50)     NOT NULL,
    ItemPrice           DECIMAL(15,2)   NOT NULL,
    ItemQuantity        INT             NOT NULL,
    PRIMARY KEY (ItemID)
);
*/

/* For most of all of our queries, we will be using inner joins as they
will only return rows that match in both tables and leave the rest behind */
