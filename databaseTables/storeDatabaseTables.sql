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
    12/05/2018 - Split blog tables up, changed booking table to allow
                for bookings without an account with the site.
    13/05/2018 - Added table for contact-us page
    14/05/2018 - Corrected table structure and made sure tables can be made
                withour error
    20/05/2018 - Added image storage location line to services table, not likely to be
                permanent spot for it
*/

CREATE TABLE Services (
    ServiceID                   INT             NOT NULL    AUTO_INCREMENT,
    ServiceName                 VARCHAR(50)     NOT NULL,
    ServicePrice                DECIMAL(15,2)   NOT NULL,
    ServiceType                 INT             NOT NULL,
    ServiceTime                 INT,
    ServiceImg                  VARCHAR(100)    NULL,
    PRIMARY KEY (ServiceID)
);
-- CREATE TABLE ServicesImgVariant (
--     ServiceID                   INT             NOT NULL    AUTO_INCREMENT,
--     ServiceName                 VARCHAR(50)     NOT NULL,
--     ServicePrice                DECIMAL(15,2)   NOT NULL,
--     ServiceType                 INT             NOT NULL,
--     ServiceTime                 INT,
--     ServiceImg                  VARCHAR(100)    NULL,
--     PRIMARY KEY (ServiceID)
-- );
/* Running under the assumption that services will only have one photo attached for now */
/* Also assuming that the string will be built in PHP and that the directory will be specified */
/* Service types (massages, eyelash extensions and others will be assigned a number)
    This will help in displaying data depending on the users viewing selection */
/* For now services will be assigned as follows:
Massage             = 1
Spa                 = 2
Nails               = 3
Eyelash extensions  = 4
Undefined           = 0
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
/* She would also like package deals, keep that in mind */

CREATE TABLE Discount
(
    /* DiscountID                  INT             NOT NULL    AUTO_INCREMENT, */
    DiscountCode                VARCHAR(50)     NOT NULL,
    DiscountPercentage          INT             NOT NULL,
    PRIMARY KEY (DiscountCode)
);
/* Likely to be generated via Excel or some other such tool */

CREATE TABLE Faq
(
    FaqID                       INT             NOT NULL    AUTO_INCREMENT,
    FaqTitle                    TEXT            NOT NULL,
    FaqContents                 TEXT            NOT NULL,
    PRIMARY KEY (FaqID)
);


CREATE TABLE ContactUs
(
  ContactUsID                 INT               NOT NULL    AUTO_INCREMENT,
  FirstName                   VARCHAR(50)       NOT NULL,
  LastName                    VARCHAR(50)       NOT NULL,
  EmailAddress                VARCHAR(100)      NOT NULL,
  Subject                     TEXT              NOT NULL,
  Message                     TEXT              NOT NULL,
  PRIMARY KEY (ContactUsID)
);

CREATE TABLE Staff
(
    FirstName                   VARCHAR(50)     NOT NULL,
    LastName                    VARCHAR(50)     NOT NULL,
    Username                    VARCHAR(50)     NOT NULL,
    Passphrase                  VARCHAR(50)     NOT NULL,
    PRIMARY KEY (Username)
);

CREATE TABLE AdminStaff
(
    AdminStaffID                INT             NOT NULL    AUTO_INCREMENT,
    Username                    VARCHAR(50)     NOT NULL,
    PRIMARY KEY (AdminStaffID),
    FOREIGN KEY (Username) REFERENCES Staff(Username)
);

/* Table name change */
CREATE TABLE Users
(
    /* UserID removed, Username should be forced to be unique */
    Username                    VARCHAR(50)     NOT NULL,
    Passphrase                  VARCHAR(50)     NOT NULL,
    FirstName                   VARCHAR(50)     NOT NULL,
    LastName                    VARCHAR(50)     NOT NULL,
    EmailAddress                VARCHAR(100)    NOT NULL,
    PhoneNumber                 INT             NULL,
    PRIMARY KEY (Username)
);


/* Need a one to many relation table in addition */
CREATE TABLE Bookings
(
    BookingID                   INT             NOT NULL    AUTO_INCREMENT,
    /* ItemID  INT NOT NULL, */
    /* will need to be able to implement multiple item ID's, or else
        people will only be able to order one thing at a time */
    /*  Question - will we have an appointment system for all our
        services? Will they fit the time blocks that have been proposed by
        Lachy? */
    BookingDateTimeStart        DATETIME        NOT NULL,
    BookingDateTimeEnd          DATETIME        NOT NULL,
    BookingRegisteredFirstName  VARCHAR(50)     NOT NULL,
    BookingRegisteredLastName   VARCHAR(50)     NOT NULL,
    BookingRegisteredPhone      INT             NOT NULL,
    BookingRegisteredEmail      VARCHAR(100)    NOT NULL,
    /* BookingTime                 VARCHAR(50)     NOT NULL, */
    /* BookingServiceLength        INT             NULL, */
    TotalOrderTab               DECIMAL(15,2)   NOT NULL,
    PRIMARY KEY (BookingID)
    /* FOREIGN KEY (ItemID) REFERENCES Items(ItemID) */
);
/* People should be able to book a session without having to log in to
  an account, therefore either details from a the logged in users table-row
  should be used or if those details do not exist, then they will need to be
  asked for so that validation can happen after the fact */

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

CREATE TABLE BlogContent
(
    BlogID                      INT             NOT NULL    AUTO_INCREMENT,
    BlogTitle                   TEXT            NOT NULL,
    BlogContent                 TEXT            NULL,
    BlogContentTimestamp        DATETIME        NOT NULL    DEFAULT   CURRENT_TIMESTAMP,
    BlogCategory                VARCHAR(50)     NULL,
    Username                    VARCHAR(50)     NOT NULL,
    PRIMARY KEY (BlogID),
    FOREIGN KEY (Username) REFERENCES Staff(Username)
);

CREATE TABLE BlogComments
(
    BlogCommentID               INT             NOT NULL    AUTO_INCREMENT,
    BlogCommentText             TEXT            NOT NULL,
    Username                    VARCHAR(50)     NOT NULL,
    BlogID                      INT             NOT NULL,
    BlogCommentTimestamp        DATETIME        NOT NULL    DEFAULT   CURRENT_TIMESTAMP,
    PRIMARY KEY (BlogCommentID),
    FOREIGN KEY (Username) REFERENCES Users(Username),
    FOREIGN KEY (BlogID) REFERENCES BlogContent(BlogID)
);

CREATE TABLE BlogTags
(
    BlogTagID                   INT             NOT NULL    AUTO_INCREMENT,
    BlogTag                     VARCHAR(100)    NOT NULL,
    BlogID                      INT             NOT NULL,
    PRIMARY KEY (BlogTagID),
    FOREIGN KEY (BlogID) REFERENCES BlogContent(BlogID)
);

/* CREATE TABLE BlogCommentDisplay
(
    BlogDisplayID               INT             NOT NULL    AUTO_INCREMENT,
    BlogID                      INT             NOT NULL,
    BlogCommentID               INT             NOT NULL,
    PRIMARY KEY (BlogDisplayID),
    FOREIGN KEY (BlogID) REFERENCES BlogContent(BlogID),
    FOREIGN KEY (BlogCommentID) REFERENCES BlogComments(BlogCommentID)
); */
/* Should act as a one-to-many table relationship, loading the blog conntent
    and then iterating through the comments depending on the blog's ID,
    it will also allow for an easy count function when it comes time to
    implement */

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
