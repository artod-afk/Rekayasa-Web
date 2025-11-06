<!DOCTYPE html>
<html>
<head>
    <title>Data Wisata</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            text-align: center;
            padding: px;
        }
        th {
            background-color: #d7d7d7ff;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Daftar Wisata</h2>

<table>
    <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
    </tr>

    <?php
    // Koneksi database
    $connect = mysqli_connect("localhost", "root", "", "json");

    // Query data
    $sql = "SELECT * FROM wisata";
    $result = mysqli_query($connect, $sql);

    // Tampilkan data ke tabel
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['Kota']."</td>";
        echo "<td>".$row['Landmark']."</td>";
        echo "<td>".$row['Tarif']."</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
