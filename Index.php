<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>SosaBank</title>
</head>

<body>
    <div class="menu">
        <div class="menu-logo">SosaBank</div>
        <div class="menu-itens">
            <ul class="menu-item">
                <li class="menu-item-link"><a href="#">Inicio</a></li>
                <li class="menu-item-link"><a href="#">Contas e Serviços</a></li>
                <li class="menu-item-link"><a href="#">Atendimento ao Cliente</a></li>
                <li class="menu-item-link"><a href="#">Sobre Nós</a></li>
            </ul>
        </div>
        <div class="login">
            <a href="./Pages/Login.php"><span class="material-symbols-outlined">person</span></a>
        </div>
    </div>
    <svg class="bg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1140 320">
        <defs>
            <linearGradient id="gradiente" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color: #4601aa; stop-opacity: 0.8" />
                <stop offset="100%" style="stop-color: #281247; stop-opacity: 1" />
            </linearGradient>
        </defs>
        <path fill="url(#gradiente)" d="M0,224L120,240C240,256,480,288,720,277.3C960,267,1200,213,1320,186.7L1440,160L1440,0L1320,0C1200,0,960,0,720,0C480,0,240,0,120,0L0,0Z"></path>
    </svg>

    <div class="main">

        <div class="texto">
            <h1>Transformando Sonhos em Realidade!</h1>
            <p>Embarque em uma jornada exclusiva de estilo e conveniência com os cartões de crédito Sosa. Não estamos apenas oferecendo cartões; estamos proporcionando uma experiência de pagamento que eleva a maneira como você vive, gasta e aproveita a vida.</p>
        </div>

        <button class="botao">Adquira Já</button>

        <div class="card-container">
            <aside class="card-front">
                <label class="number" for="cardNumber">
                    5355 1234 0000 9999
                </label>
                <label class="name" for="cardHolder">
                    Jane Appleseed
                </label>
                <label class="expiry" for="expiryMonth">
                    03/27
                </label>
                <img class="cardLogo" data-v-5d206127="" data-v-8fcb32d4="" style="opacity: 1;" src="https://simey-credit-card.netlify.app/img/logos/master.svg">


                <div class="chip">
                    <svg role="img" viewBox="0 0 100 100" aria-label="Chip">
                        <use href="#chip-lines" />
                    </svg>
                </div>
                <svg class="contactless" role="img" viewBox="0 0 24 24" aria-label="Contactless">
                    <use href="#contactless">
                </svg>

            </aside>

            <svg id="chip">
                <g id="chip-lines">
                    <polyline points="0,50 35,50"></polyline>
                    <polyline points="0,20 20,20 35,35"></polyline>
                    <polyline points="50,0 50,35"></polyline>
                    <polyline points="65,35 80,20 100,20"></polyline>
                    <polyline points="100,50 65,50"></polyline>
                    <polyline points="35,35 65,35 65,65 35,65 35,35"></polyline>
                    <polyline points="0,80 20,80 35,65"></polyline>
                    <polyline points="50,100 50,65"></polyline>
                    <polyline points="65,65 80,80 100,80"></polyline>
                </g>
            </svg>


            <svg id="contactless">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M9.172 15.172a4 4 0 0 1 5.656 0"></path>
                <path d="M6.343 12.343a8 8 0 0 1 11.314 0"></path>
                <path d="M3.515 9.515c4.686 -4.687 12.284 -4.687 17 0"></path>
            </svg>

        </div>
    </div>
</body>

</html>