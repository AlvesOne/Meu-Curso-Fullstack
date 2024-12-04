Create database PetShop;

use PetShop;

Create table Cliente(
    id INTEGER PRIMARY KEY auto_increment,
    id_sexo INTEGER,
    nome VARCHAR(200),
    sobrenome VARCHAR(100),
    rua VARCHAR(250),
    bairro VARCHAR(200),
    casa INTEGER,
    cep INTEGER,
    cidade VARCHAR(250),
    telefone VARCHAR(100),
    celular VARCHAR(100),
    idade INTEGER,
    admin BOOL,
    email VARCHAR(250),
    usuario VARCHAR(250),
    senha VARCHAR(250),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

Create table Animal(
    id
    animal 
    raca
    nascimento
    cor_pelagem
);