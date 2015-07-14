## Starter Lumen

[![Total Downloads](https://poser.pugx.org/mixdinternet/starterlumen/downloads.svg)](https://packagist.org/packages/mixdinternet/starterlumen)
[![License](https://poser.pugx.org/mixdinternet/starterlumen/license.svg)](https://packagist.org/packages/mixdinternet/starterlumen)

Starter Lumen é uma aplicação para pequenos sites e landing pages utilizando o micro-framework Lumen 5.1

Starter Lumen possui como caracteristicas:

1. Disparo de emails

2. Integração com gestor de leads (http://eleads.io)

3. Otimização dos titulos para SEO (https://packagist.org/packages/artesaos/seotools)

4. Pacotes frontend versionados com bower

5. Automação dos arquivos less, scss, css e js e otimização das imagens utilizando gulp

6. Utilização do proprio php para gerar o servidor, não sendo necessário a instalação do apache

### Instalação

Criando o projeto

`$ composer create mixdinternet/starterlumen lumen -s dev`

Instalando os componentes

`$ composer install`

Configurando o ambiente

`$ cp .env.example .env`

Instalando o gulp

`$ npm install`

Instalado as dependencias de javascript

`$ bower install`

Executando o gulp

`$ gulp`

### Licença

Starter Lumen é open-source [MIT license](http://opensource.org/licenses/MIT)