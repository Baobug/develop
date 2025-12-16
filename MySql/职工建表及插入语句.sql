CREATE TABLE IF NOT EXISTS emp
(
empid CHAR(10) PRIMARY KEY,
ename CHAR(30) NOT NULL,
manager CHAR(10)
)
INSERT INTO emp VALUES
('1','zhang','3'),
('2','zhao','3'),
('3','wang','4'),
('4','li','6'),
('5','sum','4'),
('6','zheng',NULL);