Create database Loja;

use Loja;

create table Produto(
    id INTEGER PRIMARY KEY auto_increment,
    codigo INTEGER,
    descricao VARCHAR(200),
    id_subcategoria INTEGER,
    id_marca INTEGER,
    id_unidade_medida INTEGER,
    especificacao_tecnica VARCHAR(250),
    status BOOL,
    peso_bruto DECIMAL,
    peso_liquido DECIMAL,
    qtd_mult INTEGER,
    qtd_min INTEGER,
    cod_barra VARCHAR(250),
    foreign key (id_subcategoria) references Subcategoria (id),
    foreign key (id_marca) references Marca (id),
    foreign key (id_unidade_medida) references Unidade_Medida (id),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

Create table Produto_Similar(
    id INTEGER PRIMARY KEY auto_increment,
    id_produto_similar INTEGER,
    foreign key (id_produto) references Produto (id),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

Create table Marca(
    id INTEGER PRIMARY KEY auto_increment,
    descricao VARCHAR(250),
    created_at TIMESTAMP null,
    update_at TIMESTAMP null
);

Create table Preco_Venda(
    id INTEGER PRIMARY KEY auto_increment,
    id_produto INTEGER,
    preco_venda DECIMAL,
    foreign key (id_produto) references Produto (id),
    data_validade_inicial DATE,
    data_validade_final DATE
);

Create table Unidade_Medida(
    id INTEGER PRIMARY KEY auto_increment,
    descricao VARCHAR(250),
    id_produto INTEGER,
    foreign key (id_produto) references Produto (id),
    data_validade_inicial DATE,
    data_validade_final DATE
);

Create table Departamento(
    id INTEGER PRIMARY KEY auto_increment,
    descricao VARCHAR(250),
    data_validade_inicial DATE,
    data_validade_final DATE
);

Create table Categoria(
    id INTEGER PRIMARY KEY auto_increment,
    descricao VARCHAR(250),
    id_departamento INTEGER,
    foreign key (id_departamento) references Departamento (id),
    data_validade_inicial DATE,
    data_validade_final DATE
);

Create table Subcategoria(
    id INTEGER PRIMARY KEY auto_increment,
    descricao VARCHAR(250),
    id_categoria INTEGER,
    foreign key (id_categoria) references Categoria (id),
    data_validade_inicial DATE,
    data_validade_final DATE
);