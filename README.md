# Trabalho 3 - Backend - DW
  <br />

Lucas Tadra Mainginski - RA: 17504926 <br />
Luis Guilherme Molotto - RA: 18016126 <br />
Matheus Bilobrovec - RA: 18011426

## Sobre o projeto
Trabalho realizado para a disciplina de Desenvolvimento Web da UEPG, que consiste em desenvolver um sistema simples utilizando React para o front-end e qualquer framework da escolha do grupo para o backend.
Optamos por utilizar Laravel e realizamos um CRUD de estudantes.

## Requisitos
- Xampp
- Composer
- Git
- MySQL Workbench
- VSCode
## Como criar o projeto laravel
Possuindo no seu computador o Xampp e o Composer, você já poderá criar um projeto Laravel, criando uma pasta dentro do seu PC e abrindo o Git Bash dela, através do código (composer create-project laravel/laravel meu_app_laravel): após isso o projeto será criado automaticamente para nós e se utilizar o comando cd (nome do app) e php artisan serve, o projeto está funcionando no localhost:8000.
Depois de criar um schema dentro do seu MySQL Workbench, o banco deverá ser configurado dentro da pasta do projeto Laravel no arquivo .env

## Packages desenvolvidos

### app/Models
- student.php <br />
Neste arquivo adicionamos todos os nomes dos campos que desejaremos utilizar em nosso banco de dados e também o nome da tabela que haverá conversa entre Laravel e 
SGBD.
### app/Http/Controller/API
- StudentController.php <br />
Neste arquivo foram desenvovidas todas as interações do nosso sistema com o Banco de dados, existindo CINCO funções:
- Index para buscar todas os registros do nosso banco de dados.
- Store para armazenar um novo estudante.
- Edit para buscar as informações de um determinado estudante para que sejam enviadas ao front.
- Update para alterar as informações do estudante.
- Delete para deletar todas as informações de um determinado estudante.

### database/migrations
Nas migrations podemos criar novas tabelas em nosso SGBD da forma que quisermos sem precisar utilizar da linguagem SQL em si.
- 2022_03_28_193424_create_students_table.php <br />
Dentro da função UP temos todos os campos que desejamos que existam dentro do banco e os tipos de cada um deles.

### routes/api
Neste arquivo foram criadas as rotas para serem chamadas no frontend e que chamam também determinadas funções do nosso StudentController.

## Materiais complementares
- [Primeiros passos com composer - Alura] (https://www.alura.com.br/artigos/primeiros-passos-com-composer) <br />
- [React JS & Laravel 8- ReactJS CRUD with Laravel REST API from Scratch - Funda Coder] (https://www.youtube.com/watch?v=NidmTs2xZaE)
