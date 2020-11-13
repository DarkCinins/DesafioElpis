<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Versões

- PHP 7.4.12
- Laravel 4.0.7
- Composer 2.0.4
- psql (PostgreSQL) 12.4

## Instalação

- Instalar todas as dependências citadas acima.
- Criar um banco de dados postgres chamado **elpis**.
- Clonar o projeto em uma pasta.
- Editar o nome do arquivo **.env.example** para **.env** e preencher seu usuário e senha do banco nas seguintes linhas:
```.env
DB_USERNAME=
DB_PASSWORD=
```
- Abrir um terminal no projeto e executar os seguintes comandos:
```cmd
composer install
php artisan migrate --seed
php artisan serve
```
O primeiro comando irá instalar o composer no projeto, pois ele não é enviado ao github (vem com gitignore por padrão).

O Segundo comando irá criar as tabelas do banco e também inserir 3 dados iniciais para serem visualizados nos testes.

O terceiro comando irá rodar o servidor e iniciar a API.

## Testes

Os testes foram realizados utilizando [postman](https://www.postman.com). Realize as seguintes requisições para testar:

- Ver todos os produtos: GET http://localhost:8000/api/produtos
- Ver produto específico: GET http://localhost:8000/api/produtos/id?id=1
- Editar produto: PUT http://localhost:8000/api/produtos/id?id=1&nome=Yakut&preco=R$6,99&descricao=teste
- Cadastrar produto: POST http://localhost:8000/api/produtos?nome=Leite&preco=R$2,50&descricao=Teste
- Deletar produto: DELETE http://localhost:8000/api/produtos/id?id=1

GET, PUT, POST e DELETE são os tipos de requisição.

http://localhost:8000/api/produtos e http://localhost:8000/api/produtos/id são as rotas.

Tudo o que vem após a **?** são as variáveis a serem enviadas para as funções da API.

## Caminhos

- Rotas: routes/api.php
- Controller: app/Http/Controllers/ProdutosController.php
- Tabela: database/migrations/2020_11_13_144556_produtos.php

