<x-layout>
    <div class="fondo_hotel">
        <div class="container">
            <h1>MAKE YOUR RESERVATION</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit dolores architecto, nemo minima
                reprehenderit delectus eaque at quam ut ipsum voluptatem, quidem quo ad libero, amet odio repellendus?
                Quod, nisi.</p>
            <button class="botonread">Read more...</button>
        </div>
        <div class="formulario">
            <h2>Hotel booking form</h2>

            <form class="checkoutformulario" action="/hotel" method="POST">
                @csrf
                <div class="group-form-firtname">
                    <label class="labelfirtname" for="firsname">Firstname</label>
                    <input require type="text" name="firtname" id="firsname" class="firsname">
                </div>
                <div class="group-form-lastname">
                    <label class="labellastname" for="lastname">Lastname</label>
                    <input require type="text" name="Lastname" id="Lastname" class="lastname">
                </div>
                <div class="group-form-email">
                    <label class="labelemail" for="firsname">Email</label>
                    <input require type="email" name="email" id="email" class="email1">
                </div>
                <div class="group-form-room">
                    <label class="booking-form__label" for="room">Room type</label>
                    <select name="beds" class="room">
                        <option value="1">1 Bed</option>
                        <option value="2">2 Bed</option>
                        <option value="3">3 Bed</option>
                        <option value="4">4 Bed</option>
                    </select>
                </div>
                <div class="name-group">
                    <div class="group-form-checkin">
                        <label class="booking-form__label" for="checkin">Checkin</label>
                        <input class="checkin" require type="date" name="checkin" id="checkin">
                    </div>

                    <div class="group-form-checkout">
                        <label class="labelout" for="checkout">Checkout</label>
                        <input class="checkout" require type="date" name="checkout" id="checkout">
                    </div>
                </div>

                <div class="group-form-guests">
                    <label class="labelguests" for="guests">Number of Guests</label>
                    <input require type="text" name="guests" id="guests" class="guests">

                    <div>
                        <button class="botonbook">Book now</button>
                    </div>

                    
            </form>
        </div>
    </div>
</x-layout>