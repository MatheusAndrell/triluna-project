<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="\css\app.css">
    <title>Triluna - Site</title>
</head>

<script src="https://kit.fontawesome.com/84534b9145.js" crossorigin="anonymous"></script>

<body>
    <div class="navbar">
        <div class="navbar-logo">
            <img src="logo.png" alt="Logo">
        </div>
        <div class="navbar-menu">
            <ul>
                <li><a href="/#services">Home</a></li>
                <li><a href="/#catalogo">Produtos</a></li>
                <li><a href="/#forma">Formas de Pagamento</a></li>
                <li><a href="/#about">Sobre Nós</a></li>
            </ul>
        </div>
    </div>
    <section class="product-section">
        <div class="product-container">
            <div class="product-image-container">
                <div class="product-image">
                    <div></div>
                </div>
                <div class="more-image">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div class="info-container">
                <div class="info-product">
                    <h2>Lorem ipsum dolor sit amet.</h2>
                    <h1>Lorem ipsum dolor sit.</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde quasi nam harum laborum atque vel
                        ad
                        odio rem fugiat beatae!</p>
                </div>
                <div class="payment-product">
                    <div class="price-and-discount">
                        <h2>R$ 000.00</h2>
                        <div class="desconto">
                            <h1>00%</h1>
                        </div>
                    </div>
                    <p>R$ 000.00</p>
                </div>
                <div class="button-product">
                    <div class="button-quanty">
                        <button class="quanty-btn decrease">-</button>
                        <input type="text" class="quanty" value="1">
                        <button class="quanty-btn increase">+</button>
                    </div>
                    <button class="button-primary ml"><i class="fa-solid fa-cart-shopping shopp"></i>Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
    </section>
</body>


<script>
    document.querySelector('.increase').addEventListener('click', function() {
        var quantyInput = document.querySelector('.quanty');
        var currentValue = parseInt(quantyInput.value, 10);
        quantyInput.value = isNaN(currentValue) ? 1 : currentValue + 1;
    });

    document.querySelector('.decrease').addEventListener('click', function() {
        var quantyInput = document.querySelector('.quanty');
        var currentValue = parseInt(quantyInput.value, 10);
        quantyInput.value = (isNaN(currentValue) || currentValue <= 1) ? 1 : currentValue - 1;
    });
</script>
