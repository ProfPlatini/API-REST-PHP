# PROJETO-CRUD

API REST simples de CRUD de produtos construída com **PHP** e **PostgreSQL**, usando PDO para acesso ao banco de dados.

## Funcionalidades

- **Cadastrar** produto (POST)
- **Listar** produtos (GET)
- **Atualizar** produto (PUT)
- **Excluir** produto (DELETE)

## Pré-requisitos

- PHP (com extensão `pdo_pgsql` habilitada)
- PostgreSQL (rodando na porta `5432`)

## Instalação

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/PROJETO-CRUD.git
```

2. Crie o banco de dados e a tabela no PostgreSQL:

```sql
CREATE DATABASE lojasegundao;

CREATE TABLE produtos (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10,2) NOT NULL
);
```

3. Configure as credenciais do banco em `conexao.php`:

```php
$host = "IP DO BANCO";
$usuario = "USUARIO DO DB";
$senha = "SENHA DO DB";
$banco = "NOME DO DB";
```

4. Suba o servidor PHP:

```bash
php -S localhost:8000
```

## Estrutura do projeto

```
PROJETO-CRUD/
├── conexao.php    # Conexão com o banco (PDO)
├── produtos.php   # Endpoint da API (rotas CRUD)
└── README.md
```

## Endpoints

### Listar produtos — `GET /produtos.php`

Retorna todos os produtos em formato JSON.

### Cadastrar produto — `POST /produtos.php`

```json
{
  "nome": "Notebook",
  "preco": 2500.00
}
```

> Obs.: o nome `"Celular"` é rejeitado pela API (retorna `"Dado inválido!"`).

### Atualizar produto — `PUT /produtos.php`

```json
{
  "id": 1,
  "nome": "Notebook Gamer",
  "preco": 3200.00
}
```

### Excluir produto — `DELETE /produtos.php`

```json
{
  "id": 1
}
```

## Exemplos com `curl`

```bash
# Listar
curl http://localhost:8000/produtos.php

# Cadastrar
curl -X POST http://localhost:8000/produtos.php -d '{"nome":"Notebook","preco":2500.00}'

# Atualizar
curl -X PUT http://localhost:8000/produtos.php -d '{"id":1,"nome":"Notebook","preco":3200.00}'

# Excluir
curl -X DELETE http://localhost:8000/produtos.php -d '{"id":1}'
```