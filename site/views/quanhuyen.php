<option value="">--Chọn Quận/Huyện--</option>
<?php
include "connection.php";
$sql = "SELECT * from quanhuyen where matp = " . $_POST["tinhthanhid"];
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    echo '<option value="' . $row["maqh"] . '">' . $row["name"] . '</option>';
}
?>
