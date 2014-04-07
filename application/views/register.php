<!doctype html>
<html>
<head>
    <link rel="stylesheet" href=<?=css_url("bootstrap.min");?>>
    <link rel="stylesheet" href=<?=css_url("signin");?>>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <form role="form" class="form-horizontal">

            <div class="form-group">
                <label for="conv">N°Convocation</label>
                <input type="text" class="form-control" id="conv" placeholder="Numéro de convocation">
            </div>

            <div class="form-group">
                <label for="cin">N°CIN</label>
                <input type="text" class="form-control" id="cin" placeholder="Numéro cin">
            </div>

            <div class="form-group">
                <label for="mail">Email</label>
                <input type="email" class="form-control" id="mail" placeholder="Entrer email">
            </div>

            <div class="form-group">
                <label for="tel">Téléphone</label>
                <input type="number" class="form-control" id="tel" placeholder="Numéro de téléphone">
            </div>

            <div class="form-group">
                <label>Adresse</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Enregistrer">
        </form>
    </div>
    <div class="col-md-4"></div>
</div>
</div>
<script type="text/javascript" src=<?=js_url("jquery");?>></script>
<script type="text/javascript" src=<?=js_url("bootstrap.min");?>></script>
</body>
</html>