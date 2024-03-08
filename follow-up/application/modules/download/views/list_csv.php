<table>
    <thead>
        <?php
        foreach ($query as $p) {
            echo '<tr>';
            foreach ($p as $field => $col) {
                echo '<th>' . $field . '</th>';
            }
            echo '</tr>';
            break;
        }
        ?>
    </thead>
    <tbody>

        <?php
        $i = 1;
        foreach ($query as $p) {
            echo '<tr>';
            foreach ($p as $field) {
                echo '<td>' . $field . '</td>';
            }
            echo '</tr>';
            $i++;
        }
        ?>
    </tbody>
</table>
