# Esse é um projeto para resolução de atividades propostas para testar o conhecimento em desenvolvimento WEB.

Sumário
=======

<!--ts-->
   * [Sobre](#Sobre)
   * [Details](#Details)
   * [Checklist das atividades](#Checklist-das-atividades)
   * [Detalhes técnicos ](#Detalhes-técnicos)
   * [Instalação](#Instalação)
<!--te-->


Sobre
=========
O projeto não tinha como objetivo estar completo,   apenas algumas tarefas deviam ser feitas para provar certos conhecimentos. As atividades são: 

- ATIVIDADE 1
    -  O cabeçalho, menu e rodapé serão comuns em várias páginas, portanto você deverá criar os arquivos cabeçalho.php, menu.php e rodapé.php e incluí-los no arquivo index.php, que deve ser a página principal.

- ATIVIDADE 2 
    - A lista de opções do menu deve ser construída dinamicamente.
    - Crie um array com as opções que estão atualmente no menu estático e, após concluir o menu, adicione mais três itens:
        - Cadastro > Produtos.
        - Cadastro > Perfil de acesso.
        - Relatório > Produtos

    - Por favor, deixe os itens em ordem alfabética.

- ATIVIDADE 3
    - Existem três caixas coloridas na página Dashboards que são: Clientes, Usuários e Fornecedores. 
    - Ao carregar a página, os valores, que deverão ser apresentados em cada
    respectiva caixa, devem ser consultados no arquivo data_request.class.php

- ATIVIDADE 4
    - Ainda sobre as três caixas da página “Dashboards”, utilizando JavaScript, ao
clicar no botão “Visualizar” de cada caixa, a tabela “Tabela Simples” deve
pegar a cor da caixa clicada.

    - Exemplo: clicou no botão Visualizar da caixa verde de usuários, a caixa Tabela
    Simples também fica verde.
    
    - Esta ação deve utilizar apenas Javascript.

- ATIVIDADE 5
    - O arquivo data_request.class.php contém uma classe e três funções que
retornam seus respectivos dados em array.
Estas funções são: dadosClientes, dadosFornecedores, dadosUsuarios.

    - Ao clicar no botão Visualizar da caixa, além de trocar a cor conforme atividade
anterior, o resultado da tabela deve ser apresentado com os dados retornados
de cada uma das funções.

    - As consultas devem ser realizadas via AJAX da biblioteca JQUERY.

Checklist das atividades
==========
- [x] Atividade 1: Transformei o cabeçalho, rodapé e menu lateral em outros arquivos e armazenei-os em layouts. Para um código mais organizado.

- [x] Atividade 2: Criação de um serviço que exporte dados estáticos, com efeitos dinâmicos no index.php, utilizando JavaScript.

- [x] Atividade 3: Para pegar a contagem dos dados, inseri um comando ```<?php ``` em meio do HTML.

- [x] Atividade 4: Utilizei do JavaScript, como foi pedido, para mudar as cores. Modificando as classes através de uma função.

- [x] Atividade 5: Criação de um serviço que pegue os dados do "repositório" de usuários, clientes e fornecedores. De forma dinâmica, mesmo arquivo porém com finais diferentes, dependendo da entrada. Utilizando do AJAX como foi pedido no enunciado.

Detalhes técnicos 
==========
Para trabalhar com esse projeto, tive de utilizar as seguintes tecnologias:

- PHP;
- Jquery (AJAX);
- JavaScript;
- CSS.


Instalação
==========
Faça o download ou clone o repositório, após clonar, entre na pasta do projeto e digite o seguinte comando CLI: 

```
# Inicia o servidor PHP.
php -S localhost:8080
``` 

O projeto estará funcionando em localhost:8080.







