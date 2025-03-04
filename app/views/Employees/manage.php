<div class="card mr-4 ml-4 mb-4">
    <div class="card-header">
        <a href="patients.php?patient_page=add">
            <button class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Add Patient</button>
        </a>
    </div>
    <div class="card-body">
        <div class="row mb-2">
            <div class="col-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text">Show</label>
                    </div>
                    <select class="custom-select">
                        <option selected>Choose...</option>
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="btn-group" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-sm btn-outline-success">CSV</button>
                    <button type="button" class="btn btn-sm btn-outline-success">Exel</button>
                    <button type="button" class="btn btn-sm btn-outline-success">Copy</button>
                    <button type="button" class="btn btn-sm btn-outline-success">PDF</button>
                    <button type="button" class="btn btn-sm btn-outline-success">Print</button>
                </div>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-sm" placeholder="Search ID No">
                    <div class="input-group-append">
                        <button class="btn btn-sm btn-success" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-sm table-bordered table-hover table-stripped" id="patients-table">
                <thead class="">
                    <tr class="">
                        <th>SL No</th>';
                        foreach ($columnsToSelect as $columns) {
                        # code...
                        echo '<th>'.ucfirst($columns).'</th>';
                        }
                        echo '
                    </tr>
                </thead>
                <tbody>';
                    for($items = 0; $items < count($items_to_display); $items++){

                        echo '<tr class = "main-row">
                                            <td class="text-center">
                                                <i class="fa fa-circle-plus"></i>
                                            </td>' ;
                        foreach(array_keys($items_to_display[$items]) as $key){
                        echo '<td>' .ucfirst($items_to_display[$items][$key]).'</td>';
                        }
                        echo '</tr>
                        <tr style="display:none" class="minor-row">';
                            $get_details_query = 'SELECT id_num, ip_number, op_num, sex, physical_address, date_in FROM patients WHERE id_num = ? AND first_name = ?';
                            $params = [$items_to_display[$items]['id_num'], $items_to_display[$items]['first_name']];
                            $single_patient_data = $database->select($get_details_query, $params);
                            foreach($single_patient_data as $data){

                            echo '<td colspan="8">
                                <ul class="list-group">';
                                    foreach(array_keys($data) as $key){

                                    echo '
                                    <li class="mt-1">
                                        <span class="font-weight-bold">'.ucfirst($key).':</span>
                                        <span>'.ucfirst($data[$key]).'</span>
                                    </li>
                                    ';
                                    }
                                    echo '
                                    <li>
                                        <span class="font-weight-bold">Action</span>
                                        <span>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="'.$_SERVER['PHP_SELF'].'?patient_page=edit&patient_id='.$data['id_num'].'" class="mx-2">
                                                    <button type="button" class="btn btn-sm btn-success me-1">
                                                        <i class="fa fa-pencil"></i> Edit
                                                    </button>
                                                </a>';

                                                if( $data['ip_number']){
                                                echo '';
                                                }else{
                                                echo '<a href="'.$_SERVER['PHP_SELF'].'?patient_page=admit&patient_id='.$data['id_num'].'" class="mx-1">
                                                    <button type="button" class="btn btn-sm btn-secondary">
                                                        <i class="fa fa-plus"></i> Admit
                                                    </button>
                                                </a>';
                                                }
                                                echo '
                                            </div>
                                        </span>
                                    </li>
                                </ul>
                            </td>';
                            }
                            echo '</tr>';
                        }
                        echo'</tbody>
            </table>
        </div>
        <nav class="float-right">
            <ul class="pagination">
                '; $page_range = 2;
                if($current_page > 1){
                echo '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?patient_page=view&page_number=1">
                        <<<< /a>
                </li>';
                // $previous_page = $current_page -1;
                // echo '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?patient_page=view&page_number='.$previous_page.'">
                        <<< /a>
                </li>';
                }

                for ($i = $current_page - $page_range ; $i < ($current_page + $page_range) + 1; $i++) {
                    if($i> 0 && ($i <= $number_of_pages)){
                        if($i===$current_page){
                        echo '<li class="page-item active"><a class="page-link" href="#">' .$i.'</a>
                        </li>';
                        }else{
                        echo '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?patient_page=view&page_number='.$i.'">'.$i.'</a></li>';
                        }
                        }
                        }
                        if($current_page != $number_of_pages){
                        $next_page = $current_page + 1;
                        //echo '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?patient_page=view&page_number='.$next_page.'"> >> </a></li>';
                        echo '<li class="page-item"><a class="page-link" href="'.$_SERVER['PHP_SELF'].'?patient_page=view&page_number='.$number_of_pages.'">>>></a></li>';
                        }
                        echo '
            </ul>
        </nav>
    </div>
</div>