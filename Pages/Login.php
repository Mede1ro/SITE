<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/Style.css">
    <link rel="shortcut icon" href="../cocaina.png" type="image/x-icon">
    <title>SosaBank</title>
</head>

<body>
    <div class="container-login">
        <div class="conteudo-login">
            <div class="conteudo-login-bg">
                <div class="blobs">
                    <svg class="blobs1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="gradiente1" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color: #5100ca66; stop-opacity: 0.8" />
                                <stop offset="100%" style="stop-color: #5100ca; stop-opacity: 0.8" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradiente1)" d="M54.2,-61.1C66.9,-53.9,71.6,-33.7,70.1,-16.2C68.6,1.3,60.9,16,52.6,30.4C44.4,44.9,35.5,59.1,23.1,63.8C10.6,68.5,-5.4,63.6,-17.2,55.7C-29.1,47.8,-36.8,36.7,-45.5,24.7C-54.3,12.8,-64.1,-0.1,-64.3,-13.6C-64.6,-27,-55.3,-40.9,-43,-48.3C-30.7,-55.6,-15.4,-56.3,2.7,-59.5C20.7,-62.7,41.4,-68.4,54.2,-61.1Z" transform="translate(100 100)" />
                    </svg>
                    <div class="conteudo-login-titulo">
                        <h1>SosaBank</h1>
                    </div>
                    <svg class="blobs2" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="gradiente2" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" style="stop-color: #5100ca66; stop-opacity: 0.8" />
                                <stop offset="100%" style="stop-color: #5100ca; stop-opacity: 0.8" />
                            </linearGradient>
                        </defs>
                        <path fill="url(#gradiente2)" d="M54.4,-43.7C59.2,-37.4,43.9,-15.4,34.3,0.3C24.7,16.1,20.8,25.6,9.2,38.8C-2.4,51.9,-21.7,68.6,-34.9,65.1C-48,61.6,-54.9,37.8,-59.9,14.2C-64.9,-9.4,-67.9,-33,-57.6,-40.6C-47.3,-48.2,-23.6,-39.8,0.6,-40.3C24.8,-40.8,49.6,-50.1,54.4,-43.7Z" transform="translate(100 100)" />
                    </svg>
                </div>
            </div>
            <div class="container-card">
                <div class="conteudo-card">
                    <h1>Login</h1>
                    <form action="/Redirecionamento/Validacao.php" method="post">
                        <div class="input-group">
                            <input type="text" required name="user" id="user" oninput="handleInputChange(this)" onfocus="handleInputFocus(this)" onblur="handleInputBlur(this)">
                            <label for="user">Usuário</label>
                        </div>
                        <div class="input-group">
                            <input type="password" required name="pass" id="pass" oninput="handleInputChange(this)" onfocus="handleInputFocus(this)" onblur="handleInputBlur(this)">
                            <label for="pass">Senha</label>
                        </div>

                        <input class="logar" type="submit">

                        <p class="conteudo-card-redefinir">Esqueceu a senha? <a href="">Redefinir</a></p>
                        <p class="conteudo-card-registrar">Não tem uma conta? <a href="">Registre-se</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
        function handleInputChange(input) {
            const label = input.nextElementSibling;
            if (input.value.trim() !== '') {
                label.style.transform = 'translateY(-20px)';
            } else {
                label.style.transform = 'translateY(0)';
            }
        }

        function handleInputFocus(input) {
            const label = input.nextElementSibling;
            updateLabelStyle(input, label);
        }

        function handleInputBlur(input) {
            const label = input.nextElementSibling;
            if (input.value.trim() === '') {
                label.style.transform = 'translateY(0)';
            }
        }

        function updateLabelStyle(input, label) {
            if (input.value.trim() !== '' || input === document.activeElement) {
                label.style.transform = 'translateY(-20px)';
            } else {
                label.style.transform = 'translateY(0)';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            const userInput = document.getElementById('user');
            const passInput = document.getElementById('pass');

            updateLabelStyle(userInput, userInput.nextElementSibling);
            updateLabelStyle(passInput, passInput.nextElementSibling);
        });
    </script>

</body>

</html>