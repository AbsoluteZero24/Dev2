
<div class="col-md-12">
    <div class="col-md-8">
        <div class="card card-plain">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
            <h4 class="card-title">Table on Plain Background</h4>
            <p class="category">Here is a subtitle for this table</p>
            <div class="card-content">
                <table class="table table-hover table-responsive">
                    <thead>
                        <th>No</th>
                        <th>Jam</th>
                        <th>Nama</th>
                        <th>PIC</th>
                        <th>Tempat</th>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($data as $p) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $p->jam_mulai; ?></td>
                                <td><?php echo $p->nm_kegiatan; ?></td>
                                <td>$36,738</td>
                                <td><?php echo $p->tmp_kegiatan; ?></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-header-icon" data-background-color="rose">
                <i class="material-icons">assignment</i>
            </div>
            <div class="card-content table-full-width">
                <h4 class="card-title">Regular Table with Colors</h4>
                <table class="table table-hover table-responsive">
                    <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Salary</th>
                    <th>Country</th>
                    <th>City</th>
                    </thead>
                    <tbody>
                        <tr class="success">
                            <td>1</td>
                            <td>Dakota Rice (Success)</td>
                            <td>$36,738</td>
                            <td>Niger</td>
                            <td>Oud-Turnhout</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Minerva Hooper</td>
                            <td>$23,789</td>
                            <td>Curaçao</td>
                            <td>Sinaai-Waas</td>
                        </tr>
                        <tr class="info">
                            <td>3</td>
                            <td>Sage Rodriguez (Info)</td>
                            <td>$56,142</td>
                            <td>Netherlands</td>
                            <td>Baileux</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Philip Chaney</td>
                            <td>$38,735</td>
                            <td>Korea, South</td>
                            <td>Overland Park</td>
                        </tr>
                        <tr class="danger">
                            <td>5</td>
                            <td>Doris Greene (Danger)</td>
                            <td>$63,542</td>
                            <td>Malawi</td>
                            <td>Feldkirchen in Kärnten</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Mason Porter</td>
                            <td>$78,615</td>
                            <td>Chile</td>
                            <td>Gloucester</td>
                        </tr>
                        <tr class="warning">
                            <td>7</td>
                            <td>Mike Chaney (Warning)</td>
                            <td>$38,735</td>
                            <td>Romania</td>
                            <td>Bucharest</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>