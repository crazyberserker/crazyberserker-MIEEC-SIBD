--
-- File generated with SQLiteStudio v3.2.1 on dom dez 29 23:50:50 2019
--
-- Text encoding used: System
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: Appointment
CREATE TABLE Appointment (Type INTEGER DEFAULT (0), Date DATETIME NOT NULL, Given_to ID NOT NULL, Given_by INTEGER NOT NULL REFERENCES Employee, Room INTEGER REFERENCES Classroom (ID_EMPLOYEE), ID INTEGER PRIMARY KEY AUTOINCREMENT, FOREIGN KEY (Given_to) REFERENCES Associate (N_associate));
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (1, '2019-12-02', 1, 5, 1, 1);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (2, '2019-12-02', 2, 3, 2, 2);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (3, 'dasda', 123, 123, 123, 3);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (4, 12321, 312, 312, 13, 4);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (5, 231, 123, 123, 123, 5);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (6, '2019-07-04', 2, 1, 1, 6);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (7, '2019-12-18', 1, 1, 1, 7);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (8, '2019-12-05', 1, 5, 1, 8);
INSERT INTO Appointment (Type, Date, Given_to, Given_by, Room, ID) VALUES (1, '2019-12-10T21:08', 1, 5, 1, 9);

-- Table: Associate
CREATE TABLE Associate (N_associate INTEGER PRIMARY KEY, Height DECIMAL, Weight DECIMAL, W_Plan INTEGER REFERENCES Workout_plan (ID_EMPLOYEE), Pack_plan INTEGER REFERENCES Pack (ID), Goal ID REFERENCES Goal (ID), FOREIGN KEY (N_associate) REFERENCES Person (ID));
INSERT INTO Associate (N_associate, Height, Weight, W_Plan, Pack_plan, Goal) VALUES (1, 57, 159, 2, 1, 1);
INSERT INTO Associate (N_associate, Height, Weight, W_Plan, Pack_plan, Goal) VALUES (2, 75, 169, 1, 2, 1);
INSERT INTO Associate (N_associate, Height, Weight, W_Plan, Pack_plan, Goal) VALUES (4, 80, 170, 1, 3, 1);

-- Table: Class
CREATE TABLE Class (ID INTEGER PRIMARY KEY, Name TEXT NOT NULL, Type TEXT, Day TEXT NOT NULL, Duration INTEGER NOT NULL, Start_hour TIME NOT NULL, N_vacancies INTEGER, Given_By INTEGER NOT NULL REFERENCES Employee, "Where" INTEGER NOT NULL REFERENCES Classroom (ID_EMPLOYEE));
INSERT INTO Class (ID, Name, Type, Day, Duration, Start_hour, N_vacancies, Given_By, "Where") VALUES (1, 'BodyJam', 'Cardio', 'MON', 60, '10:00', 20, 3, 2);
INSERT INTO Class (ID, Name, Type, Day, Duration, Start_hour, N_vacancies, Given_By, "Where") VALUES (2, 'Zumba', 'Dance', 'TUE', 60, '10:00', 10, 3, 2);
INSERT INTO Class (ID, Name, Type, Day, Duration, Start_hour, N_vacancies, Given_By, "Where") VALUES (3, 'Cycling', 'Cardio', 'WED', 60, '10:00', 10, 3, 2);
INSERT INTO Class (ID, Name, Type, Day, Duration, Start_hour, N_vacancies, Given_By, "Where") VALUES (4, 'Hip Hip', 'Dance', 'THU', 60, '10:00', 10, 3, 1);

-- Table: Classroom
CREATE TABLE Classroom (ID INTEGER PRIMARY KEY NOT NULL, Code_to_enter INTEGER, Cleaner INTEGER, FOREIGN KEY (Cleaner) REFERENCES Employee (ID_EMPLOYEE));
INSERT INTO Classroom (ID, Code_to_enter, Cleaner) VALUES (1, 1, 6);
INSERT INTO Classroom (ID, Code_to_enter, Cleaner) VALUES (2, 2, 6);
INSERT INTO Classroom (ID, Code_to_enter, Cleaner) VALUES (3, 3, 6);
INSERT INTO Classroom (ID, Code_to_enter, Cleaner) VALUES (4, 4, 6);

-- Table: Employee
CREATE TABLE Employee (ID_EMPLOYEE INTEGER PRIMARY KEY, Start_date DATE NOT NULL, Languages TEXT, Position TEXT, Degree TEXT, Experience TEXT, FOREIGN KEY (ID_EMPLOYEE) REFERENCES Person (ID));
INSERT INTO Employee (ID_EMPLOYEE, Start_date, Languages, Position, Degree, Experience) VALUES (3, '2019-12-02', 'English', 'PT', 'Bachelor', '0');
INSERT INTO Employee (ID_EMPLOYEE, Start_date, Languages, Position, Degree, Experience) VALUES (5, '2019-12-02', 'Spanish', 'Nutrucionist', 'Bachelor', 'two years');
INSERT INTO Employee (ID_EMPLOYEE, Start_date, Languages, Position, Degree, Experience) VALUES (6, '2019-12-02', 'Spanish', 'Cleaning ', 'HighSchool', '5 years');

