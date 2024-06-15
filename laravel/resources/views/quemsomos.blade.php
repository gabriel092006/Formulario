<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - Venda de Motos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Venda de Motos</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/home') }}"> Principal</a></li>
                <li><a href="{{ url('/quemsomos') }}"> Quem Somos</a></li>
                <li><a href="{{ url('/contato') }}"> Contato</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="about">
            <h2>Quem Somos</h2>
            <p>Somos uma empresa dedicada a oferecer as melhores motos do mercado. Com anos de experiência no setor, nosso objetivo é proporcionar a melhor experiência de compra para nossos clientes.</p>
            <p>Nossa equipe é composta por profissionais apaixonados por motos, sempre prontos para oferecer o melhor atendimento e suporte técnico. Venha nos conhecer e descubra por que somos a escolha número um para os amantes de motos.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Venda de Motos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

<style>
   body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f4f4f9;
}

header {
    background-color: #20232a;
    color: #61dafb;
    padding: 1em 0;
    text-align: center;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

header h1 {
    margin: 0 1em;
    font-family: 'Oswald', sans-serif;
    font-size: 1.5em;
}

nav ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    justify-content: flex-end;
    flex-grow: 1;
    margin-right: 1em;
}

nav ul li {
    margin: 0 1em;
}

nav ul li a {
    color: #61dafb;
    text-decoration: none;
    padding: 1em;
    display: block;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #fff;
}

main {
    padding: 6em 2em 2em; /* Ajuste para evitar sobreposição do conteúdo pelo header fixo */
}

footer {
    background-color: #20232a;
    color: #61dafb;
    text-align: center;
    padding: 0em 0;
    position: fixed;
    width: 100%;
    bottom: 0;
}

.moto-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2em;
}

.moto-item {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    text-align: center;
    padding: 1em;
    flex: 1 1 300px;
    max-width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.moto-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.moto-item img {
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

.buy-button {
    margin-top: 1em;
    padding: 0.5em 1em;
    background-color: #20232a;
    color: #61dafb;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

.buy-button:hover {
    background-color: #61dafb;
    color: #20232a;
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: center;
    }

    footer {
        position: static;
    }

    .moto-container {
        flex-direction: column;
        align-items: center;
    }

    .moto-item {
        width: 100%;
        max-width: none;
    }
}

.about, .contact {
    max-width: 800px;
    margin: 0 auto;
    padding: 2em;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.about h2, .contact h2 {
    text-align: center;
    font-family: 'Oswald', sans-serif;
    color: #20232a;
}

form {
    display: grid;
    gap: 1em;
    max-width: 400px;
    margin: 0 auto;
}

label {
    font-weight: bold;
    color: #20232a;
}

input, select, button {
    padding: 0.5em;
    font-size: 1em;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    background-color: #20232a;
    color: #61dafb;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

button:hover {
    background-color: #61dafb;
    color: #20232a;
}


</style>
