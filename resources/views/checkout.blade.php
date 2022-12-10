<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources\css\sass\layout\_checkout.scss">
</head>

<body>
    <x-layout>
        <div class="checkout-body">
            <div class="checkout-container">
                <h1 class="checkout-title">Checkout</h1>
                <h2 class="checkout-subtitle">Payment Information</h2>
                <form class="checkoutform" id="checkoutform" action="" method="POST">
                    <div class="checkoutform-group">
                        <label for="cardholder">Cardholder name</label>
                        <input type="text" name="cardholder" id="cardholder" class="form-control checkoutform__cardholder">
                    </div>
                    <div class="checkoutform-group">
                        <label for="cardnumber">Card Number</label>
                        <input require type="text" name="cardnumber" id="cardnumber" class="form-control checkoutform__cardnumber" title="son 16 digitos">
                    </div>
                    <div class="checkoutform-group">
                        <label for="card">Card Number</label>
                        <input type="text" name="card" id="card" class="form-control checkoutform__cardnumber">
                    </div>
                    <div>
                            <button class="button"></button>
                    </div>
                </form>
            </div>
        </div>
    </x-layout>
</body>

</html>