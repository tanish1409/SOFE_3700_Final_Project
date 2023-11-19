-- Populate Warehouse Table
INSERT INTO Warehouse VALUES 
(12340, 'Brampton Warehouse', '24 Ocean St', 200),
(12341, 'Caledon Warehouse', '21 Russell Robert Cr', 250),
(12342, 'Mississauga Warehouse', '79 Lundy Lanes Rd', 180),
(12343, 'Oshawa Warehouse', '1272 Westroad Dr', 300),
(12344, 'Whitby Warehouse', '83 Audly Blvd', 350),
(12345, 'Scarbrough Warehouse', '6978 Uptown Ave', 220);

-- Populate Supplier Table
INSERT INTO Supplier VALUES 
(11, 'Shoppers', '+6472345637', 'ON', '152 Maple St', 'Maple St', 'V5A2H5', 'Toronto', 'Shoppers@gmail.com'),
(22, 'Drug Store', '+9972587926', 'NS', '456 Tauton Rd', 'Tauton Rd', 'L6R2Y9', 'Halifax', 'Drugshopstore@hotmail.com'),
(33, 'East Wood Pharmacy', '+4167389922', 'QC', '7839 Netflix Ln', 'Netflix Ln', 'A7U8C0', 'Montreal', 'EWPharmacy@yahoo.com'),
(44, 'Health Fitness Center', '+3652273849', 'AB', '132 Healthdoc Dr', 'Healthdoc Dr', 'P9P2S5', 'Banff', 'health@icloud.com'),
(55, 'Wellness Center', '+9052172765', 'BC', '345 Center Blvd', 'Center Blvd', 'Q5R3Q1', 'Vancouver', 'wellnesscenter1@gmail.com'),
(66, 'Life Plus Meds', '+2179169200', 'NL', '68 Lifeless Ave', 'Lifeless Ave', 'G6H4V8', 'LifeTown', 'lifeplusmeds@gmail.com');

-- Populate Drug Table
INSERT INTO Drug (DrugID, SupplierID, DrugName, Price, ExpiryDate) VALUES 
(121, 11, 'Paracetamol', 7.20, '2029-10-31'),
(222, 22 , 'Ibuprofen', 6.75, '2025-01-27'),
(323, 33, 'Aspirin', 4.25, '2026-06-30'),
(424, 44, 'Amoxicillin', 11.00, '2025-12-28'),
(525, 55, 'Narcotics', 19.50, '2025-09-28'),
(626, 66, 'Candelxlin', 25.75, '2027-04-30');

-- Populate Employee Table
INSERT INTO Employee VALUES 
(1001, 'Hetvi Vaghela', '+9051234522', 12340, 'hetvi.vaghela@gmail.com'),
(2001, 'Tanish Singla', '+4167812233', 12341, 'Tanish@gmail.com'),
(3001, 'Akshat Gupta', '+7362254545', 12342, 'Akshatgupta@hotmail.com'),
(4001, 'Avery Thurston', '+7218822727', 12343, 'Avery@outlookmail.com'),
(5001, 'Saumya Pandya', '+3652227609', 12344, 'Saumyapanda@gmail.com'),
(6001, 'Saahir Dhani', '+6475651100', 12345, 'Dhanisaahir@hotmail.com');

-- Populate Customer Table
INSERT INTO Customer VALUES 
(10, 'Eva Brown', '+2637443256', '1223 Ellm St', 'AB', 'Elmm St', 'U6R8I8', '101', 'Alberta', 'eva.brown@gmail.com'),
(29, 'Frank Kaka', '+8463772563', '4956 Oakwood Rd', 'ON', 'Oakwood Rd', 'P0P2V2', '102', 'Toronto', 'frank@hotmail.com'),
(38, 'Grace Billy', '+8400998877', '79 Pinevalley Ln', 'NS', 'Pinevalley Ln', 'B9N9N9', '103', 'Halifax', 'grace.billly@gmail.com'),
(47, 'Wednesday Adams', '+1122554422', '482 Birchbox Dr', 'NL', 'Birchbox Dr', 'Y0Y0Q0', '104', 'Youkon', 'adams@icloud.com'),
(56, 'Ivy White', '+2159867788', '34 Cedarvalley Blvd', 'QC', 'Cedarvalley Blvd', 'L8R2O4', '105', 'Qubbec', 'whitesrdhs@gmail.com'),
(65, 'Jack Mama', '+3266772299', '693 Maplesyrup Ave', 'BC', 'Maplesyrup Ave', 'S9T1L8', '106', 'jasper', 'jack.w@hotmail.com');

