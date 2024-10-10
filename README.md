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
<br><br>
![tabela inicial](/imgs-readme/telaInicial.png)

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

### Mais comandos Laravel
- O comando php a seguir remove todas as tabelas do banco de dados e recria-as do zero. Ele é útil quando você quer fazer uma limpeza completa e garantir que todas as migrações sejam executadas em um banco vazio.
    ```bash
    php artisan migrate:fresh

- O comando a seguir é utilizado para popular o banco de dados com dados de teste ou iniciais, que são definidos nos seeders(database/seeders/DatabaseSeeder.php). Esse comando executa as classes de seeding que você criou, permitindo preencher suas tabelas com dados automaticamente.
    ```bash
    php artisan db:seed

- Caso queira rodar os dois comandos anteriores de uma só vez:
    ```bash
    php artisan migrate:fresh --seed

- Caso queira criar um enum(backed enum String):
    ```bash
    php artisan make:enum

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

- Para criar uma nova model:
    ```bash
    php artisan make:model

1. Escolha o nome
2. Escolha as opções desejadas(se for mais de uma separe por ",")

### View   
- Para criar uma pasta nova com um programa blade.php mais rapidamente como por exemplo(projects/index.blade.php):
    ```bash
    php artisan make:view projects.index

### Livewire
Permite a construção de interfaces dinâmicas sem a necessidade de escrever JavaScript diretamente, usando componentes que interagem com o servidor em tempo real. Para saber mais sobre sua documentação [acesse aqui](https://laravel-livewire.com/docs/2.x/installation).

- para instalar o Livewire insira no terminal:
    ```bash
    composer require livewire/livewire

- Para criar um novo layout:
    ```bash
    php artisan livewire:layout

- Agora para criar um novo component:
    ```bash
    php artisan livewire:make nomeDoComponent

### Node.js
- Para instalar todas as dependências listadas no arquivo package.json do projeto:
    ```bash    
    npm install

- Para executar um script de build que está definido no arquivo package.json: 
    ```bash    
    npm run build
<br>
Comumente usado em projetos front-end para compilar e otimizar o código fonte, preparando-o para a produção.

### Tailwind CSS com Laravel
- Para fazer a instalação do tailwind no projeto:
    ```bash    
    npm install -D tailwindcss postcss autoprefixer
    npx tailwindcss init -p

- Para deixar o tailwind rodando(abra um terminal novo e deixe-o aberto):
    ```bash    
    npm run dev

## dbdiagram.io
Para o planejamento inicial do banco de dados, utilizamos o dbdiagram.io, uma ferramenta online para criar diagramas de entidade-relacionamento (ERD). Ela nos permitiu definir a estrutura do banco de dados de maneira simples e visual, facilitando a criação das tabelas e suas relações.
<br><br>
![tabela inicial](/imgs-readme/dbdiagram.png)

    
