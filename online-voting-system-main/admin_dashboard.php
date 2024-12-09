<?php
session_start();

// Check if the admin is logged in; if not, redirect to the login page
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

// Include validation.php for displaying results or content
include('validation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid">
        <!-- Navigation Bar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#" style="color: white; font-weight: 600;">GO VOTE</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin_dashboard.php">Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="user_suggestion.php">Suggestions</a></li>
                        <li class="nav-item"><a class="nav-link" href="show_contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="user_details_year.php">Users</a></li>
                        <li class="nav-item"><a class="nav-link" href="user_cand_year.php">Candidates</a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Dashboard Content Section -->
        <section>
            <div class="container text-center my-5">
                <h1 class="display-4">Admin Dashboard</h1>
                <p class="lead">Manage users, candidates, and review suggestions seamlessly.</p>
                <hr class="my-4">
            </div>
        </section>

        <!-- Display Session Messages (if any) -->
        <div class="container mt-3">
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-<?php echo $_SESSION['message_type']; ?>" role="alert">
                    <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message'], $_SESSION['message_type']); 
                    ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- Include validation content -->
        <?php include('validation.php'); ?>
    </div>

    <!-- JavaScript Includes -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"></script>
</body>
</html>
