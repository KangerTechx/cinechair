

<section class="mt-5">
        <div class="d-flex flex-wrap">
            <div class="col-12 col-lg-5 offset-1 mt-5">
                <h1 class="display-4">Cinechair</h1>
            </div>
            <div class="form container col-12 col-lg-5 mt-5">
                <div class="row">
                    <h2 class=" my-4 titleCustom">Se connecter</h2>
                </div>
                <div class="form-container">
                    <form action="src/login.php" method="post" class="col-12 col-md-10">
                        <div class="form-group formCustom mb-3">
                            <input type="email" name="email" id="email" required>
                            <label for="email" class="label">
                                <span class="labelContent">E-mail</span>
                            </label>
                        </div>
                        <div class="form-group formCustom mb-3">
                            <div class="eyes">
                                <i class="bi bi-eye-fill" id="seeText" onclick="seeMdp()"></i>
                                <i class="bi bi-eye-slash-fill lost" id="seePass" onclick="seeMdp()"></i>
                            </div>
                            <input type="password" name="password" id="password" required>
                            <label for="password" class="label">
                                <span class="labelContent">Password</span>
                            </label>
                        </div>
                        <button type="submit" class="btn">Connexion</button>
                    </form>
                    <p class="mt-5"><a href="?">Mot de passe oublié ?</a></p>
                    <p class="mt-2">Pas encore de compte ? <a href="?page=register"> S'enregistrer</a></p>
                </div>
            </div>

        </div>
</section>