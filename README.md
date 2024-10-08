# Freelance Hours
Este projeto foi desenvolvido como parte do curso gratuito de PHP oferecido pela Rocketseat, que abrange uma série de tópicos fundamentais para o desenvolvimento web com PHP. Durante o curso, foram explorados conceitos essenciais do PHP, além de ferramentas e frameworks complementares que facilitam o desenvolvimento moderno de aplicações.

No curso, aprendemos a trabalhar com:

- **PHP**: A linguagem de programação back-end, onde estudamos seus fundamentos e melhores práticas.
- **Blade**: O motor de templates do Laravel, que permite criar layouts dinâmicos e reutilizáveis de maneira simples e eficiente.
- **Livewire**: Um framework que permite criar componentes dinâmicos em tempo real sem sair do ecossistema do Laravel, facilitando a criação de interfaces interativas sem a necessidade de JavaScript.
- **Artisan**: A interface de linha de comando (CLI) do Laravel, que auxilia na criação de recursos, execução de tarefas e gerenciamento da aplicação.
- **Herd**: Uma ferramenta moderna para gerenciar ambientes de desenvolvimento PHP localmente.
- **Composer**: O gerenciador de dependências PHP, utilizado para integrar pacotes e bibliotecas externas ao projeto.
- **Node.js**: Uma plataforma que permite o uso de JavaScript no back-end e no front-end, frequentemente utilizada para gerenciar pacotes como o NPM.

Este projeto reúne as práticas e conceitos aplicados ao longo do curso, demonstrando a integração entre todas essas ferramentas e tecnologias.

## Comandos Terminal
### Iniciando Projeto Laravel
Para acessar a documentação do Laravel [clique aqui](https://laravel.com/docs/11.x/readme).

- Se quiser saber as informações de um comando:
    ```bash
    php artisan | grep comando (Linux)
    php artisan | Select-String livewire (Windows)

- Para iniciar a criação do projeto laravel: Crie uma pasta para seu projeto e dentro dela no terminal execute o comando:
    ```bash
    laravel new

- Após isso adicione o nome do projeto e utilize o "stater kit" desejado(no caso do projeto em questão foi "No starter kit").
  
- Selecione a parte de teste(Pest).

- Se quiser inicializar com Git.
    ```bash
    yes

- Escolha o banco de dados desejedo.
    ```bash
    Sqlite

- Comando responsável por iniciar aplicação Php:
    ```bash
    php artisan serve

### Erro Failed to Listen
- Acesse a pasta:
    ```bash
    C:\Users\username\.config\herd\bin\php83

- Dentro dessa pasta estarão as versões do PHP que você instalou. Clica dentro dessa pasta e encontra o arquivo php.ini, abra ele com algum editor de texto e altera de:
    ```bash
    variables_order = "EGPCS"

- Para:
    ```bash    
    variables_order = "GPCS"
 
- **Para auxiliar a localização o trecho se encontra abaixo da linha:**
    ```bash    
    ; https://php.net/variables-order
    variables_order = "EGPCS"

- Fecha, reinicia o terminal e tenta rodar de novo!

### Controllers
- Para criar a controller:    
    ```bash
    php artisan make:controller

### Models
- Para verificar as informações de uma model como por exemplo User:
    ```bash
    php artisan model:show User

## Livewire
Para saber mais sobre sua documentação [acesse aqui](https://laravel-livewire.com/docs/2.x/installation).

- para instalar o Livewire insira no terminal:
    ```bash
    composer require livewire/livewire

- Para criar um novo layout:
    ```bash
    php artisan livewire:layout

- Agora para criar um novo component:
    ```bash
    php artisan livewire:make nomeDoComponent

## Node.js
- Para instalar todas as dependências listadas no arquivo package.json do projeto:
    ```bash    
    npm install

- Para executar um script de build que está definido no arquivo package.json: 
    ```bash    
    npm run build
<br>
Comumente usado em projetos front-end para compilar e otimizar o código fonte, preparando-o para a produção.
<br>

    
