<?php
    // Check the request method
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get data from the form
        $name = isset($_POST['username']) ? $_POST['username'] : '';
        $pass = isset($_POST['password']) ? $_POST['password'] : '';

        // Include database connection
        include_once "database.php";

        // Prepare the SQL statement to prevent SQL injection
        $sql = "INSERT INTO kunci (username, password) VALUES (?, ?)";

        // Use prepared statement to execute the query
        $stmt = mysqli_prepare($konek, $sql);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, 'ss', $name, $pass);

        // Execute the query
        $save = mysqli_stmt_execute($stmt);

        // Check if the query was successful
        if ($save) {
            echo "<script>alert('Data Berhasil disimpan!'); window.location.assign('register.html');</script>";
        } else {
            // If failed, redirect to the registration page with an error message
            echo "<script>alert('Data Gagal Disimpan!'); window.location.assign('register.html');</script>";
        }

        // Close the statement
        mysqli_stmt_close($stmt);

        // Close the database connection
        mysqli_close($konek);
    }
?>