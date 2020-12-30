CREATE TABLE dono
(
    nome_usuario VARCHAR PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    dt_nascimento VARCHAR(15) NULL,
    num_celular VARCHAR(15) NOT NULL,
    email VARCHAR(50),
    senha VARCHAR (15) NOT NULL
);
CREATE TABLE pet
(
    nome VARCHAR(30) NOT NULL,
    raca VARCHAR(50) NOT NULL,
    genero VARCHAR(10) NOT NULL,
    cor VARCHAR(30) NOT NULL,
    porte VARCHAR(15) NOT NULL,
    idade INTEGER NOT NULL,
    pedigree VARCHAR(3) NOT NULL,
    excluido CHAR,
    dt_exclusao DATE NULL 
);