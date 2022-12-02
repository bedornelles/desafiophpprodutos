<div id="divToPrint">
    <h1>Produto cadastrado:</h1>

    <table class="table table-striped">
        <tr>
            <th>Titulo:</th>
            <td>
                <?= $arrayProducts['name'] ?>
            </td>

        </tr>
        <tr>
            <th>Valor:</th>
            <td>
                <?= $arrayProducts['discription'] ?>
            </td>
        </tr>
        <tr>
            <th>Descrição:</th>
            <td>
                <?= $arrayProducts['category'] ?>
            </td>
        </tr>
        <tr>
            <th>Estoque:</th>
            <td>
                <?= $arrayProducts['value'] ?>
            </td>
        </tr>
        <tr>

    </table>
</div>