-- Table: Equipment
CREATE TABLE Equipment (ID INTEGER PRIMARY KEY, Name TEXT NOT NULL, Category TEXT, State TEXT, "Where" INTEGER REFERENCES Classroom (ID_EMPLOYEE));
INSERT INTO Equipment (ID, Name, Category, State, "Where") VALUES (1, 'Treadmill Silver', 'Cardio', 'Good', 4);
INSERT INTO Equipment (ID, Name, Category, State, "Where") VALUES (2, 'Treadmill Silver', 'Cardio', 'Good', 4);
INSERT INTO Equipment (ID, Name, Category, State, "Where") VALUES (3, 'Chest Press Convergent', 'Strenght', 'Good', 3);
INSERT INTO Equipment (ID, Name, Category, State, "Where") VALUES (4, 'Abdominal and Lower', 'Strenght', 'Good', 3);
INSERT INTO Equipment (ID, Name, Category, State, "Where") VALUES (5, 'Functional Trainer', 'Various', 'Good', 3);
INSERT INTO Equipment (ID, Name, Category, State, "Where") VALUES (6, 'Five Stations', 'Various', 'Good', 3);

-- Table: Exercise
CREATE TABLE Exercise (ID INTEGER PRIMARY KEY, Name TEXT NOT NULL, Weigt DECIMAL, Duration INTEGER, Repetitions INTEGER, N_series INTEGER, Equi INTEGER REFERENCES Equipment (ID_EMPLOYEE));
INSERT INTO Exercise (ID, Name, Weigt, Duration, Repetitions, N_series, Equi) VALUES (1, 'Abdominal', 10, '', 3, 20, 4);
INSERT INTO Exercise (ID, Name, Weigt, Duration, Repetitions, N_series, Equi) VALUES (2, 'Abdominal', 20, '', 3, 20, 5);
INSERT INTO Exercise (ID, Name, Weigt, Duration, Repetitions, N_series, Equi) VALUES (3, 'Run', NULL, 30, 2, 1, 1);
INSERT INTO Exercise (ID, Name, Weigt, Duration, Repetitions, N_series, Equi) VALUES (4, 'Bike', NULL, 30, 2, 1, 2);

-- Table: Food
CREATE TABLE Food (Name TEXT PRIMARY KEY, Type TEXT NOT NULL, Quantity INTEGER NOT NULL, Preparation TEXT);
INSERT INTO Food (Name, Type, Quantity, Preparation) VALUES ('Tuna with pasta', 'Luch', 100, 'Boiled');
INSERT INTO Food (Name, Type, Quantity, Preparation) VALUES ('Oat', 'Breakfast', 200, 'Boiled');

-- Table: Goal
CREATE TABLE Goal (ID INTEGER PRIMARY KEY, Weight DECIMAL, Fat_mass DECIMAL, Muscle_mass DECIMAL, Calories_per_train INTEGER, Distance INTEGER, N_workouts INTEGER, N_classes INTEGER, Calories_nutrition INTEGER, FOREIGN KEY (ID) REFERENCES Associate ON DELETE SET NULL);
INSERT INTO Goal (ID, Weight, Fat_mass, Muscle_mass, Calories_per_train, Distance, N_workouts, N_classes, Calories_nutrition) VALUES (1, 70, 0, 100, 10, '5km', 20, 20, 1000);

-- Table: Meal
CREATE TABLE Meal (ID INTEGER PRIMARY KEY, Name TEXT, Plan_ID INTEGER REFERENCES Nutrition_Plan (ID), Day TEXT UNIQUE, Hour TIME UNIQUE, Food TEXT REFERENCES Food (Name));
INSERT INTO Meal (ID, Name, Plan_ID, Day, Hour, Food) VALUES (1, 'Breakfast', 1, 'Tuesday', '10:00:00', 'Oat');
INSERT INTO Meal (ID, Name, Plan_ID, Day, Hour, Food) VALUES (2, 'Lunch', 1, 'Monday', '12:00:00', 'Tuna with pasta');

-- Table: Nutrition_Appointment
CREATE TABLE Nutrition_Appointment (ID INTEGER PRIMARY KEY REFERENCES Appointment, Diabetes TEXT, Cholesterol TEXT, "" CONSTRAINT type REFERENCES Appointment (Type) CONSTRAINT type CHECK (2));
INSERT INTO Nutrition_Appointment (ID, Diabetes, Cholesterol, "") VALUES (1, '70', '190', NULL);

