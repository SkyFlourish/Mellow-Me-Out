-- Data Insertion:
-------------------------------------------------------------------------------
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Aromatherapy Massage', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Lymphatic Massage', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Indian Head Massage', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Body Mud Wrap', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Body Exfoliate', 'Loren Ipusm');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Natural Full Set', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Half Set', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Refills', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Eyelash Tint', 'Loren Ipsum');
INSERT INTO Services (ServiceName, ServiceDescription)
VALUES ('Eyebrow Tint', 'Loren Ipsum');
-------------------------------------------------------------------------------

-------------------------------------------------------------------------------
INSERT INTO ServicesPricing (ServiceID, ServiceTime, ServicePrice)
VALUES ('1', '60', '75.00');
INSERT INTO ServicesPricing (ServiceID, ServiceTime, ServicePrice)
VALUES ('1', '30', '45.00');
INSERT INTO ServicesPricing (ServiceID, ServiceTime, ServicePrice)
VALUES ('2', '60', '75.00');
INSERT INTO ServicesPricing (ServiceID, ServiceTime, ServicePrice)
VALUES ('3', '30', '45.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('4', '70.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('5', '50.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('6', '90.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('7', '70.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('8', '45.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('9', '25.00');
INSERT INTO ServicesPricing (ServiceID, ServicePrice)
VALUES ('10', '15.00');
-------------------------------------------------------------------------------

-- -------------------------------------------------------------------------------
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Aromatherapy Massage', '75.00', '1', '60');
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Aromatherapy Massage', '45.00', '1', '30');
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Lymphatic Massage', '75.00', '1', '60');
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Indian Head Massage', '45.00', '1', '30');
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Body Mud Wrap', '70.00', '2', NULL);
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Body Exfoliate', '50.00', '2', NULL);
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Natural Full Set', '90.00', '3', NULL);
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Half Set', '70.00', '3', NULL);
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Refills', '45.00', '3', NULL);
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Eyelash Tint', '25.00', '3', NULL);
-- INSERT INTO Services (ServiceName, ServicePrice, ServiceType, ServiceTime)
-- VALUES ('Eyebrow Tint', '15.00', '3', NULL);
-- -------------------------------------------------------------------------------

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
INSERT INTO Staff (FirstName,LastName,Username,Passphrase)
VALUES ('user','name','Username','Password');
-------------------------------------------------------------------------------

INSERT INTO AdminStaff (username)
VALUES ('Username');

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
