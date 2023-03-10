# Teste Laravel
Este projeto é um exemplo simples de um aplicativo Laravel com autenticação de usuários e um modelo de tarefas.

Projeto Laravel para teste solicitado.

## Perguntas e Respostas do teste

### 1. O que é o Laravel e quais são suas principais características?

O Laravel é um framework de desenvolvimento de aplicativos web em PHP. 

1. MVC: Padrão arquitetural Modelo-Visão-Controlador (MVC) que ajuda a separar a lógica de negócios, a apresentação e a interação do usuário em diferentes componentes do aplicativo. Isso facilita a manutenção e a escalabilidade do aplicativo.

2. Rotas: Poderoso sistema de roteamento que permite definir rotas facilmente para o aplicativo. As rotas podem ser definidas de forma clara e simples, o que torna o aplicativo fácil de entender e manter.

3. Migrations: Recurso chamado de "migrations" que permite gerenciar as alterações no banco de dados. Isso torna mais fácil para os desenvolvedores controlar as alterações no banco de dados e manter o histórico de todas as alterações.

4. Eloquent ORM: É um recurso poderoso que permite interagir com o banco de dados de forma simples e intuitiva, usando objetos ao invés de comandos SQL. Isso torna a escrita de consultas de banco de dados mais fácil e mais legível.

5. Blade Templates: Sistema de templates, que é fácil de usar e permite definir layouts de forma simples e reutilizável.

6. Bibliotecas robustas: Ampla variedade de bibliotecas e recursos que podem ser utilizados para diferentes fins, como autenticação, cache, filas, envio de e-mails, etc.

7. Testes automatizados: Recursos de testes automatizados que permitem testar facilmente o código do aplicativo e garantir que ele funcione corretamente.

### 2. Explique o que é o padrão MVC (Model-View-Controller) e como ele é usado no
Laravel.

O padrão arquitetural Model-View-Controller (MVC) é uma abordagem comum para desenvolvimento de software que separa a aplicação em três componentes principais: Model, View e Controller.

Model: representa a camada de dados da aplicação. Ele é responsável por gerenciar o acesso ao banco de dados e definir as regras de negócio do aplicativo.
View: é responsável pela apresentação dos dados ao usuário final. Ele exibe a saída gerada pelo controlador para o usuário final.
Controller: é responsável pela interação do usuário com a aplicação. Ele recebe as solicitações do usuário, processa as entradas, interage com o Model para acessar os dados necessários e decide qual View deve ser usada para exibir a saída.
O Laravel é um framework MVC para desenvolvimento web em PHP, e segue a arquitetura MVC. O Model representa os dados do aplicativo e é implementado usando Eloquent ORM. A View é implementada usando Blade, que é um sistema de templates que permite definir layouts e componentes reutilizáveis. O Controller é responsável por receber as solicitações do usuário e chamar o Model e a View para processar as solicitações e gerar a resposta adequada.

O uso do padrão MVC no Laravel torna o código mais organizado, facilitando a manutenção e o teste do aplicativo. Além disso, ele separa claramente as responsabilidades de cada componente do aplicativo, tornando mais fácil para os desenvolvedores colaborarem em projetos grandes e complexos.

### 3. O que é uma migração em Laravel?

Uma migração é uma forma de gerenciar as alterações no banco de dados. As migrações são arquivos de classe que contêm instruções para criar, alterar ou excluir tabelas ou colunas no banco de dados.

### 4. Explique como o Eloquent ORM é usado no Laravel.

O Eloquent é um ORM (Object-Relational Mapping) integrado no Laravel que facilita a interação do aplicativo com o banco de dados. Ele permite que os desenvolvedores usem uma sintaxe simples e elegante para interagir com o banco de dados, em vez de escrever instruções SQL complexas.

### 5. O que é o Blade e como ele é usado no Laravel?

Blade é um mecanismo de template integrado no Laravel que permite aos desenvolvedores criar e renderizar templates de forma rápida e eficiente. Ele foi projetado para ser fácil de aprender e usar, ao mesmo tempo que oferece recursos poderosos para criar layouts e exibir dados dinâmicos em um aplicativo Laravel.

## Instalação
1. Clone o repositório:
```
git clone https://github.com/rclepf/teste_laravel.git
```
2. Instale as dependências do Composer:
```
composer install
```
3. Crie um arquivo .env na raiz do projeto. Você pode copiar o arquivo .env.example e ajustar as configurações de banco de dados:
```
cp .env.example .env
```
4. Crie um banco de dados e ajuste a variável DB_DATABASE no arquivo .env:
makefile
```
DB_DATABASE=nomedobanco
DB_USERNAME=seuusuario
DB_PASSWORD=suasenha
```
5. Rode as migrations para criar as tabelas no banco de dados:
```
php artisan migrate
```
6. Instale as dependências do NPM e compile os assets:
```
npm install && npm run dev
```
7. Popule o banco de dados com algumas tarefas de exemplo:
```
php artisan db:seed
```
8. Finalmente, inicie o servidor embutido do PHP:
```
php artisan serve
```
Agora você pode acessar o aplicativo em http://localhost:8000.