-- Table: Nutrition_Plan
CREATE TABLE Nutrition_Plan (ID INTEGER PRIMARY KEY, Start_date DATE, End_Date DATE);
INSERT INTO Nutrition_Plan (ID, Start_date, End_Date) VALUES (1, '2019-12-02', '2020-01-12');
INSERT INTO Nutrition_Plan (ID, Start_date, End_Date) VALUES (2, '2019-12-02', '2020-01-12');

-- Table: Pack
CREATE TABLE Pack (ID INTEGER PRIMARY KEY, Name TEXT NOT NULL, Type TEXT NOT NULL, Duration INTEGER NOT NULL, Price DECIMAL NOT NULL);
INSERT INTO Pack (ID, Name, Type, Duration, Price) VALUES (1, 'Pack1', 'small', '2 months', 30);
INSERT INTO Pack (ID, Name, Type, Duration, Price) VALUES (2, 'Pack2', 'medium', '4 months', 50);
INSERT INTO Pack (ID, Name, Type, Duration, Price) VALUES (3, 'Pack3', 'large', '8 months', 65);

-- Table: Payment
CREATE TABLE Payment (ID INTEGER PRIMARY KEY REFERENCES Associate, Type TEXT NOT NULL, Date DATE NOT NULL, Limit_date DATE NOT NULL, State TEXT NOT NULL, Value DECIMAL NOT NULL);
INSERT INTO Payment (ID, Type, Date, Limit_date, State, Value) VALUES (1, 'MBWAY', '2019-12-02', '2019-12-31', 'NOT_PAYED', 30);
INSERT INTO Payment (ID, Type, Date, Limit_date, State, Value) VALUES (2, 'Money', '2019-12-03', '2019-12-31', 'NOT_PAYED', 31);
INSERT INTO Payment (ID, Type, Date, Limit_date, State, Value) VALUES (4, 'MBWAY', '2019-12-03', '219-12-31', 'PAYED', 30);

