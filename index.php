<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Youcode sondage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<div class="loading">Loading&#8230;</div>
    <?php if(!isset($_COOKIE['voted'])){ ?>
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-9 col-xl-8">
                <h1>Sondage <span style="color: #273d90;"><strong>Youcode</strong><br></span>&nbsp;<span style="color:#f99419;">Talent</span></h1>
                <p><br><strong>Nous avons besoin de votre aide pour choisir notre logo</strong>, s'il vous plaît choisissez une de ces propositions de logo que vous trouvez bon pour notre prochain projet<br></p>
            </div>
        </div><small><strong><em>Merci</em></strong></small></div>
    <hr>
    <div class="container">
        <div class="row">
            <form action="" method="post" class="col-12">
                <div class="form-row">
                    <div class="col col-md-4">
                        <div class="form-group">
                            <label for="first-name">Prénom (optionnel):</label>
                            <input placeholder="Votre prénom..." name="firstname" type="text" class="form-control input-lg" id="first-name">
                            <small class="text-danger validation-msg"></small>
                        </div>
                    </div>
                    <div class="col col-md-4">
                    <div class="form-group">
                            <label for="last-name">Nom (optionnel):</label>
                            <input placeholder="Votre nom..." name="lastname" type="text" class="form-control input-lg" id="last-name">
                            <small class="text-danger validation-msg"></small>
                        </div>
                    </div>
                    <div class="col col-md-4">
                    <div class="form-group">
                            <label for="email">Email(<span style="color:red;">obligatoire</span>):</label>
                            <input placeholder="Votre email..." required="true" name="email" type="email" class="form-control input-lg" id="email">
                            <small class="text-danger validation-msg"></small>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container logos-box" id="vote-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <h2><strong>première proposition</strong></h2>
                <div class="logo-card"><span class="logo-number">1</span><img class="rounded img-fluid shadow thumbnail" src="assets/img/1.jpg"></div><button class="btn btn-primary btn-block btn-lg shadow vote-btn" id="logo1" type="button">Vote</button></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <h2><strong>deuxième proposition</strong></h2>
                <div class="logo-card"><span class="logo-number">2</span><img class="rounded img-fluid shadow thumbnail" src="assets/img/2.jpg"></div><button class="btn btn-primary btn-block btn-lg shadow vote-btn" id="logo2" type="button">Vote</button></div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <h2><strong>troisième proposition</strong></h2>
                <div class="logo-card"><span class="logo-number">3</span><img class="rounded img-fluid shadow thumbnail" src="assets/img/3.jpg"></div><button class="btn btn-primary btn-block btn-lg shadow vote-btn" id="logo3" type="button">Vote</button></div>
        </div>
    </div>
    <?php }else{ ?>
        <div class="container">
            <div class="row justify-content-center align-items-center" style="height: 99vh;">
                <div class="col">
                    <div class="jumbotron text-center">
                        <h1><i class="fas fa-check" style="color: #273d90;margin-right: 15px;"></i>Votre vote a été enregistré</h1>
                        <p>Merci pour votre collaboration</p><i class="far fa-handshake" style="font-size: 105px;color: #273d90;"></i></div>
                </div>
            </div>
        </div>
    <?php } ?>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>