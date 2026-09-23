# API REST de Gerenciamento de Produtos

Esta é uma API RESTful simples desenvolvida em PHP nativo para o gerenciamento (CRUD) de produtos, utilizando o PostgreSQL como banco de dados relacional e a biblioteca PDO (PHP Data Objects) para comunicação segura com a base de dados.

---

## 📋 Sumário
- [Descrição Geral](#descrição-geral)
- [Requisitos](#requisitos)
- [Estrutura do Banco de Dados](#estrutura-do-banco-de-dados)
- [Configuração](#configuração)
- [Instalação e Execução](#instalação-e-execução)
- [Endpoints da API](#endpoints-da-api)
  - [1. Listar Produtos (GET)](#1-listar-produtos-get)
  - [2. Cadastrar Produto (POST)](#2-cadastrar-produto-post)
  - [3. Atualizar Produto (PUT)](#3-atualizar-produto-put)
  - [4. Excluir Produto (DELETE)](#4-excluir-produto-delete)
- [Exemplos de Uso (cURL)](#exemplos-de-uso-curl)
- [Tratamento de Erros e Boas Práticas](#tratamento-de-erros-e-boas-práticas)

---

## ℹ️ Descrição Geral

A API permite realizar operações de criação, leitura, atualização e exclusão de produtos em uma base PostgreSQL. Todas as requisições e respostas utilizam o formato **JSON** e definem o cabeçalho `Content-Type: application/json`.

---

## ⚙️ Requisitos

Para rodar esta aplicação, você precisará dos seguintes componentes instalados em seu ambiente:

- **PHP** >= 7.4 (com a extensão `pdo_pgsql` habilitada)
- **PostgreSQL** >= 12.0
- **Servidor Web** (Apache, Nginx ou o servidor embutido do PHP)
- Cliente HTTP (cURL, Postman, Insomnia) para testar os endpoints

> **Nota:** Certifique-se de ativar a extensão PDO para PostgreSQL no seu `php.ini`:
> ```ini
> extension=pdo_pgsql
> ```

---

## 🗄️ Estrutura do Banco de Dados

Crie o banco de dados no PostgreSQL e execute o comando SQL abaixo para estruturar a tabela `produtos`:

```sql
CREATE DATABASE sistema_produtos;

-- Conecte-se ao banco criado e execute:
CREATE TABLE produtos (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco NUMERIC(10, 2) NOT NULL
);