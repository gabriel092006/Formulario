<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venda de Motos</title>
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
        <section class="highlight">
            <h2>Destaque da Semana</h2>
            <div class="highlight-item">
                <img src={{ asset('img/destaque.jpg' ) }} alt="Moto Destaque">
                <div class="highlight-info">
                    <h3>CBR 1000 RR</h3>
                    <p>Preço: R$ 193.500,00</p>
                    <p>Descrição: Esta moto é conhecida por sua performance incrível e design arrojado. Aproveite a oferta especial desta semana!</p>
                    <button class="buy-button">Comprar</button>
                </div>
            </div>
        </section>


        <div class = "ModelosdeMotos">
            <h1>Modelos de Motos</h1>
        </div>

        <section class="moto-container">
            <div class="moto-item">
                <img src={{ asset('img/elite125.webp' ) }} alt="Moto Modelo X">
                 <h2>Elite 125</h2>
                <p>Preço: R$ 12.966,00</p>
                <button class="buy-button">Comprar</button>
            </div>
            <div class="moto-item">
                <img src={{ asset('img/pop110.webp' ) }} alt="Moto Modelo Y">
                <h2>Pop 110i ES</h2>
                <p>Preço: R$ 9.690,00</p>
                <button class="buy-button">Comprar</button>
            </div>
            <div class="moto-item">
                <img src={{ asset('img/sahara300.webp') }} alt="Moto Modelo Z">
                <h2>Sahara 300</h2>
                <p>Preço: R$ 28.650,00</p>
                <button class="buy-button">Comprar</button>
            </div>
            <div class="moto-item">
                <img src={{ asset('img/africa.webp') }} alt="Moto Modelo A">
                <h2>CRF 1100L Africa Twin</h2>
                <p>Preço: R$ 81.100,00</p>
                <button class="buy-button">Comprar</button>
            </div>
            <div class="moto-item">

                <img src={{ asset('img/cb300.webp') }} alt="Moto Modelo B">
                <h2>CB 300F Twister</h2>
                <p>Preço: R$ 22.370,00</p>
                <button class="buy-button">Comprar</button>
            </div>
        </section>

        <section class="testimonials">
            <h2>Depoimentos de Clientes</h2>
            <div class="testimonial-item">
                <div class="testimonial-text">
                    <p>"Comprei minha moto na Venda de Motos e estou muito satisfeito! O atendimento foi excelente e a moto é fantástica."</p>
                    <h4>- João Silva</h4>
                </div>
                <img src={{ asset('img/pessoa1.jfif') }} alt="Foto do Cliente">
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text">
                    <p>"A melhor experiência de compra que já tive. Recomendo a todos os meus amigos!"</p>
                    <h4>- Maria Oliveira</h4>
                </div>
                <img src={{ asset('img/pessoa2.jfif') }} alt="Foto do Cliente">
            </div>
            <div class="testimonial-item">
                <div class="testimonial-text">
                    <p>"Grande variedade de modelos e ótimos preços. Definitivamente voltarei a comprar aqui."</p>
                    <h4>- Carlos Santos</h4>
                </div>
                <img src={{ asset('img/pessoa3.avif') }} alt="Foto do Cliente">
            </div>
        </section>

        <section class="gallery">
            <h2>Galeria</h2>
            <div class="gallery-item"><img src={{ asset('img/img/1.jfif') }} alt="Galeria 1"></div>
            <div class="gallery-item"><img src={{ asset('img/img/2.jfif') }} alt="Galeria 2"></div>
            <div class="gallery-item"><img src={{ asset('img/img/3.jfif') }} alt="Galeria 3"></div>
            <div class="gallery-item"><img src={{ asset('img/img/4.jfif') }} alt="Galeria 4"></div>
            <div class="gallery-item"><img src={{ asset('img/img/5.jfif') }} alt="Galeria 5"></div>
        </section>
    </main>
    <br><br><br><br><br> <br><br><br><br><br>
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

.highlight, .testimonials, .gallery {
    margin: 2em 0;
}

.highlight h2, .testimonials h2, .gallery h2 {
    text-align: center;
    font-family: 'Oswald', sans-serif;
    color: #20232a;
    margin-bottom: 1em;
}

.highlight-item {
    display: flex;
    flex-wrap: wrap;
    gap: 1em;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 1em;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.highlight-item img {
    flex: 1 1 300px;
    max-width: 100%;
    height: auto;
    border-radius: 4px;
}

.highlight-info {
    flex: 2;
    padding: 1em;
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

.testimonials {
    background-color: #f9f9f9;
    padding: 2em;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.testimonial-item {
    margin: 1em 0;
    text-align: center;
}

.testimonial-item p {
    font-style: italic;
    color: #333;
}

.testimonial-item h4 {
    margin-top: 0.5em;
    color: #20232a;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1em;
}

.gallery-item {
    flex: 1 1 200px;
    max-width: 200px;
}

.gallery-item img {
    width: 100%;
    height: auto;
    border-radius: 4px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

@media (max-width: 768px) {
    header {
        flex-direction: column;
        align-items: center;
    }

    footer {
        position: static;
    }

    .highlight-item {
        flex-direction: column;
        align-items: center;
    }

    .moto-container {
        flex-direction: column;
        align-items: center;
    }

    .moto-item {
        width: 100%;
        max-width: none;
    }

    .gallery {
        flex-direction: column;
        align-items: center;
    }

    .gallery-item {
        width: 100%;
        max-width: none;
    }
}



.testimonials {
    background-color: #f9f9f9;
    padding: 2em;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.testimonial-item {
    margin: 1em 0;
    display: flex;
    align-items: center;
}

.testimonial-item .testimonial-text {
    flex: 1;
}

.testimonial-item img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-left: 1em;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}




</style>
