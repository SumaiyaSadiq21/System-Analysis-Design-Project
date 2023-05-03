CREATE TABLE Customer (Name varchar(255) NOT NULL, Email varchar(255) NOT NULL, Mobile_Number int(11) NOT NULL, Address varchar(255) NOT NULL, Password varchar(50) NOT NULL, `24/7LiveServiceAssistantID` int(10), Delivery_InfoCustomerEmail varchar(255), PRIMARY KEY (Email));
CREATE TABLE Admin (Name varchar(255) NOT NULL, AdminID int(10) NOT NULL AUTO_INCREMENT, Email varchar(255) NOT NULL UNIQUE, Mobile_Number int(11) NOT NULL, CustomerEmail varchar(255) NOT NULL, Password varchar(50) NOT NULL, PRIMARY KEY (AdminID));
CREATE TABLE Medical_Components (Component_Number varchar(255) NOT NULL, Component_details varchar(255) NOT NULL, Component_Image varchar(255), Component_Name varchar(255) NOT NULL, Cost varchar(8) NOT NULL, CustomerEmail varchar(255), AdminAdminID int(10), PRIMARY KEY (Component_Number));
CREATE TABLE Prescription_upload (Patient_Name varchar(255) NOT NULL, Prescription varchar(255) NOT NULL, CustomerEmail varchar(255) NOT NULL, SerialNo int(11) NOT NULL AUTO_INCREMENT, Details varchar(255) NOT NULL, PRIMARY KEY (SerialNo));
CREATE TABLE Medicine (Medicine_Name varchar(255) NOT NULL, Price varchar(8) NOT NULL, Medicine_Image varchar(255), AdminAdminID int(10), Medicine_number varchar(255) NOT NULL, Medicine_details varchar(255) NOT NULL, PRIMARY KEY (Medicine_number));
CREATE TABLE Payment (Paymentmethod varchar(50) NOT NULL, Amount varchar(10), Card_Number int(16), CustomerEmail varchar(255) NOT NULL, PRIMARY KEY (CustomerEmail));
CREATE TABLE Delivery_Info (Address varchar(255) NOT NULL, CustomerEmail varchar(255) NOT NULL, PRIMARY KEY (CustomerEmail));
CREATE TABLE Customer_Medicine (CustomerEmail varchar(255) NOT NULL, MedicineAdminAdminID int(10) NOT NULL, MedicineMedicine_number varchar(255) NOT NULL, PRIMARY KEY (CustomerEmail, MedicineAdminAdminID, MedicineMedicine_number));
CREATE TABLE `24/7LiveService` (AssistantID int(10) NOT NULL AUTO_INCREMENT, AssistantName varchar(255) NOT NULL, PRIMARY KEY (AssistantID));
ALTER TABLE Prescription_upload ADD CONSTRAINT FKPrescripti999522 FOREIGN KEY (CustomerEmail) REFERENCES Customer (Email);
ALTER TABLE Medical_Components ADD CONSTRAINT FKMedical_Co274572 FOREIGN KEY (AdminAdminID) REFERENCES Admin (AdminID);
ALTER TABLE Payment ADD CONSTRAINT FKPayment960276 FOREIGN KEY (CustomerEmail) REFERENCES Customer (Email);
ALTER TABLE Customer ADD CONSTRAINT FKCustomer454857 FOREIGN KEY (Delivery_InfoCustomerEmail) REFERENCES Delivery_Info (CustomerEmail);
ALTER TABLE Medical_Components ADD CONSTRAINT FKMedical_Co874395 FOREIGN KEY (CustomerEmail) REFERENCES Customer (Email);
ALTER TABLE Customer_Medicine ADD CONSTRAINT FKCustomer_M579817 FOREIGN KEY (CustomerEmail) REFERENCES Customer (Email);
ALTER TABLE Customer_Medicine ADD CONSTRAINT FKCustomer_M763306 FOREIGN KEY (MedicineMedicine_number) REFERENCES Medicine (Medicine_number);
ALTER TABLE Customer ADD CONSTRAINT FKCustomer400773 FOREIGN KEY (`24/7LiveServiceAssistantID`) REFERENCES `24/7LiveService` (AssistantID);
ALTER TABLE Medicine ADD CONSTRAINT FKMedicine673784 FOREIGN KEY (AdminAdminID) REFERENCES Admin (AdminID);
