            <div class="p-3">
                <div class="underline">Länge/n:</div>
                <div>
                    <?php
                    if (count($data->spec->lengths) > 1) {

                        foreach ($data->spec->lengths as $key => $item) {
                            echo $item;
                            echo $key !== count($data->spec->lengths) - 1 ? ', ' : ' ';
                        }
                    } else {
                        echo $data->spec->lengths;
                    }
                    ?>
                    (<a class="inline-link" href="/fabrikationsservice-holzarbeitsplatten-nach-mass" target="_blank">kundenspezifische Längen</a> sind ebenfalls möglich)
                </div>
            </div>
            <div class="p-3">
                <div class="underline">Stärke/n:</div>
                <div>
                    <?php
                    if (count($data->spec->thicknesses) > 1) {
                        foreach ($data->spec->thicknesses as $key => $item) {
                            if ($item !== '60mm') {
                                echo '<span class="inline-link" data-scroll="#sizes-and-prices" data-filter-call="' . $item . '">';
                            } else {
                                echo '<span class="inline-link" data-scroll="#sizes-and-prices" data-filter-call="all">';
                            }
                            echo $item;
                            echo $key !== count($data->spec->thicknesses) - 1 ? ',</span> ' : '</span>';
                        }
                    } else {
                        echo $data->spec->thicknesses;
                    }
                    ?>
                </div>
            </div>
            <div class="p-3">
                <div class="underline">Tiefe/n:</div>
                <div>
                    <?php
                    if (count($data->spec->widths) > 1) {
                        foreach ($data->spec->widths as $key => $item) {
                            echo $item;
                            echo $key !== count($data->spec->widths) - 1 ? ', ' : ' ';
                        }
                    } else {
                        echo $data->spec->widths;
                    }
                    ?>
                    (<a class="inline-link" href="/fabrikationsservice-holzarbeitsplatten-nach-mass" target="_blank">kundenspezifische Tiefen</a> sind ebenfalls möglich)</div>
            </div>
            <div class="p-3">
                <div class="underline">Material:</div>
                <div><?php echo $data->spec->material; ?></div>
            </div>
            <div class="p-3">
                <div class="underline">Holz:</div>
                <div><?php echo $data->spec->timber; ?></div>
            </div>
            <div class="p-3">
                <div class="underline">Finish:</div>
                <div><?php echo $data->spec->finish; ?></div>
            </div>
            <div class="p-3">
                <div class="underline">Kantenprofil:</div>
                <div><?php echo $data->spec->edge; ?></div>
            </div>
            <div class="p-3">
                <div class="underline">Konstruktion:</div>
                <div><?php echo $data->spec->construction; ?></div>
            </div>
            <div class="p-3">
                <div class="underline">Lamellenbreite:</div>
                <div><?php echo $data->spec->staveWidth; ?></div>
            </div>
            <div class="p-3">
                <div class="underline">Gewicht:</div>
                <div><?php echo $data->spec->weight; ?></div>
            </div>