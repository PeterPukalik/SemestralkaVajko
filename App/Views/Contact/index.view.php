<?php /** @var Array $data */ ?>
<head>
    <title>DrevodomySlovakia - Kontakt</title>
    <script src="js/myScript.js"></script>
</head>
<div class="container py-4">
    <h1>Kontaktuje nas</h1>
    <form id="contactForm" name="contactForm" action="" method="post" onsubmit="return validateContactForm()" action="?c=contact">
        <div class="mb-3">
            <label class="form-label" for="name">Meno</label>
            <input class="form-control" id="name" type="text" placeholder="Meno">
        </div>
        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="emailAddress">Email</label>
            <input class="form-control" id="emailAddress" type="email" placeholder="Email">
        </div>

        <div class="mb-3">
            <label class="form-label" for="message">Sprava</label>
            <textarea class="form-control" id="message" placeholder="Sprava"  ></textarea>
        </div>
        <!-- Form submit button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
    <div id="map-container" class="map-container" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2601.1720045911125!2d18.784388315656024!3d49.31102617933433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471443487cd09633%3A0x9153cfe81d537cf8!2sDREVODOMY%20Slovakia%2C%20s.r.o.!5e0!3m2!1sen!2ssk!4v1666009700175!5m2!1sen!2ssk"
                allowfullscreen></iframe>
    </div>
</div>

