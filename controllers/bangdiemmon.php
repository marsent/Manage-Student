<?php
 function PrintTable($numcol15p,$numcol1t)
{
    $html = ' <thead class="thead-light">
<tr>
    <th scope="col">STT</th>
    <th scope="col">Mã học sinh</th>
    <th scope="col">Họ tên</th>';
    for ($i = 0; $i < $numcol15p; $i++) {
        $html .= '<th scope="col">Điểm 15p</th>';
    }
    for ($i = 0; $i < $numcol1t; $i++) {
        $html .= '<th scope="col">Điểm 1t</th>';
    }
    $html .= ' <th scope="col">Điểm trung bình</th></tr></thead>';
    echo $html;
}
