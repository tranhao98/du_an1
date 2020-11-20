<option value="">--Chọn Phường/Xã--</option>
<?php
include "connection.php";
$sql = "SELECT * from xaphuongthitran where maqh = " . $_POST["quanhuyenid"];
$query = $conn->prepare($sql);
$query->execute();
$result = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
    echo '<option value="' . $row["xaid"] . '">' . $row["name"] . '</option>';
}
?>