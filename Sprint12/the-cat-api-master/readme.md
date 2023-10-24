
 
 
 Neste projeto, inseri testes onde podemos:


 Pesquisar:
     Tipos de Gatos, filtrar por quantidade.
 Editar: 
     Alterar dados.
 Postar:
     Tentar inserir novos dados.
 Excluir:
     Tentar excluir dados da aplicação.


Importante: 
     Esta aplicação, somente nos permite utilizar o comando Get, ou seja, os demais comandos usados como Post,Put e Delete, somente foram utilizados aqui para testar se aplicação está funcionando de acordo com seus critérios de aceite.

Abaixo mais um resumo detalhado de suas funcionalidades:
Neste trabalho usei Mocha e Pactum.js.



# Looking for cat breeds :smile_cat:

This application has the function of presenting a mini API that queries for cat breeds, using the Cat API (https://thecatapi.com). At the same time it caches the search results found in its database.

 ## Running the application :checkered_flag:

 To install and run this application, follow the steps below: 

 - Clone this repository

 ````
    $ git clone https://github.com/Adelires/the-cat-api.git
 ````
 - Copy the .env.example file to .env

 ````
    $ cp .env.exemple .env
 ````

- Install the project's dependencies via composer

 ````
    $ composer install
 ````

- Create the application database

  - We are going to use MySQL as the database engine

   ```` sql
   CREATE DATABASE `cat-api`;
   ````

   - Adjusts the database credentials in the .env file

   - Execute the database migrations to setup the application's table

   ```` 
    $ php artisan migrate
   ````
- Run the application: 
 ```` 
    $ php artisan serve
   ````

   ## Search for Breeds

The application has an endpoint that searches for cat breeds by name.

This endpoint can be accessed as described below, passing the breed name in URI query string. The name can be complete or just a piece of it.

```` http
GET /api/breeds?name=foo
Accept: application/json 
````

Response body example: 

   ```` json
  [
    {
        "id": "mexi",
        "name": "Mexican Hairless Cat",
        "description": null,
        "temperament": null,
        "life_span": "8 - 14",
        "indoor": 0,
        "alt_names": null,
        "cfa_url": null,
        "wikipedia_url": "https://en.wikipedia.org/wiki/Mexican_Hairless_Cat",
        "origin": "Mexico",
        "weight": {
            "imperial": "6 - 12",
            "metric": "3 - 6"
        } ...
    }
]
   ````