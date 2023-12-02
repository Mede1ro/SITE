<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/Card.css">
    <link rel="stylesheet" href="./Css/Style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Sosa Bank</title>
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
    </div>

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
</body>

</html>