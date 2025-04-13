# 💸 MoneyJourney - Plataforma Gamificada de Educação Financeira

MoneyJourney é um MVP desenvolvido na minha disciplina de Startups de uma plataforma web gamificada de educação financeira voltada para jovens. A proposta é ensinar conceitos financeiros de forma interativa, com um sistema de recompensas, níveis de usuário e módulos de aprendizado baseados em quizzes.

## 🚀 Tecnologias Utilizadas

- **Laravel**: Backend robusto em PHP
- **Vue.js**: Frontend reativo e moderno
- **Inertia.js**: Integração entre Laravel e Vue.js
- **Laravel Breeze**: Autenticação simples com integração nativa com Inertia

## 🧩 Funcionalidades

- ✅ Cadastro e autenticação de usuários
- ✅ Módulos de aprendizado com lições e quizzes
- ✅ Sistema de progresso por níveis e XP
- ✅ Recompensas e pontuação por desempenho
- ✅ Barra de progresso com visualização do avanço
- ✅ Interface amigável e responsiva

## 📸 Imagens do Projeto

## 📸 Imagens do Projeto

### 🎓 Tela de Login
![Login](public/screenshots/login.png)

### 🏠 Página Inicial
![Dashboard Inicial](public/screenshots/DashboardInicial.png)

### 📦 Módulos Disponíveis
![Módulos](public/screenshots/moduloslessons.png)

### 📘 Conteúdo do Módulo
![Conteúdo](public/screenshots/conteudomodulo.png)

### ❌ Resposta Incorreta no Quiz
![Lição Errada](public/screenshots/licaoerrada.png)

### ✅ Resposta Certa no Quiz
![Lição Correta](public/screenshots/licoes.png)

### 📊 Progresso do Usuário
![Progresso](public/screenshots/progresso.png)

### 👤 Perfil do Usuário
![Perfil](public/screenshots/infousuario.png)

## ⚙️ Instalação

### Pré-requisitos

- PHP >= 8.1
- Composer
- Docker + Docker Compose (recomendado)
- Node.js e npm

### Passos

```bash
# Clone o projeto
git clone https://github.com/seu-usuario/moneyjourney.git
cd moneyjourney

# Instale as dependências PHP
composer install

# Instale as dependências JS
npm install && npm run dev

# Suba o ambiente com Laravel Sail
./vendor/bin/sail up -d

# Rode as migrations e seeders
./vendor/bin/sail artisan migrate --seed
