<script>
	function modifier(id) {
		window.location.href = "?action=maj&id=" + id;
	}
	function supprimer(id) {
		window.location.href = "?action=sup&id=" + id;
	}
</script>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2 class="logo">Logo</h2>
        <nav class="navigation">
            <li><a href="#">Maison</a></li>
            <li><a href="#">Apropos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
            <button class="tape">Connexion</button>
        </nav>
    </header>
    <div class="formule">
        <span class="close">
             <ion-icon name="close"></ion-icon>
        </span>
        <div class="box">
            <h2>Connexion</h2>
            <form action="#">
                <div class="inpu">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" name="" id="" required>
                    <label for="">Email</label>
                </div>
                <div class="inpu">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="" id="" required>
                    <label for="">Password</label>
                </div>
                <div class="remeber">
                    <label> <input type="checkbox" name="" id="">Remember me</label>
                    <a href="#">Forget Password?</a>
                </div>
                <button type="submit" class="btn">Login</button>
                <div class="registre">
                    <p>Don't have an account? <a href="#" class="link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="bosse">
            <h2>Inscription</h2>
            <form action="#">
                <div class="inpu">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" name="" id="" required>
                    <label for="">Username</label>
                </div>
                <div class="inpu">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="" id="" required>
                    <label for="">Email</label>
                </div>
                <div class="inpu">
                    <span class="icon"><ion-icon name="lock"></ion-icon></span>
                    <input type="password" name="" id="" required>
                    <label for="">Password</label>
                </div>
                <div class="remeber">
                    <label> <input type="checkbox" name="" id="">I agree to the terms & condition</label>
                </div>
                <button type="submit" class="btn">Inscrire</button>
                <div class="registre">
                    <p>Already have an account ? <a href="#" class="linking">Connexion</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>