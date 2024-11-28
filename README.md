## Crud em PHP 🐘❤️🌟
O site é uma aplicação básica usada para gerenciar informações.Ele possui algumas funções como: cadastrar usuários(Create), visualizar dados cadastrados(Read), Editar informações(Update) e Apagar usuários(Delete).

## 📍Stack utilizada

<div> 
  
  <img align="inline_block" alt="php" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img align="inline_block" alt="bootstrap" src="https://img.shields.io/badge/bootstrap-%238511FA.svg?style=for-the-badge&logo=bootstrap&logoColor=white"/>
  <img align="inline_block" alt="MySQl" src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"/>
</div>

## 📦 Estrutura do Projeto

```
CRUD_PHP/
├── acoes/   
│   ├──acoes.php   
│   ├──mensagem.php                           
│   ├──usuario-create.php
│   ├──usuario-edit.php
│   └──usuario-view.php                     
├── banco_mySql/  
│   └──cadastro_usuarios.sql                         
├── components/                       
|   └──navbar.php                
└── ... (demais diretórios e arquivos)
```

##  📋 Pré-requisitos

Antes de começar, certifique-se de ter o seguinte instalado em seu ambiente:

- Xampp
- Composer
- Biblioteca `vlucas/phpdotenv`
- MySQL

## 🔧 Instalação da biblioteca `vlucas/phpdotenv`

Siga os passos abaixo para configurar o projeto em sua máquina local.
### 1. Certifique-se de que o Composer está instalado

Se o Composer ainda não estiver instalado, você pode baixá-lo e configurá-lo seguindo as instruções do site oficial:
https://getcomposer.org/download/

Para verificar se está instalado, execute:

```bash
composer --version
```

### 2. Instalar dependências via Composer

```bash
$ composer require vlucas/phpdotenv
```

Isso adicionará a biblioteca ao arquivo composer.json do seu projeto e instalará a dependência.

### 3. Crie uma pasta chamada `vendor`
Depois que baixar e instalar o composer corretamente, você dentro da raiz do projeto criar esse diretório chamado "vendor"

### 4. Configure o arquivo `.env `

Crie um arquivo chamado `.env` na raiz do projeto para armazenar suas variáveis de ambiente.

```bash
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=meubanco
DB_USERNAME=usuario
DB_PASSWORD=senha
````

### 5. Inicie as variáveis de ambiente

No arquivo `conexão.php` . Inicialize o Dotenv para carregar as variáveis.

## 👥 Grupo

- [@Marcellyz](https://github.com/Marcellyz) - Marcelly Eduarda Santos da Silva
- [@giclocate](https://github.com/giclocate) - Giovanna Clócate Cavalcante de Almeida
- [@katiarochaalmeida](https://github.com/katiarochaalmeida) - Katia Rocha de Almeida
- Daniele Pereira


## 🖇️ Contribuição ❤️💡📝🤩

Contribuições são bem-vindas!❤️💡

Esse README pode ser ajustado de acordo com as necessidades específicas do repositório.😊

---

