@include('../templates/navbar')

<div class="header">
    <h1>Nous contacter !</h1>
</div>

<div class="contact-container">
    <form action="#">
        <div class="contact-form">
            <div class="form-column-left">
                <label for="nom">Nom</label>
                <input type="text" id="nom" name="nom" required>
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
                <label for="adresse">Adresse</label>
                <input type="text" id="adresse" name="adresse" required>
            </div>
            <div class="form-column-right">
                <label for="prenom">Prénom</label>
                <input type="text" id="prenom" name="prenom" required>
                <label for="telephone">Téléphone</label>
                <input type="tel" id="telephone" name="telephone" required>
                <label for="adresse_complement">Complément d'adresse</label>
                <input type="text" id="adresse_complement" name="adresse_complement">
            </div>
        </div>
        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>

    </form>
</div>

@include('../templates/footer')