<?php
if (isset($_POST['save'])) {
    include('config.php');
    $teacher = $_POST['teacher'];
    $hour = $_POST['hour'];

    $sql = "INSERT INTO teacher (teacher, hour) VALUES ('$teacher', '$hour')";
    if (mysqli_query($config, $sql)) {
        echo '<script>alert("Data Berhasil disimpan!"); window.location.href="?m=subject&s=view"</script>';
    } else {
        echo '<script>alert("Data Gagal disimpan!"); window.location.href="?m=subject&s=add"</script>';
    }
} else {
    echo '<script>window.history.back()</script>';
}