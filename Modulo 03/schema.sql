Create database teste;

use teste;

create table Produto(
    id INTEGER PRIMARY KEY auto_increment,
    nome VARCHAR(100) not null,
    valor DECIMAL,
    descricao LONGTEXT,
    created_at timestamp null,
    update_at timestamp null
);

create table Contato(
    id INTEGER PRIMARY KEY auto_increment,
    telefone VARCHAR(150),
    email VARCHAR(200),
    created_at timestamp null,
    update_at timestamp null
);

create table Cliente(
    id INTEGER PRIMARY KEY auto_increment,
    nome VARCHAR(200),
    data_nascimento DATE,
    foto VARCHAR(250),
    created_at timestamp null,
    update_at timestamp null
);

create table Empresa(
    id INTEGER PRIMARY KEY auto_increment,
    razao_social VARCHAR(200),
    cnpj VARCHAR(200),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

create table Servico(
    id INTEGER PRIMARY KEY auto_increment,
    tipo VARCHAR(200),
    valor DECIMAL,
    empresa_id INTEGER,
    categoria_id INTEGER
    foreign key (empresa_id) references Empresa (id),
    foreign key (categoria_id) references Categoria (id),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

create table Categoria(
    id INTEGER PRIMARY KEY auto_increment,
    tipo VARCHAR(200),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

create table OrdemServico(
    id INTEGER PRIMARY KEY auto_increment,
    cliente_id INTEGER,
    servico_id INTEGER,
    data_servico DATE,
    empresa_id INTEGER
    data_finalizacao DATE,
    foreign key (cliente_id) references Cliente (id),
    foreign key (servico_id) references Servico (id),
    foreign key (empresa_id) references Empresa (id),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);