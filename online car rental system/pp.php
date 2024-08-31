<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pp.css">
    <title>Admin Dashboard</title>
    <style>
        /* Add CSS styles for left menu, iframe, and other styles as needed */
        .left-menu {
            background-color: #333;
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            overflow-y: auto;
            transition: width 0.3s ease;
            color: #fff;
            padding: 20px;
        }

        .left-menu h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .iframe-container {
            position: absolute;
            top: 0;
            left: 250px; /* Width of the left menu */
            width: calc(100% - 250px);
            height: 100%;
            overflow: hidden;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
    </style>
</head>
<body>
    <nav class="left-menu">
        <h1>EMPLOYEE DASHBOARD</h1>
        <ul>
            <li><a href="admin1.php" target="iframe-container">Booking</a></li>
            <li><a href="manage.php" target="iframe-container">Manage</a></li>
            <li><a href="admin.php" target="iframe-container">upload</a></li>
            <li><a href="registered.php" target="iframe-container">registered user</a></li>
            
            
           
            
            
        </ul>
    </nav>

    <div class="iframe-container">
        <iframe name="iframe-container" src="default.php" frameborder="0"></iframe>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const menuToggle = document.querySelector(".menu-toggle");
            const leftMenu = document.querySelector(".left-menu");
            const iframeContainer = document.querySelector(".iframe-container");

            menuToggle.addEventListener("click", function () {
                leftMenu.classList.toggle("menu-collapsed");
                iframeContainer.style.left = leftMenu.classList.contains("menu-collapsed") ? '60px' : '250px';
            });
        });
    </script>
</body>
</html>
