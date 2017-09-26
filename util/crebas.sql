/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     09/09/2017 17:18:28                          */
/*==============================================================*/


drop table if exists CARRINHO;

drop table if exists CATEGORIA;

drop table if exists CIDADES;

drop table if exists ENTREGA;

drop table if exists FORNECEDOR;

drop table if exists ITENS_PEDIDO;

drop table if exists PEDIDO;

drop table if exists PESSOAS;

drop table if exists PRODUTO;

drop table if exists PROMOCAO;

/*==============================================================*/
/* Table: CARRINHO                                              */
/*==============================================================*/
create table CARRINHO
(
   SESSAO               int not null,
   QUANTIDADE           int,
   VALOR                numeric(10,2),
   DATA                 date,
   primary key (SESSAO)
);

/*==============================================================*/
/* Table: CATEGORIA                                             */
/*==============================================================*/
create table CATEGORIA
(
   IDCATEGORIA          int not null,
   DESCRICAO            varchar(100) not null,
   primary key (IDCATEGORIA)
);

/*==============================================================*/
/* Table: CIDADES                                               */
/*==============================================================*/
create table CIDADES
(
   IDCIDADE             int not null,
   DESCRICAO            varchar(100) not null,
   UF                   char(2),
   primary key (IDCIDADE)
);

/*==============================================================*/
/* Table: ENTREGA                                               */
/*==============================================================*/
create table ENTREGA
(
   IDENTREGA            int not null,
   IDCIDADE             int not null,
   ENDERECO             varchar(100),
   BAIRRO               varchar(30),
   CEP                  char(10),
   primary key (IDENTREGA)
);

/*==============================================================*/
/* Table: FORNECEDOR                                            */
/*==============================================================*/
create table FORNECEDOR
(
   IDFORNECEDOR         int not null,
   IDCIDADE             int not null,
   NOMERAZAOSOCIAL      varchar(40) not null,
   NOMEFANTASIA         varchar(40),
   ENDERECO             varchar(100),
   BAIRRO               varchar(30),
   FONE                 varchar(16),
   EMAIL                varchar(60),
   RESPONSAVEL          varchar(50),
   CNPJ                 varchar(18),
   CEP                  char(10),
   primary key (IDFORNECEDOR)
);

/*==============================================================*/
/* Table: ITENS_PEDIDO                                          */
/*==============================================================*/
create table ITENS_PEDIDO
(
   IDPRODUTO            int not null,
   IDPEDIDO             int not null,
   primary key (IDPRODUTO, IDPEDIDO)
);

/*==============================================================*/
/* Table: PEDIDO                                                */
/*==============================================================*/
create table PEDIDO
(
   IDPEDIDO             int not null,
   IDPESSOA             int not null,
   DATA                 date,
   HORA                 time,
   VALORTOTAL           decimal(10,2),
   ST                   char(1),
   FORMAPAGAMENTO       char(1),
   OBSERVACAO           text,
   primary key (IDPEDIDO)
);

/*==============================================================*/
/* Table: PESSOAS                                               */
/*==============================================================*/
create table PESSOAS
(
   IDPESSOA             int not null,
   IDCIDADE             int not null,
   NOME                 varchar(100) not null,
   ENDERECO             varchar(100),
   NUMERO               varchar(10),
   COMPLEMENTO          varchar(20),
   BAIRRO               varchar(30),
   CEP                  char(10),
   CPF                  varchar(14),
   FONERES              varchar(16),
   FONECEL              varchar(16),
   DATACADASTRO         date,
   DATANASCIMENTO       date,
   EMAIL                varchar(60),
   LOGIN                varchar(10),
   SENHA                varchar(10),
   FUNCIONARIO          bool,
   primary key (IDPESSOA)
);

/*==============================================================*/
/* Table: PRODUTO                                               */
/*==============================================================*/
create table PRODUTO
(
   IDPRODUTO            int not null,
   SESSAO               int,
   IDFORNECEDOR         int not null,
   IDCATEGORIA          int not null,
   DESCRICAO            varchar(100) not null,
   PRECOUNITARIO        numeric(10,2),
   PRECOQTD             numeric(10,2),
   ESTOCADO             int,
   TIPO                 varchar(5),
   IMAGEM               varchar(60),
   primary key (IDPRODUTO)
);

/*==============================================================*/
/* Table: PROMOCAO                                              */
/*==============================================================*/
create table PROMOCAO
(
   IDPROMOCAO           int not null,
   DATAINICIO           date,
   DATAFIM              date,
   primary key (IDPROMOCAO)
);

alter table ENTREGA add constraint FK_ENTREGA_CIDADE foreign key (IDCIDADE)
      references CIDADES (IDCIDADE) on delete restrict on update restrict;

alter table FORNECEDOR add constraint FK_CIDADES_FORNECEDOR foreign key (IDCIDADE)
      references CIDADES (IDCIDADE) on delete restrict on update restrict;

alter table ITENS_PEDIDO add constraint FK_ITENS_PEDIDO foreign key (IDPRODUTO)
      references PRODUTO (IDPRODUTO) on delete restrict on update restrict;

alter table ITENS_PEDIDO add constraint FK_ITENS_PEDIDO2 foreign key (IDPEDIDO)
      references PEDIDO (IDPEDIDO) on delete restrict on update restrict;

alter table PEDIDO add constraint FK_PEDIDO_PESSOAS foreign key (IDPESSOA)
      references PESSOAS (IDPESSOA) on delete restrict on update restrict;

alter table PESSOAS add constraint FK_CIDADES_PESSOAS foreign key (IDCIDADE)
      references CIDADES (IDCIDADE) on delete restrict on update restrict;

alter table PRODUTO add constraint FK_PRODUTOS_CARRINHO foreign key (SESSAO)
      references CARRINHO (SESSAO) on delete restrict on update restrict;

alter table PRODUTO add constraint FK_PRODUTO_CATEGORIA foreign key (IDCATEGORIA)
      references CATEGORIA (IDCATEGORIA) on delete restrict on update restrict;

alter table PRODUTO add constraint FK_PRODUTO_FORNECEDOR foreign key (IDFORNECEDOR)
      references FORNECEDOR (IDFORNECEDOR) on delete restrict on update restrict;