-- Table: Person
CREATE TABLE Person (username TEXT NOT NULL, password TEXT NOT NULL, ID INTEGER PRIMARY KEY, First_name TEXT NOT NULL, Last_name TEXT NOT NULL, Sex TEXT, Health_insurance_number INTEGER, Birthday DATE, Adress TEXT NOT NULL, Phone_number INTEGER NOT NULL, Email TEXT, Age INTEGER NOT NULL, Intolerance TEXT, Allergies TEXT, Nutrition_Plan INTEGER REFERENCES Nutrition_Plan (ID));
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('faria45', '$2y$12$QV5pDBJnEIBxloV3bea0lexDGbYI6js0xVHyBFDp68umbvEbNfcxy', 1, 'Daniela', 'Faria', 'F', 123, '1998-01-10', 'Rua Joaquim Kopke', 935416562, 'up201604500@fe.up.pt', 21, 'Pinaple', 'none', 1);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('sonia', '$2y$12$QV5pDBJnEIBxloV3bea0lexDGbYI6js0xVHyBFDp68umbvEbNfcxy', 2, 'Sonia', 'Silva', 'F', 2, '1998-07-27', 'coiso2', 917236461, 'up201606449@fe.up.pt', 21, 'lactose', 'ananas', NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('jose_s7', '$2y$12$QV5pDBJnEIBxloV3bea0lexDGbYI6js0xVHyBFDp68umbvEbNfcxy', 3, 'Jose', 'Gomes', 'M', 3, '1998-07-07', 'coiso3', 919191919, 'jose_g7@gmail.com', 21, 'lactose', 'crustaceos', NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('angel_515', '$2y$12$QV5pDBJnEIBxloV3bea0lexDGbYI6js0xVHyBFDp68umbvEbNfcxy', 4, 'Angela', 'Sousa', 'F', 4, '1997-11-15', 'coiso4', 949494949, 'angel_515@gmail.com', 22, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('vanicras', '$2y$12$QV5pDBJnEIBxloV3bea0lexDGbYI6js0xVHyBFDp68umbvEbNfcxy', 5, 'Vania', 'Castro', 'F', 5, '1995-02-19', 'coiso5', 989898989, 'vanicras@gmail.com', 24, NULL, 'polen', NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('fernandina23', '$2y$12$QV5pDBJnEIBxloV3bea0lexDGbYI6js0xVHyBFDp68umbvEbNfcxy', 6, 'Fernandina', 'Sampaio', 'F', 6, '1989-04-23', 'coiso6', 959595959, 'fernandina23@gmail.com', 32, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('teste2', '$argon2i$v=19$m=65536,t=4,p=1$ZXlUaTI2SEVQc1pQUGc1dA$XDNjqjuO6pVvXVVdFM9wRDVIFf7WSHmZWyESwhtRDSg', 7, 'teste2', 'teste2', NULL, NULL, NULL, 'coiso9', 92929292929, NULL, 21, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('murta33', '$argon2i$v=19$m=65536,t=4,p=1$Lnc0b2I3QnNPQVpNSTBySQ$luaMlCK+vScfu90ZFFrOkl31aT3x8r6Mydi8yU4S6dk', 8, 'Francisco', 'Murta', 'M', NULL, NULL, 'Rua das Luzes', 970903651, NULL, 21, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('teste4', '$argon2i$v=19$m=65536,t=4,p=1$TE5IOUphUWhMakppQWNTQw$hXgsVdAgK7UZGqlbQECaghalw0NvwSLaT4E5Qea2YHw', 9, 'test4', 'teste4', 'test4', NULL, NULL, 'teste4', 98989898, NULL, 858, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('belinha04', '$argon2i$v=19$m=65536,t=4,p=1$aHVqZnZMS2Y3aW12OHpkaQ$zwvsE0khRA/YVCo0Q0Xvrt8AnfkCBozQnI1AIozzJNY', 10, 'Anabela', 'Nito', 'Feminino', NULL, NULL, 'Rua das askis', 901828220, NULL, 21, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('silviaa19', '$argon2i$v=19$m=65536,t=4,p=1$Vy5sUEtBQ3U4dXhaT2NvSA$+fUBTcRsSzTMdFwV1GGyM43bOKbiIHn2v27e8GJrowM', 16, 'Silvia', 'Silva', 'Feminino', NULL, NULL, 'Rua da Paz', 919237638, NULL, 32, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('maria', '$argon2i$v=19$m=65536,t=4,p=1$aG80UFNpcmtlVDhuODh1Rg$5g4nXB0D5iYwhZ1MhRLbNaIhNL5SiQQxPQyWy3injz0', 23, 'maria', 'maria', 'F', NULL, NULL, 'Rua 2', 989898, NULL, 32, NULL, NULL, NULL);
INSERT INTO Person (username, password, ID, First_name, Last_name, Sex, Health_insurance_number, Birthday, Adress, Phone_number, Email, Age, Intolerance, Allergies, Nutrition_Plan) VALUES ('tes', '$argon2i$v=19$m=65536,t=4,p=1$Y20wSGNDNlRiVG9OSm1ZTQ$YG1dKhm191pNyg/ynwQClExbR9Sfkcbk6d0bYT1ODyg', 24, 'Tes', 'Tes', 'F', NULL, NULL, 'jde', 12321, NULL, 2123123, NULL, NULL, NULL);

-- Table: Physical_assessment
CREATE TABLE Physical_assessment (ID INTEGER PRIMARY KEY REFERENCES Appointment, Height DECIMAL NOT NULL, Weight DECIMAL NOT NULL, Body_fat DECIMAL, Bone_Weight DECIMAL, Muscle_mass DECIMAL, Basal_metabolism INTEGER, Metabolic_age INTEGER, Water_percentage DECIMAL, Visceral_fat_level DECIMAL);
INSERT INTO Physical_assessment (ID, Height, Weight, Body_fat, Bone_Weight, Muscle_mass, Basal_metabolism, Metabolic_age, Water_percentage, Visceral_fat_level) VALUES (2, 75, 169, '', NULL, NULL, NULL, NULL, NULL, NULL);

-- Table: Regist
CREATE TABLE Regist (Name TEXT NOT NULL DEFAULT tste, EMAIL TEXT NOT NULL DEFAULT aa, PHONE INTEGER NOT NULL DEFAULT (0), mes TEXT NOT NULL DEFAULT A, ID INTEGER PRIMARY KEY AUTOINCREMENT DEFAULT (0));
INSERT INTO Regist (Name, EMAIL, PHONE, mes, ID) VALUES ('ffs', 'yp2016@gmail.com', 5423, 'gffdssfd', 9);

-- Table: Workout_plan
CREATE TABLE Workout_plan (ID INTEGER PRIMARY KEY, N_Workouts INTEGER, Start_date DATE, End_date DATE, Exercise_ID INTEGER REFERENCES Exercise (ID_EMPLOYEE) NOT NULL);
INSERT INTO Workout_plan (ID, N_Workouts, Start_date, End_date, Exercise_ID) VALUES (1, 10, '2019/12/09', '2020/01/20', 3);
INSERT INTO Workout_plan (ID, N_Workouts, Start_date, End_date, Exercise_ID) VALUES (2, 10, '2019/12/08', '2020/01/20', 4);

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