-- Populating Pharmacy Table
INSERT INTO Pharmacy VALUES 
(155, 'MedlineCare Pharmacy', '123-556-7890', '83 Mamacare St', 'ON', 'Mamacare St', 'A1A1A1', 'Vagus', 'medlinecare@gmail.com'),
(255, 'Wellness Center Pharmacy', '234-567-9999', '22 Wellness Blvd', 'PL', 'Wellness Blvd', 'B2B2B2', 'Richill', 'wellness@hotmail.com'),
(355, 'Life Saving Pharmacy', '345-111-9012', '340 Lifeline Rd', 'QC', 'Lifeline Rd', 'C3C3C3', 'LifelineCity', 'lifesaving@gmail.com'),
(455, 'Health Center Hub Pharmacy', '647-789-0123', '86 MedPlaza', 'AB', 'MedPlaza', 'D4D4D4', 'Star City', 'healthcenterhub@gmail.com'),
(555, 'Central Pharmacy', '418-840-1234', '50 CureCenter', 'BC', 'CureCenter', 'E5E5E5', 'Brown Town', 'Central@yahoomail.com'),
(655, 'First Plus Pharmacy', '998-901-2345', '67878 First Ave', 'ON', 'First Ave', 'G8G9J9', 'OMG Town', 'pharmacyfirst@gmail.com');

-- Populating Hospital Table
INSERT INTO Hospital (HospitalID, HospitalName, ContactNumber, Address, State, StreetName, PostalCode, Country, City, Email) VALUES 
(998, 'Brampton Hospital', '365-445-7777', '992 Parkwood Dr', 'ON', 'Medical Dr', 'H7H7H8', 'Canada', 'Oshawa', 'HospitalB@gmail.com'),
(997, 'City Hospital', '867-222-0000', '202 Care Center Way', 'AB', 'Care Way', 'K8K8K8', 'Canada', 'Bannff', 'CityHospital11@hotmail.com'),
(996, 'Kirkland Hospital', '901-947-5678', '3013 Medicare Health Blvd', 'ON', 'Health Blvd', 'S0S2H2', 'Canada', 'Ottawa', 'KirkHospital@icloud.com'),
(995, 'Children Hospital', '416-345-6789', '44 Cure St', 'QC', 'Malleymud St', 'I4I5I6', 'Canada', 'Bleu', 'Childrenhosp@hotmail.com'),
(994, 'Healthcare Hospital', '647-456-7890', '5095 Heal Rd', 'BC', 'Heation Rd', 'Q9Z9Z9', 'Canada', 'Bolumbia', 'health@gmail.com'),
(993, 'Civic Treatment Central Hospital', '721-567-8901', '226 Treatville Ave', 'ON', 'Treat Ave', 'V0V9I9', 'Canada', 'Ajax', 'CivicHospital@gmail.com');

-- Populating Orders Table
INSERT INTO Orders (OrderID, CustomerID, PharmacyID, HospitalID, OrderDate, DeliveryDate, DeliveryStatus, OrderQuantity, Amount) VALUES 
(144, 10, NULL, NULL, '2023-11-01', '2023-11-01', 'Delivered', 15, 580.00),
(244, NULL, 255, NULL, '2023-12-19', '2023-12-29', 'In Transit', 10, 750.00),
(344, NULL, NULL, 996, '2023-01-03', '2023-01-03', 'Delivered', 5, 250.00),
(444, 47, NULL, NULL, '2023-06-14', '2023-06-14', 'Delivered', 12, 690.00),
(544, NULL, 555, NULL, '2024-08-24', '2024-08-30', 'Pending', 8, 450.00),
(644, NULL, NULL, 993, '2024-05-06', '2024-07-27', 'Pending', 30, 1900.00);

-- Populating Order_Warehouse Table
INSERT INTO Order_Warehouse (WarehouseID, OrderID) VALUES 
(12340, 144),
(12341, 244),
(12342, 344),
(12343, 444),
(12344, 544),
(12345, 644);

-- Populating Orders_Drug Table
INSERT INTO Orders_Drug (DrugID, OrderID) VALUES 
(121, 144),
(222, 244),
(323, 344),
(121, 144),
(424, 444),
(525, 544);

-- Populating Stock Table
INSERT INTO Stock (DrugID, WarehouseID, DrugQuantity) VALUES 
(121, 12340, 190),
(222, 12341, 230),
(323, 12342, 100),
(424, 12343, 120),
(525, 12344, 180),
(626, 12345, 170);