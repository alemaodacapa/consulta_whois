# Consultor WHOIS de Domínios com IA

Aplicação web simples para consultar dados WHOIS de domínios usando uma API externa, com interface moderna e responsiva feita com Tailwind CSS.

---

## Descrição

Este projeto permite que usuários consultem informações WHOIS de qualquer domínio diretamente pelo navegador, utilizando uma API pública (API Ninjas WHOIS) por meio de um proxy PHP. A interface é amigável, responsiva e estilizada com Tailwind CSS, facilitando a visualização dos dados retornados em JSON formatado.

---

## Funcionalidades

- Consulta de dados WHOIS para domínios informados pelo usuário
- Validação simples para garantir que um domínio foi digitado
- Exibição de dados formatados em JSON para fácil leitura
- Feedback visual com spinner de carregamento enquanto consulta está em andamento
- Mensagens de erro amigáveis em caso de problemas na consulta
- Design responsivo e moderno usando Tailwind CSS e fonte Inter

---

## Tecnologias utilizadas

- HTML5 e CSS3 (Tailwind CSS)
- JavaScript (Fetch API para chamadas assíncronas)
- PHP para proxy da API WHOIS e retorno de JSON
- API externa: [API Ninjas WHOIS](https://api-ninjas.com/api/whois)

---

## Teste Online

Você pode testar a aplicação diretamente acessando o site oficial:

<p align="center">
  <a href="https://alemaodacapa.com.br/whois.html" target="_blank" rel="noopener noreferrer" style="text-decoration:none;">
    <button style="
      background-color: #2563EB; 
      color: white; 
      padding: 12px 24px; 
      font-size: 16px; 
      border: none; 
      border-radius: 6px; 
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(37, 99, 235, 0.4);
      transition: background-color 0.3s ease;">
      Testar Consultor WHOIS Online
    </button>
  </a>
</p>

---

## Como usar localmente

1. Configure o arquivo `whois-proxy.php` com sua chave API da API Ninjas (`$apiKey`).

2. Coloque os arquivos `index.html` (ou o arquivo HTML principal) e `whois-proxy.php` no seu servidor web com suporte a PHP.

3. Acesse a página via navegador.

4. Digite o domínio desejado no campo e clique em "Consultar".

5. Veja os dados WHOIS retornados na área de resultados.

---

## Requisitos

- Servidor web com PHP 7.0+ para rodar o proxy PHP
- Acesso à internet para realizar chamadas à API externa
- Chave válida da API Ninjas (https://api-ninjas.com/)

---

## Melhorias futuras

- Validar melhor o domínio antes da consulta (regex)
- Adicionar suporte a múltiplos idiomas
- Exibir dados WHOIS de forma mais amigável e segmentada (não só JSON bruto)
- Tratar e armazenar consultas para análises futuras
- Adicionar cache para diminuir chamadas repetidas à API

---

## Licença

Este projeto está licenciado sob a MIT License.

---

## Autor

Seu Nome - [Me siga no GitHub: Alemaodacapa](https://github.com/alemaodacapa)

---

## Contato

Qualquer dúvida ou sugestão, entre em contato pelo email: sac@painelsummerside.com.br
