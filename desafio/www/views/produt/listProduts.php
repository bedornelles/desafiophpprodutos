<h1>Lista de produtos</h1>

<table class="table table-striped">
    <tr>
        <th>Título</th>
        <th>Nome</th>
    </tr>

    <?php
    foreach ($arrayProducts as $products) {
    ?>
        <tr>
            <td>
                <?=$products['name']?>
            </td>
            <td>
                <?=$products['name']?>
            </td>
            <td>
                <?=$products['name']?>
            </td>
            <td>
                <?=$products['name']?>
            </td>


        </tr>
    <?php
    }
    ?>
</table>