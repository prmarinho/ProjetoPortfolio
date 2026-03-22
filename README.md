# 🌐 ProjetoPortfolio

> Site pessoal e portfólio desenvolvido com HTML, CSS, JavaScript e PHP, reunindo os principais trabalhos do Ensino Médio Técnico. Inclui módulos de carrinho de compras e formulário de contato com integração a banco de dados MySQL. Challenge do Quarto Bimestre — Senac.

![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)
![Status](https://img.shields.io/badge/Status-Concluído-brightgreen?style=for-the-badge)


## 💡 Sobre o Projeto

O **ProjetoPortfolio** é um site pessoal desenvolvido por **Paulo Ribeiro Marinho**, estudante do 3º ano do Ensino Médio Técnico no **Senac Nações Unidas**, como entrega do *Challenge do Quarto Bimestre*.

O projeto reúne três módulos independentes:

- **`projeto/`** — Site portfólio com navegação entre áreas do conhecimento, tendências tecnológicas e apresentação profissional pessoal
- **`carrinhoDeCompras/`** — Loja virtual com listagem de produtos, carrinho por sessão e finalização de compra, integrada ao MySQL via PHP
- **`bd-contato/`** — Formulário de contato com persistência em banco de dados MySQL e listagem/edição dos registros via PHP

---

## ✨ Funcionalidades

### 🧑‍💻 Portfólio Pessoal (`projeto/`)
- [x] Página inicial com apresentação e navegação
- [x] Seção de **Áreas do Conhecimento** (Ciências Humanas, Linguagens, Ciências da Natureza, Matemática)
- [x] Seção de **Tendências Tecnológicas**
- [x] Página de **Portfólio** com habilidades técnicas, soft skills e galeria de projetos
- [x] Alternância de tema **Light / Dark / Auto** com Bootstrap 5.3

### 🛒 Carrinho de Compras (`carrinhoDeCompras/`)
- [x] Listagem de produtos cadastrados no banco de dados
- [x] Adição e remoção de itens via sessão PHP
- [x] Finalização de compra com feedback visual
- [x] Integração com MySQL

### 📬 Formulário de Contato (`bd-contato/`)
- [x] Formulário com campos de nome, e-mail, telefone e mensagem
- [x] Envio e persistência dos dados no banco MySQL
- [x] Listagem de todos os contatos cadastrados
- [x] Edição de registros existentes

---

## 📁 Estrutura do Projeto

```
ProjetoPortfolio/
│
├── projeto/                        # Site portfólio principal
│   ├── index.html                  # Página inicial
│   ├── areasConhecimento.html      # Áreas do conhecimento
│   ├── cienciasHumanas.html        # Ciências Humanas
│   ├── cienciasNatureza.html       # Ciências da Natureza
│   ├── linguagens.html             # Linguagens
│   ├── matematica.html             # Matemática
│   ├── tendenciasTecnologicas.html # Tendências tecnológicas
│   ├── portifolio.html             # Portfólio pessoal
│   ├── style.css                   # Estilos customizados
│   ├── imagens/                    # Imagens do projeto
│   └── assets/                     # Bootstrap (CSS + JS)
│
├── carrinhoDeCompras/              # Módulo de loja virtual
│   ├── index.php                   # Loja e carrinho
│   ├── db.php                      # Conexão com o banco
│   ├── style.css                   # Estilos da loja
│   └── loja.sql                    # Script do banco de dados
│
├── bd-contato/                     # Módulo de formulário de contato
│   ├── index.html                  # Formulário de contato
│   ├── processar.php               # Processa o envio do formulário
│   ├── listar.php                  # Lista os contatos cadastrados
│   ├── editar.php                  # Edita um contato
│   └── contato_db.sql              # Script do banco de dados
│
├── Demonstracao_Projeto.mp4            # Vídeo demo do portfólio
├── Demonstracao_CarrinhoDeCompras.mp4  # Vídeo demo do carrinho
└── Demonstracao_Formulario_Contato.mp4 # Vídeo demo do formulário
```

---

## ✅ Pré-requisitos

Para rodar os módulos PHP com banco de dados, você precisará de:

- [XAMPP](https://www.apachefriends.org/) — servidor local com Apache, PHP e MySQL
- Navegador moderno (Chrome, Firefox, Edge)

> O módulo `projeto/` é 100% estático e pode ser aberto diretamente no navegador, sem necessidade de servidor.

---

## 🚀 Como Executar

### Portfólio (apenas HTML/CSS/JS)

1. Clone o repositório:
```bash
git clone https://github.com/prmarinho/ProjetoPortfolio.git
```
2. Abra o arquivo `projeto/index.html` diretamente no navegador.

---

### Carrinho de Compras (PHP + MySQL)

1. Inicie o **XAMPP** e ative **Apache** e **MySQL**
2. Copie a pasta `carrinhoDeCompras/` para `C:/xampp/htdocs/`
3. Acesse o **phpMyAdmin** em `http://localhost/phpmyadmin`
4. Crie um banco de dados chamado `loja` e importe o arquivo `loja.sql`
5. Ajuste as credenciais em `db.php` se necessário:
```php
$conn = new mysqli("localhost", "root", "", "loja");
```
6. Acesse no navegador: `http://localhost/carrinhoDeCompras/`

---

### Formulário de Contato (PHP + MySQL)

1. Inicie o **XAMPP** e ative **Apache** e **MySQL**
2. Copie a pasta `bd-contato/` para `C:/xampp/htdocs/`
3. Acesse o **phpMyAdmin** e importe o arquivo `contato_db.sql`
4. Acesse no navegador: `http://localhost/bd-contato/`

---

## 🎬 Demonstração

O repositório inclui três vídeos de demonstração:

| Arquivo | Descrição |
|---|---|
| `Demonstracao_Projeto.mp4` | Navegação pelo site portfólio |
| `Demonstracao_CarrinhoDeCompras.mp4` | Fluxo completo da loja virtual |
| `Demonstracao_Formulario_Contato.mp4` | Envio e listagem de contatos |

---

## 🛠️ Tecnologias

- **[HTML5](https://developer.mozilla.org/pt-BR/docs/Web/HTML)** — Estrutura das páginas
- **[CSS3](https://developer.mozilla.org/pt-BR/docs/Web/CSS)** — Estilização customizada
- **[JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript)** — Interatividade e alternância de tema
- **[Bootstrap 5.3](https://getbootstrap.com/)** — Framework CSS responsivo
- **[PHP](https://www.php.net/)** — Back-end dos módulos de carrinho e contato
- **[MySQL](https://www.mysql.com/)** — Banco de dados relacional
- **[XAMPP](https://www.apachefriends.org/)** — Servidor local para execução do MySQL.
