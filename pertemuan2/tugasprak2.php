<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

//alamat localhost untuk getwisata.php, ambil hasil eksport JSON
$send = curl("http://localhost/pertemuan2/getwisata.php");

//mengubah JSON menjadi array
$data = json_decode($send, TRUE);

// untuk mengubah tampilan berbentuk tabel
echo "<table border='1' cellspacing='0' cellpadding='8'>";
echo "<tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
      </tr>";

foreach($data as $row){
    echo "<tr>";
    echo "<td>".$row["kota"]."</td>";
    echo "<td>".$row["landmark"]."</td>";
    echo "<td>".$row["tarif"]."</td>";
    echo "</tr>";
}

echo "</table>";
?>