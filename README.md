<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# ACP GROUP - TESTE PRÁTICO. 
## Por Melquisedeque Bispo de Jesus.

## Instruções importantes.


## Documentação do projeto contendo.
    ### Documentação.pdf
    - Mapa dos End Points
    - Instrução do JWT 
    - Diagrama do banco de dados. 
    - Localizada na raiz do projeto no arquivo ('Documentação.pdf')
    - Codificação do Projeto (UTF-8)

# Instalação do projeto

## 2. Dependências Laravel.
    - 2.1 Renomear .env.example para .env (Raiz do projeto)
    - Comando(s)
    - 2.2 composer install
    - 2.3 php artisan key:generate
    - 2.4 php artisan jwt:secret
## 3. Dependências Banco de dados (PostgresSQL).   
    - 3.1 Configurar .env com banco de dados (PostgresSQL)
    - Comando(s)
    - 3.2 php artisan migrate   
## 4. Dependências Docker.
    - 4.1 Arquivos já configurados
    - Na Pasta dockerfiles
    - E O docker-compose.yml (Raiz do projeto)
    - Comando(s)
    - 4.2 docker compose up -d

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
