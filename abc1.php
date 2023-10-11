<?php
// Lấy thông tin phiên bản GD
$gdInfo = gd_info();
echo "Phiên bản GD: " . $gdInfo['GD Version'];
