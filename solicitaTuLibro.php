<?php
    include_once 'inc/header.php';
?>
<div align="center">
    <form>
        <table>
            <tr>
                <td>Buscar por Nombre: &nbsp;</td>
                <td><input class="form-control" type="text" name="bLibro"><br></td>
            </tr>
            
            <tr>
                <td><br>Categoria: </td>
                <td><br>
                    <select class="form-control">
                        <option value="0">Seleccione</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><br><input type="submit" value="Buscar" class="btn btn-success"></td>
            </tr>
        </table>
    </form>
</div>

<?php
    include_once 'inc/footer.php';
?>
    