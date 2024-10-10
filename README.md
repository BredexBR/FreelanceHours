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

## Índice
1. **[Funcionalidades da Aplicação](#funcionalidades-da-aplicação)**
2. **[Comandos Terminal](#comandos-terminal)**
   - 2.1 **[Iniciando Projeto Laravel](#iniciando-projeto-laravel)**
   - 2.2 **[Mais Comandos Laravel](#mais-comandos-laravel)**
   - 2.3 **[Erro Failed to Listen (Herd)](#erro-failed-to-listen-herd)**
   - 2.4 **[Controllers](#controllers)**
   - 2.5 **[Models](#models)**
   - 2.6 **[View](#view)**
   - 2.7 **[Livewire](#livewire)**
   - 2.8 **[Node.js](#nodejs)**
   - 2.9 **[Tailwind CSS com Laravel](#tailwind-css-com-laravel)**
3. **[Alpine.js](#alpinejs)**
4. **[dbdiagram.io](#dbdiagramio)**
5. **[Rodando o Projeto em sua Máquina](#rodando-o-projeto-em-sua-máquina)**


## Funcionalidades da Aplicação

- **Listagem de Propostas e Projetos**: A aplicação permite que os usuários visualizem uma lista completa de projetos disponíveis, com a opção de ver detalhes de cada um. Além disso, é possível listar todas as propostas enviadas para esses projetos.

- **Envio de Propostas**: O sistema oferece um formulário funcional para que os usuários possam enviar suas propostas para um projeto específico, com validações para garantir que as informações enviadas sejam consistentes.

- **Timer e Ordenação de Propostas**: Para melhorar a experiência do usuário, há um timer que exibe o tempo restante de cada proposta, além de uma funcionalidade de ordenação para que as propostas sejam organizadas pelo menor tempo.

- **Paginação das Propostas**: A listagem de propostas conta com paginação para facilitar a navegação entre muitas propostas de forma eficiente.

![tabela inicial](/imgs-readme/proposta.png)

- **Atualização em Tempo Real**: Assim que uma nova proposta é submetida, as informações são atualizadas em tempo real na interface, garantindo que os usuários tenham acesso às últimas propostas.

- **Notificações por E-mail**: O sistema é capaz de enviar notificações automáticas por e-mail quando novas propostas são enviadas, mantendo todos os envolvidos informados das atividades.

![tabela inicial](/imgs-readme/email.png)

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

- O comando a seguir é utilizado para publicar os arquivos de tradução padrão do Laravel para o diretório lang/ do seu projeto. Esses arquivos incluem strings de tradução que podem ser personalizados conforme as necessidades da sua aplicação, como mensagens de erro, validações, entre outras.
    ```bash
    php artisan lang:publish

- Caso queira fazer a tradução dos arquivos de inglês para portugues siga o passo a passo que esta no readme.md deste [projeto no github](https://github.com/lucascudo/laravel-pt-BR-localization)

- Após seguir o passo a passo desinstale o repositório para economizar espaço:
    ```bash
    composer uninstall lucascudo/laravel-pt-br-localization --dev

- O comando a seguir é usado no Laravel para criar uma nova migration (migração) que será responsável por adicionar uma coluna (ou colunas) à tabela existente proposals. Neste caso, a migração adicionará uma coluna chamada positions à tabela proposals
    ```base
    php artisan make:migration add_positions_to_proposals_table

- O comando a seguir é usado para criar uma nova notificação chamada NewProposal. As notificações no Laravel permitem que você envie alertas para usuários através de diferentes canais, como email, SMS (via serviços como Nexmo ou Twilio), notificações push ou banco de dados.
    ```base
    php artisan make:notification NewProposal

- O comando a seguir é usado para criar um novo comando customizado de Artisan chamado CloseProject. Comandos Artisan são scripts que você pode executar a partir da linha de comando para automatizar tarefas no seu aplicativo Laravel, como processar dados, agendar tarefas ou interagir com o banco de dados.
    ```base
    php artisan make:command CloseProject

- O comando a seguir permite que o scheduler (agendador) do Laravel execute as tarefas agendadas de maneira contínua dentro de um processo, sem precisar depender de um cron job configurado diretamente no servidor(Abra um terminal e deixe esse codigo rodando).
    ```base
    php artisan schedule:work

- O comando a seguir é utilizado para monitorar em tempo real o arquivo de log do Laravel, localizado em storage/logs/laravel.log.
    ```base
    tail -f storage/logs/laravel.log

### Erro Failed to Listen(Herd)
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

## Alpine.js
 O [Alpine.js](https://alpinejs.dev/) é uma biblioteca JavaScript leve e minimalista, projetada para adicionar funcionalidades dinâmicas a páginas web de forma simples e rápida, sem a necessidade de usar frameworks maiores como Vue.js ou React. Ele é comumente utilizado para manipular a interface do usuário (UI) diretamente no HTML, oferecendo uma alternativa mais simples para interatividade em projetos menores ou onde o desempenho e a simplicidade são prioritários.

## dbdiagram.io
Para o planejamento inicial do banco de dados, utilizamos o dbdiagram.io, uma ferramenta online para criar diagramas de entidade-relacionamento (ERD). Ela nos permitiu definir a estrutura do banco de dados de maneira simples e visual, facilitando a criação das tabelas e suas relações.
<br><br>

![tabela inicial](/imgs-readme/dbdiagram.png)

## Rodando o Projeto em sua Máquina
Para este projeto é necessário ter o [Herd](https://herd.laravel.com/windows) instalado.

- 1. Para rodar o projeto faça o comando a seguir no terminal e crie um arquivo na raiz chamado **.env**, utilize o arquivo **.env.example** como molde, adicione as informações de sua **APP_Key**. 
    ```bash
    git clone https://github.com/BredexBR/FreelanceHours.git
  
- 2. Crie um terminal e execute o comando:
    ```bash    
    npm install

- 3. Gere as informações testes do banco de dados :
    ``` bash
    php artisan migrate:fresh --seed

- 4. Deixe rodando o comando no terminal:
    ```bash    
    php artisan serve

- 5. Abra outro terminal e deixe rodando o comando:
    ```bash
    npm run dev

- 6. Cole o hiperlink [LocalHost](http://127.0.0.1:8000) (sera informado no terminal da etapa **4**, "CTRL + Click esquerdo do mouse" abrirá direto) e pressione "ENTER".

- 7 (Opcional) Caso queira consultar os logs do Laravel, crie um novo terminal e deixe rodando:
