<style>
    table
    {
        font-size:10px;
        overflow-x:scroll;
        overflow-y: scroll;

    }
    .fixed_header tbody{
        display:block;
        overflow:auto;
        height:300px;
        width: 100%;
    }
    .fixed_header thead tr{
        display:block;
    }
    .fixed_header thead {
        width: 100%;
    }
</style>


<table id='basic-datatable' cellspacing="0" border="0" class="table table-striped table-hover table-responsive " style="border-top:1px solid;border-bottom:1px solid;weight:200px">
    <thead>
        <?php
        foreach ($query as $p) {
            echo '<tr>';
            foreach ($p as $field => $col) {
                echo '<td class="fixed_header">' . $field . '</td>';
            }
            echo '</tr>';
            break;
        }
        ?>
    </thead>
    <tbody >
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
