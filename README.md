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
### Documentação.pdf

A documentação do projeto contendo.
- Mapa dos End Points
- Instrução do JWT 
- Diagrama do banco de dados. 
- Localizada na raiz desse projeto no arquivo (Documentação.pdf)


Codificação do Projeto (UTF-8)

# Instalação do projeto
## 2. Dependências Laravel.
    - Renomear .env (Raiz do projeto)
    -- Comando(s)
    - composer install
    - php artisan key:generate
    - php artisan jwt:secret
## 3. Dependências Banco de dados (PostgresSQL).
   - 3.2 Comando(s)
   - php artisan migrate
## 4. Dependências Docker.
   - 4.1 Arquivos já configurados
    - {\dockerfiles}
    - {docker-compose.yml}
    - 4.2 Comando(s)
    - docker compose up -d

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
