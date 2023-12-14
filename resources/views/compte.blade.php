@include('../templates/navbar')

<div class="header">
    <h1>Connectez-vous</h1>
</div>

<div class="container">
    <form action="#">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
        <p>Mot de passe oublié?</p>
        <input type="submit" value="Se connecter">
    </form>
    <p> Créer un compte</p>
</div>

@include('../templates/footer')