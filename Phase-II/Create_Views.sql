-- Join of Order, Customer, Phamacy and Hospital
CREATE VIEW View1 AS
SELECT o.OrderID, c.CustomerName, p.PharmacyName, h.HospitalName
FROM Orders o
JOIN Customer c ON o.CustomerID = c.CustomerID
JOIN Pharmacy p ON o.PharmacyID = p.PharmacyID
JOIN Hospital h ON o.HospitalID = h.HospitalID;

-- Orders grouped by customer and pharmacy with total amount
CREATE VIEW View2 AS
SELECT o.CustomerID, o.PharmacyID, SUM(o.Amount) AS TotalAmount
FROM Orders o
GROUP BY o.CustomerID, o.PharmacyID;

-- Order details with customer information
CREATE VIEW View3 AS
SELECT o.OrderID, o.OrderDate, o.DeliveryDate, o.DeliveryStatus, c.CustomerName, c.ContactNumber, c.Address, c.City, c.Email
FROM Orders o
JOIN Customer c ON o.CustomerID = c.CustomerID;

-- using full join to compare warehouse stock
CREATE VIEW View4 AS
SELECT w.WarehouseName, d.DrugName, st1.DrugQuantity AS Quantity1, st2.DrugQuantity AS Quantity2
FROM Warehouse w
LEFT JOIN Stock st1 ON w.WarehouseID = st1.WarehouseID
RIGHT JOIN Stock st2 ON w.WarehouseID = st2.WarehouseID
AND st1.DrugID = st2.DrugID
LEFT JOIN Drug d ON st1.DrugID = d.DrugID;

-- Which inventory is available at which warehouse using Union
CREATE VIEW View5 AS
SELECT WarehouseID, DrugID
FROM Stock
WHERE DrugID = 121
UNION
SELECT WarehouseID, DrugID
FROM Stock
WHERE DrugID = 222;


-- Top 5 customers with the most orders
CREATE VIEW View6 AS
SELECT c.CustomerName, COUNT(o.OrderID) AS OrderCount
FROM Customer c
LEFT JOIN Orders o ON c.CustomerID = o.CustomerID
GROUP BY c.CustomerName
ORDER BY OrderCount DESC
LIMIT 5;

-- Warehouse capacity utilization
CREATE VIEW View7 AS
SELECT w.WarehouseName, SUM(s.DrugQuantity) AS UsedCapacity, w.Capacity
FROM Warehouse w
LEFT JOIN Stock s ON w.WarehouseID = s.WarehouseID
GROUP BY w.WarehouseName, w.Capacity;

-- Upcoming expiry dates for drugs
CREATE VIEW View8 AS
SELECT d.DrugName, d.ExpiryDate
FROM Drug d
WHERE d.ExpiryDate > NOW()
ORDER BY d.ExpiryDate;

-- Total order amount as pharmacy
CREATE VIEW View9 AS
SELECT p.PharmacyName, SUM(o.Amount) AS TotalAmount
FROM Pharmacy p
LEFT JOIN Orders o ON p.PharmacyID = o.PharmacyID
GROUP BY p.PharmacyName;

-- customers with pending orders
CREATE VIEW View10 AS
SELECT c.CustomerName, o.OrderDate, o.DeliveryStatus
FROM Customer c
INNER JOIN Orders o ON c.CustomerID = o.CustomerID
WHERE o.DeliveryStatus = 'Pending';