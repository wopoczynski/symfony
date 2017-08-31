CREATE TABLE member (
    id		integer,
    username    varchar(255),           
    email	varchar(255),          
    password	varchar(64)
);

DROP TABLE member;

-- some random data just to check 
INSERT INTO MEMBER VALUES (1, 'test','test@test.t','mocnehaslo1');
INSERT INTO MEMBER VALUES (2, 'tomek','tesfasdt@tefsfdasadst.t','mocnehaslo2');
INSERT INTO MEMBER VALUES (3, 'marek','tesfdt@test.t','mocnehaslo3');
INSERT INTO MEMBER VALUES (4, 'sadf','test@tesfsdat.t','mocnehaslo4');
INSERT INTO MEMBER VALUES (5, 'tesfasdt','test@tefadsst.t','mocnehaslo5');
INSERT INTO MEMBER VALUES (6, 'tedsfst','test@tesfasdt.t','mocnehaslo6');
INSERT INTO MEMBER VALUES (7, 'tfeffst','test@tefsadst.t','mocnehaslo7');
INSERT INTO MEMBER VALUES (8, 'teast','test@tfadsest.t','mocnehaslo8');
INSERT INTO MEMBER VALUES (9, 'tesdst','tefsdast@tefsadst.t','mocnehaslo9');
INSERT INTO MEMBER VALUES (10, 'tfsdaest','tesfsdat@test.t','mocnehaslo10');
INSERT INTO MEMBER VALUES (11, 'tefasst','tesfsdt@tfdsaest.t','mocnehaslo11');
INSERT INTO MEMBER VALUES (12, 'tesfasdt','test@atfsest.t','mocnehaslo12');
INSERT INTO MEMBER VALUES (13, 'tesfasdt','tefdasst@test.t','mocnehaslo13');


SELECT * FROM MEMBER;