
<?php
    include_once("header.php");

?>

<div class="container m-4">
    <form class="row g-3">
        <div class="col-md-8">
            <label for="inputNome" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputNome">
        </div>
        <div class="col-md-4">
            <label for="inputFone" class="form-label">Fone</label>
            <input type="text" class="form-control" id="inputFone">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>

</div>

<?php
    include_once("footer.php");

?>