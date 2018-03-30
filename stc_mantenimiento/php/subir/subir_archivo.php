<?php
copy($FILES['manual']['tmp_name'], $FILES['manual']['name']);

echo "archivo subido";

$nombre=$FILES['manual']['name'];

echo "<iframe src=\"$nombre\">";



?>