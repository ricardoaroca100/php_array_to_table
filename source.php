<?php

function array_to_table($array) {

    $code = '';
    if (count($array) > 0) {
        $code = '<table class="table table-striped">
            <thead>
            <tr>
                <th>' . implode('</th><th>', array_keys(current($array))) . '</th>
            </tr>
            </thead>
            <tbody>';

            foreach ($array as $row){
                array_map('htmlentities', $row);
                $code .= '<tr>
                    <td>' . implode('</td><td>', $row) . '</td>
                </tr>';
            }

        $code .= '
                </tbody>
        </table>';
    }

    return $code;

}
