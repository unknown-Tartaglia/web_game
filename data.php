<?php
// 连接到数据库（使用适当的数据库连接代码）
$conn = new mysqli("localhost", "root", "password", "webgame");

// 检查连接是否成功

if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 查询数据库并获取数据
$sql = "SELECT * FROM info";
$result = $conn->query($sql);

// 将查询结果转换为关联数组并以JSON格式返回
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// 设置HTTP响应头为JSON格式
header('Content-Type: application/json');

// 输出JSON数据
echo json_encode($data);

// 关闭数据库连接
$conn->close();
?>