<div class="m-5">
    <table class="table table-striped">
        <thead>
        <tr class="thead-dark">
            <th scope="col">Vardas</th>
            <th scope="col">Pavardė</th>
            <th scope="col">Atlyginimas</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($con->query($sql) as $row) {
        echo '<tr scope="row">' . "\n";
        echo '<td>' . $row['name'] . "</td>\n";
        echo '<td>' . $row['surname'] . "</td>\n";
        echo '<td>' . $row['salary'] . "</td>\n";

        ?>
        </tr>
        <?php } ?>
        </tbody>
    </table>

    <hr>

</div>