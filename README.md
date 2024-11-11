<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passos para Instalação do Projeto</title>
</head>
<body>

    <h1>Passos para Instalação</h1>

    <h2>1. Codificação do Projeto</h2>
    <p><strong>Codificação:</strong> UTF-8</p>

    <h2>2. Dependências Laravel</h2>
    <h3>2.1 Comando(s)</h3>
    <ul>
        <li><code>composer install</code></li>
        <li><code>php artisan key:generate</code></li>
        <li><code>php artisan jwt:secret</code></li>
    </ul>

    <h2>3. Dependências Banco de Dados</h2>
    <h3>3.1 Configuração do Banco de Dados</h3>
    <p>Configurar o arquivo <code>.env</code> com os dados de conexão do banco de dados (PostgreSQL).</p>

    <h3>3.2 Comando(s)</h3>
    <ul>
        <li><code>php artisan migrate</code></li>
    </ul>

    <h2>4. Dependências Docker</h2>
    <h3>4.1 Arquivos já configurados</h3>
    <p>Certifique-se de que os seguintes arquivos estão presentes e configurados:</p>
    <ul>
        <li><code>\dockerfiles</code></li>
        <li><code>docker-compose.yml</code></li>
    </ul>

    <h3>4.2 Comando(s)</h3>
    <ul>
        <li><code>docker compose up -d</code></li>
    </ul>

    <h2>Documentação do Projeto</h2>
    <p>A documentação do projeto, incluindo os endpoints, está localizada na raiz do projeto no arquivo <code>Documentação.pdf</code>.</p>

</body>
</html>
