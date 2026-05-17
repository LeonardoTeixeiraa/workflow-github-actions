![GitHub Actions Status](https://github.com/LeonardoTeixeiraa/workflow-github-actions/actions/workflows/ci.yaml/badge.svg)

# Calculadora de Médias com Pipeline CI/CD Automatizado

> **Projeto acadêmico focado na prática de Implantação de Servidores e CI/CD**

O objetivo principal deste projeto foi desenhar e implementar um fluxo de trabalho automatizado utilizando **GitHub Actions** para criar uma imagem Docker e publicá-la automaticamente no **Docker Hub** a cada atualização no código.

---

## Tecnologias e Ferramentas Utilizadas

* **Linguagem:** PHP 8.2 
* **Framework front-end:** Bootstrap
* **Containerização:** Docker & Dockerfile
* **CI/CD:** GitHub Actions
* **Registro de Imagens:** Docker Hub

---

## ⚙️ Funcionamento do Workflow (CI/CD)

A pipeline de automação é disparada a cada `push` na branch `main` e executa sequencialmente os seguintes passos:

1. **Checkout:** Baixa o código-fonte atualizado no ambiente virtual do GitHub.
2. **Autenticação:** Realiza o login seguro no Docker Hub utilizando as credenciais criptografadas do repositório (`GitHub Secrets`).
3. **Build e Push:** Constrói a imagem Docker baseada no `Dockerfile` e a envia automaticamente para o Docker Hub com as tags `v1.0` e `latest`.

---
 **Desenvolvido por:** [LeonardoTeixeiraa](https://github.com/LeonardoTeixeiraa/)