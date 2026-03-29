<?php
session_start();
$name = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : "Student";
$initial = strtoupper(substr($name, 0, 1));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Right Panel</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            margin: 10px;
        }

        .profile-box{
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
        }

        .profile-letter{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: #007bff;
            color: white;
            font-size: 32px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: auto;
        }

        .name{
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .role{
            font-size: 14px;
            color: #666;
        }

        .edit-btn{
            margin-top: 10px;
            padding: 6px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-btn:hover{
            background-color: #0056b3;
        }

        .info-box{
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
        }

        .info-title{
            font-weight: bold;
            margin-bottom: 10px;
        }

        ul{
            padding-left: 20px;
        }

        li{
            margin-bottom: 6px;
        }
    </style>
</head>

<body>

    <div class="profile-box">
        <div class="profile-letter"><?php echo $initial; ?></div>
        <div class="name"><?php echo htmlspecialchars($name); ?></div>
        <div class="role">B.Tech Student</div>
        <button class="edit-btn">Edit Profile</button>
    </div>

    <div class="info-box">
        <div class="info-title">Quick Actions</div>
        <ul>
            <li>My Applications</li>
            <li>Saved Internships</li>
            <li>Certificates</li>
            <li>
                <a href="logout.php" target="_top">Logout</a>
            </li>
        </ul>
    </div>

    <div class="info-box">
        <div class="info-title">Notifications</div>
        <ul>
            <li>AI/ML Intern: Shortlisted</li>
            <li>Web Dev Intern: Applied</li>
            <li>New internships available</li>
        </ul>
    </div>

    <div class="info-box">
        <div class="info-title">Application Status</div>
        <ul>
            <li>Applied: 5</li>
            <li>Shortlisted: 2</li>
            <li>Rejected: 1</li>
        </ul>
    </div>

</body>
</html>
