<?php
        // put your code here
        require_once 'inc/header.php';
?>
<div class="panel panel-default" align="center">
    <div class="panel-heading"><h1>Registro</h1></div>
  <div class="panel-body" align="center">
    <table class="table table-bordered" >
        <tr>
            <td><h4>Rut:</h4></td>
            <td><input type="text" class="form-control"/></td>
        </tr>
        <tr>
            <td><h4>Nombre: </h4></td>
            <td><input type="text" class="form-control"/></td>
        </tr>
        <tr>
            <td><h4>Apellidos: </h4></td>
            <td><input type="text" class="form-control"/></td>
        </tr>
        <tr>
            <td><h4>Curso:</h4></td>
            <td><input type="text" class="form-control"/></td>
        </tr>
        <tr>
            <td><h4>Edad:</h4></td>
            <td><input type="number" class="form-control"/></td>
        </tr>
        <tr>
            <td><h4>Intereses: </h4></td>
            <td>
                <div class="checkbox">
                <table>
                    <tr>
                        <td><label><input type="checkbox" name="1" value="infantil">Infantil &nbsp;</td></label>
                        <td><label><input type="checkbox" name="2" value="ficcion">Ficción &nbsp;</td></label>
                        <td><label><input type="checkbox" name="2" value="ficcion">Thriller &nbsp;</td></label>
                    </tr>
                </table>
                </div>
            </td>
        </tr>
    </table>
  </div>
</div>
<?php
        // put your code here
        require_once 'inc/footer.php';
?>
