-- Create Warehouse Table
CREATE TABLE Warehouse (
    WarehouseID INT PRIMARY KEY,
    WarehouseName VARCHAR(255),
    Location VARCHAR(255),
    Capacity INT
);

-- Create Supplier Table
CREATE TABLE Supplier (
    SupplierID INT PRIMARY KEY,
    SupplierName VARCHAR(255),
    ContactNumber VARCHAR(20),
    State VARCHAR(2),
    Address VARCHAR(255),
    StreetName VARCHAR(50),
    PostalCode VARCHAR(6),
    City VARCHAR(20),
    Email VARCHAR(255)
);

-- Create Drug Table
CREATE TABLE Drug (
    DrugID INT PRIMARY KEY,
    SupplierID INT, 
    DrugName VARCHAR(255),
    Price DECIMAL(10, 2),
    ExpiryDate DATE,
    FOREIGN KEY (SupplierID) REFERENCES Supplier(SupplierID)
);

-- Create Employee Table
CREATE TABLE Employee (
    EmployeeID INT PRIMARY KEY,
    EmployeeName VARCHAR(255),
    ContactNo VARCHAR(20),
    WarehouseID INT,
    Email VARCHAR(255),
    FOREIGN KEY (WarehouseID) REFERENCES Warehouse(WarehouseID)
);

-- Create Customer Table
CREATE TABLE Customer (
    CustomerID INT PRIMARY KEY,
    CustomerName VARCHAR(255),
    ContactNumber VARCHAR(20),
    Address VARCHAR(255),
    State VARCHAR(2),
    StreetName VARCHAR(50),
    PostalCode VARCHAR(6),
    AptNo VARCHAR(20),
    City VARCHAR(255),
    Email VARCHAR(255),
    Password VARCHAR(255)
);

-- Create Pharmacy Table
CREATE TABLE Pharmacy (
    PharmacyID INT PRIMARY KEY,
    PharmacyName VARCHAR(255),
    ContactNumber VARCHAR(20),
    Address VARCHAR(255),
    State VARCHAR(2),
    StreetName VARCHAR(50),
    PostalCode VARCHAR(6),
    City VARCHAR(255),
    Email VARCHAR(255)
);

-- Create Hospital Table
CREATE TABLE Hospital (
    HospitalID INT PRIMARY KEY,
    HospitalName VARCHAR(255),
    ContactNumber VARCHAR(20),
    Address VARCHAR(255),
    State VARCHAR(2),
    StreetName VARCHAR(50),
    PostalCode VARCHAR(6),
    Country VARCHAR(20),
    City VARCHAR(20),
    Email VARCHAR(255)
);

-- Create Orders Table
CREATE TABLE Orders (
    OrderID INT PRIMARY KEY,
    CustomerID INT,
    PharmacyID INT,
    HospitalID INT,
    OrderDate DATE,
    DeliveryDate DATE,
    DeliveryStatus VARCHAR(255),
    OrderQuantity INT,
    Amount DECIMAL(12, 2),
    FOREIGN KEY (CustomerID) REFERENCES Customer(CustomerID),
    FOREIGN KEY (PharmacyID) REFERENCES Pharmacy(PharmacyID),
    FOREIGN KEY (HospitalID) REFERENCES Hospital(HospitalID)
);

-- Create Order_Warehouse Table
CREATE TABLE Order_Warehouse (
    WarehouseID INT,
    OrderID INT,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (WarehouseID) REFERENCES Warehouse(WarehouseID)
);

-- Create Orders_Drug Table
CREATE TABLE Orders_Drug (
    DrugID INT,
    OrderID INT,
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (DrugID) REFERENCES Drug(DrugID)
);

-- Create Stock Table
CREATE TABLE Stock (
    DrugID INT,
    WarehouseID INT,
    DrugQuantity INT,
    PRIMARY KEY (DrugID, WarehouseID),
    FOREIGN KEY (DrugID) REFERENCES Drug(DrugID),
    FOREIGN KEY (WarehouseID) REFERENCES Warehouse(WarehouseID)
);
