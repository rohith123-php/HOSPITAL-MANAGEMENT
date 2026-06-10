<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">🏥 Patient Portal</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../index.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="title-gradient">Welcome to your Dashboard</h2>
                <p class="text-muted">Manage your health and appointments.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Book Appointment</h5>
                        <p class="text-muted small">Schedule a visit with a doctor</p>
                        <button class="btn btn-info text-white w-100 btn-glow">Book Now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">My Prescriptions</h5>
                        <p class="text-muted small">View your digital prescriptions</p>
                        <button class="btn btn-outline-info w-100">View History</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0 mb-4">
                    <div class="card-body text-center">
                        <h5 class="fw-bold">Medical Reports</h5>
                        <p class="text-muted small">Download your lab reports</p>
                        <button class="btn btn-outline-info w-100">Download</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
