Reference commands

show databases;

use mellowmeout;

DROP TABLE ServicesInBooking, ServiceDescription, Services, Discount, Staff, Users, ServicesBooked, NonBussinessDays, Booking;

show tables;

-- Data Insertion:
-------------------------------------------------------------------------------
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Aromatherapy Massage', '75.00', '1', '60');
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Aromatherapy Massage', '45.00', '1', '30');
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Lymphatic Massage', '75.00', '1', '60');
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Indian Head Massage', '45.00', '1', '30');
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Body Mud Wrap', '70.00', '2', NULL);
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Body Exfoliate', '50.00', '2', NULL);
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Natural Full Set', '90.00', '3', NULL);
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Half Set', '70.00', '3', NULL);
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Refills', '45.00', '3', NULL);
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Eyelash Tint', '25.00', '3', NULL);
INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
VALUES ('Eyebrow Tint', '15.00', '3', NULL);
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO ServicesImgVariant (ServiceName, ServicePrice, ServiceType, ServiceTime, ServiceImg)
VALUES ('Eyebrow Tint', '15.00', '3', NULL,'img/brow-tint.jpg');
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO Users (Username,Passphrase,FirstName,LastName,EmailAddress,PhoneNumber)
VALUES ('someUSER','thisisapassword','first','last','email@email.com','5555555');
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO Staff (FirstName,LastName,Username,Passphrase)
VALUES ('stafffirst','stafflast','someSTAFF','somepassword');
INSERT INTO Staff (FirstName,LastName,Username,Passphrase)
VALUES ('stafffirstsecond','stafflastsecond','someSTAFFsecond','somepassword');
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO BlogContent (BlogTitle,BlogContent,BlogCategory,Username)
VALUES ('This is a title','This is content','This is a category','someSTAFF');
INSERT INTO BlogContent (BlogTitle,BlogContent,BlogCategory,Username)
VALUES ('This a title','is content','This a category','someSTAFFsecond');
INSERT INTO BlogContent (BlogTitle,BlogContent,BlogCategory,Username)
VALUES ('This is title','This content','This is category','someSTAFF');
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','1');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','1');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','2');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','2');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','3');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','3');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is another comment','someUSER','1');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This isacomnt','someUSER','1');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a test','someUSER','2');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','2');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','3');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a comment','someUSER','3');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is yuet another cococococment comment','someUSER','1');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('TTTThis is a comment','someUSER','1');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('Thhhhhis is a comment','someUSER','2');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This iiiiis a comment','someUSER','2');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This is a ccccccomment','someUSER','3');
INSERT INTO BlogComments (BlogCommentText,Username,BlogID)
VALUES ('This isisjajis a comment','someUSER','3');
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO BlogTags (BlogTag,BlogID)
VALUES ('Tag','1');
INSERT INTO BlogTags (BlogTag,BlogID)
VALUES ('Tag1','1');
INSERT INTO BlogTags (BlogTag,BlogID)
VALUES ('ter3','2');
INSERT INTO BlogTags (BlogTag,BlogID)
VALUES ('Taiog','2');
INSERT INTO BlogTags (BlogTag,BlogID)
VALUES ('Taaalog','3');
INSERT INTO BlogTags (BlogTag,BlogID)
VALUES ('Tauioewrg','3');
-------------------------------------------------------------------------------

SELECT b.Username,
  b.BlogTitle,
  b.BlogContent,
  b.BlogContentTimestamp,
  b.BlogCategory,
  bc.BlogCommentText,
  bc.Username,
  bc.BlogCommentTimestamp,
  bt.BlogTag
FROM BlogContent AS b
INNER JOIN BlogTags AS bt
    ON b.BlogID = bt.BlogID
INNER JOIN BlogComments AS bc
    ON b.BlogID = bc.BlogID
WHERE b.BlogID = 1;

/* Query for grabbing comments for a blog */
/* How do we get the blog ID number? */
SELECT bc.BlogCommentText,
  bc.Username,
  bc.BlogCommentTimestamp
FROM BlogContent AS b
INNER JOIN BlogComments AS bc
    ON b.BlogID = bc.BlogID
WHERE b.BlogID = 1;

SELECT bc.BlogCommentText,
  bc.Username,
  bc.BlogCommentTimestamp
FROM BlogContent AS b
INNER JOIN BlogComments AS bc
    ON b.BlogID = bc.BlogID
WHERE b.BlogID = 2;

SELECT s.ServiceName,
  sp.ServicePrice,
  sp.ServiceTime
 FROM Services AS s
 INNER JOIN ServicesPricing AS sp
    ON s.ServiceID = sp.ServiceID
WHERE s.ServiceID = 1;

/* Query for grabbing tags for content */
/* As above */
SELECT bt.BlogTag
FROM BlogTags AS bt
INNER JOIN BlogContent AS b
    ON b.BlogID = bt.BlogID
WHERE b.BlogID = 1;

SELECT bt.BlogTag
FROM BlogTags AS bt
INNER JOIN BlogContent AS b
    ON b.BlogID = bt.BlogID
WHERE b.BlogID = 2;
