<?php /** @var Array $data */ ?>
<div class="container py-4">
    <h1>Kontaktuje nas</h1>
    <!-- Bootstrap 5 starter form -->
    <form id="contactForm" data-sb-form-api-token="API_TOKEN">

        <!-- Name input -->
        <div class="mb-3">
            <label class="form-label" for="name">Meno</label>
            <input class="form-control" id="name" type="text" placeholder="Meno" data-sb-validations="required" >
            <div class="invalid-feedback" data-sb-feedback="name:required">Meno je nutne zadat.</div>
        </div>

        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email" data-sb-validations="required, email" >
            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address je nutne zadat.</div>
            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email nieje validna.</div>
        </div>

        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">Sprava</label>
            <textarea class="form-control" id="message" placeholder="Sprava" style="height: 10rem;" data-sb-validations="required"></textarea>
            <div class="invalid-feedback" data-sb-feedback="message:required">toto pole je nutne vyplnit.</div>
        </div>

        <!-- Form submissions success message -->
        <div class="d-none" id="submitSuccessMessage">
            <div class="text-center mb-3">Form submission successful!</div>
        </div>

        <!-- Form submissions error message -->
        <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">Error sending message!</div>
        </div>

        <!-- Form submit button -->
        <div class="d-grid">
            <button class="btn btn-primary btn-lg " id="submitButton" type="submit" >Submit</button><br>
        </div>

    </form>
    <div id="map-container" class="map-container" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.1720045911125!2d18.784388315656024!3d49.31102617933433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471443487cd09633%3A0x9153cfe81d537cf8!2sDREVODOMY%20Slovakia%2C%20s.r.o.!5e0!3m2!1sen!2ssk!4v1666009700175!5m2!1sen!2ssk"
                allowfullscreen></iframe>
    </div>
</div>

