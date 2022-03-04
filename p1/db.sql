use crud_sql;

CREATE TABLE 'crud'(
    'id' int(11) NOT NULL auto_increment,
    'name' varchar(100) NOT NULL,
    'nik' int(20) NOT NULL,
    'lokasi' varchar(50) NOT NULL,
    'suhu' varchar(50) NOT NULL,
    PRIMARY KEY ('id'),
)