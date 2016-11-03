CREATE TABLE IF NOT EXISTS items (
	Id int NOT NULL,
	Content VARCHAR(1024) CHARSET utf8
);

INSERT INTO items (Id, Content) VALUES (1, "Foo");
INSERT INTO items (Id, Content) VALUES (2, "Bar");
INSERT INTO items (Id, Content) VALUES (3, "Baz");
