<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <title> Collecte d'informations sur les champs aux alentours de KLouékanme </title>
</head>
<body>
    <div class="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul style="margin: auto;" class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./views/carte.html"> Voir la carte </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="container">
                <div class="row mt-5">
                    <h1 class="text-center">Collecte d'informations sur les champs aux alentours de KLouékanme</h1>
                </div>
            </div>
            <div class="row card p-3 mb-3">
                <form>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="area" class="form-label">Superficie du champ <span class="text-danger">*</span></label>
                            <input type="double" name="area" id="area" class="form-control" placeholder="100.0">
                            <span id="area_error" class="text-danger"></span>
                        </div>
                        <div class="col">
                            <label for="purchase_date" class="form-label">Date d'acquisition de la parcelle <span class="text-danger">*</span></label>
                            <input type="date" name="purchase_date" id="purchase_date" class="form-control">
                            <span id="purchase_date_error" class="text-danger"></span>
                        </div>
                        <div class="col">
                            <label for="dechifrage_date" class="form-label">Date de dernière défrichage du champs<span class="text-danger">*</span></label>
                            <input type="date" name="dechifrage_date" id="dechifrage_date" class="form-control">
                            <span id="dechifrage_date_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="form-label"> <i class="fa fa-map-marker" aria-hidden="true"></i> Coordonnées géographiques B1<span class="text-danger">*</span></label>
                        <div class="col">
                            <input type="double" name="longitude_b1" id="longitude_b1" class="form-control" placeholder="Longitude">
                            <span class="text-danger" id="longitude_b1_error"></span>
                        </div>
                        <div class="col">
                            <input type="double" name="latitude_b1" id="latitude_b1" class="form-control" placeholder="Latitude">
                            <span class="text-danger" id="latitude_b1_error"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="form-label"> <i class="fa fa-map-marker" aria-hidden="true"></i> Coordonnées géographiques B2<span class="text-danger">*</span></label>
                        <div class="col">
                            <input type="double" name="longitude_b2" id="longitude_b2" class="form-control" placeholder="Longitude">
                            <span class="text-danger" id="longitude_b2_error"></span>
                        </div>
                        <div class="col">
                            <input type="double" name="latitude_b2" id="latitude_b2" class="form-control" placeholder="Latitude">
                            <span class="text-danger" id="latitude_b2_error"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="form-label"> <i class="fa fa-map-marker" aria-hidden="true"></i> Coordonnées géographiques B3<span class="text-danger">*</span></label>
                        <div class="col">
                            <input type="double" name="longitude_b3" id="longitude_b3" class="form-control" placeholder="Longitude">
                            <span class="text-danger" id="longitude_b3_error"></span>
                        </div>
                        <div class="col">
                            <input type="double" name="latitude_b3" id="latitude_b3" class="form-control" placeholder="Latitude">
                            <span class="text-danger" id="latitude_b3_error"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="" class="form-label"> <i class="fa fa-map-marker" aria-hidden="true"></i> Coordonnées géographiques B4<span class="text-danger">*</span></label>
                        <div class="col">
                            <input type="double" name="longitude_b4" id="longitude_b4" class="form-control" placeholder="Longitude">
                            <span class="text-danger" id="longitude_b4_error"></span>
                        </div>
                        <div class="col">
                            <input type="double" name="latitude_b4" id="latitude_b4" class="form-control" placeholder="Latitude">
                            <span class="text-danger" id="latitude_b4_error"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="culture_type" class="text-center form-label">Type de cultures <span class="text-danger">*</span></label>
                            <select name="culture_type" id="culture_type" class="form-select" aria-label="Default select example">
                                <option selected disabled value="">Choisir la culture</option>
                                <option value="Céréales">Céréales</option>
                                <option value="Tubercules">Tubercules</option>
                                <option value="Légumes">Légumes</option>
                                <option value="Fruits">Fruits</option>
                                <option value="Fleurs">Fleurs</option>
                                <option value="Légumes secs">Légumes secs</option>
                            </select>
                            <span id="culture_type_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="lastname" class="form-label"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> Nom du propriétaire <span class="text-danger">*</span></label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Toto">
                            <span id="lastname_error" class="text-danger"></span>
                        </div>
                        <div class="col">
                            <label for="firstname" class="form-label"> <i class="fa fa-user-circle-o" aria-hidden="true"></i> Prénom(s) du propriétaire <span class="text-danger">*</span></label>
                            <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Toto">
                            <span id="firstname_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="telephone" class="form-label"> <i class="fa fa-mobile" aria-hidden="true"></i> Téléphone <span class="text-danger">*</span></label>
                            <input onkeyup="verifTelephone()" type="tel" name="telephone" id="telephone" class="form-control" placeholder="(229) XX-XX-XX-XX">
                            <span id="telephone_error" class="text-danger"></span>
                        </div>
                        <div class="col">
                            <label for="email" class="form-label"> <i class="fal fa-envelope"></i> Email du propriétaire <span class="text-danger">*</span></label>
                            <input onkeyup="verifEmail()" type="email" name="email" id="email" class="form-control" placeholder="toto@gmail.com" aria-label="First name">
                            <span id="email_error" class="text-danger"></span>
                        </div>

                        <div class="col">
                            <label for="address" class="form-label"> <i class="fa fa-map-marked" aria-hidden="true"></i> Adresse du propriétaire <span class="text-danger">*</span></label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Cotonou Carré 1296">
                            <span id="address_error" class="text-danger"></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="type" class="form-label">Type de titre de propriété <span class="text-danger">*</span></label>
                            <input type="text" name="type" id="type" class="form-control" placeholder="foncier">
                            <span id="type_error" class="text-danger"></span>
                        </div>
                        <div class="col">
                            <label for="picture" class="form-label"> <i class="fa fa-picture-o"></i> Photo du propriétaire <span class="text-danger">*</span></label>
                            <input type="file" name="picture" id="picture" class="form-control">
                            <span id="picture_error" class="text-danger"></span>
                        </div>

                        <div class="col">
                            <label for="area_picture" class="form-label"> <i class="fa fa-picture-o" aria-hidden="true"></i> Photographie aérienne de la parcelle <span class="text-danger">*</span></label>
                            <input type="file" name="area_picture" id="area_picture" class="form-control">
                            <span id="area_picture_error" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="locality" class="form-label"> Localité du champs <span class="text-danger">*</span></label>
                            <input type="text" name="locality" id="locality" class="form-control" placeholder="Localité...">
                            <span id="locality_error" class="text-danger"></span>
                        </div>
                        <div class="col">
                            <label for="limit" class="form-label"> Limitrophes du champs <span class="text-danger">*</span></label>
                            <input type="text" name="limit" id="limit" class="form-control" placeholder="Localité...">
                            <span id="limit_error" class="text-danger"></span>
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a id="submit" onclick="handleSubmit()" class="btn btn-lg btn-success"> Valider </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="./assets/js/jquery-3.2.1.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/1351.js"></script>
<script src="./assets/js/validate.js"></script>
</body>
</html>















