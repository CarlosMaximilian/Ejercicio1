<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources\css\sass\layout\_dream.scss">
</head>

<body>
    <x-layout>
        hola mundo
        <header class="hero-font">
            <!-- hero -->
            <section class="hero-capsule-izq">
                <div class="hero-info">
                    <h1>make yout reservation</h1>
                    <br>
                    <br>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.<br>
                        Quasi, quas? Deserunt odio debitis iste accusantium, <br>
                        quidem voluptates iusto vel labore quos architecto illum. <br>
                        Error temporibus assumenda dicta adipisci at voluptatum?
                    </p>
                    <br>
                    <button>Read more</button>
                </div>
            </section>
            <!-- form -->
            <section class="hero-capsule-der">
                <form action="/booking" method="POST" class="form"></form>
                @csrf
                <div class="title">
                    <h2> CREATE ACCOUNT</h2>
                </div>
                <br>

                <!-- info -->
                <div class="box">
                    <div class="name">
                        <input type="text" id="firstname" placeholder="first name">
                        <input type="text" id="lastname" placeholder="last name">
                    </div>
                    <input type="text" id="email" placeholder="email">
                    <input type="text" id="roomtype" placeholder="room type">
                    <select name="beds" id="box" class="box">
                        <option value="1">1 Bed</option>
                        <option value="2">2 Bed</option>
                        <option value="3">3 Bed</option>
                        <option value="4">4 Bed</option>
                    </select>
                    <div class="fecha">
                        <input type="date" id="fecha" placeholder="">
                        <input type="date" placeholder="">
                    </div>
                    <input type="number" name="number" maxlength="16" minlength="1">

                </div>
                <!-- button -->
                <div>
                    <button class="button">SING UP</button>
                </div>

                </form>
            </section>

        </header>
    </x-layout>
</body>

</html>