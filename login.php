<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <title>Login Page</title>
    <style>
        body {
            background-color: #212529; 
            color: #f8f9fa; 
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: linear-gradient(135deg, #1a1e23 0%, #2c313a 100%);
            font-family: 'Poppins', sans-serif; /* เพิ่ม font family */
        }

        .login-container {
            background-color: rgba(52, 58, 64, 0.7) !important; 
            color: #f8f9fa; 
            border-radius: 15px; 
            padding: 2.5rem !important; 
            box-shadow: 
                0 15px 40px rgba(0, 0, 0, 0.6), 
                0 0 20px rgba(0, 0, 0, 0.4);   
            backdrop-filter: blur(10px); 
            -webkit-backdrop-filter: blur(10px); 
            border: 1px solid rgba(255, 255, 255, 0.1); 

            /* เพิ่ม Animation CSS */
            opacity: 0; /* เริ่มต้นด้วยความโปร่งใส 0 */
            transform: scale(0.9); /* เริ่มต้นด้วยขนาดที่เล็กลง */
        }

        /* Keyframes สำหรับ Animation */
        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .login-container.animate-in {
            animation: fadeInScale 0.7s ease-out forwards;
        }
        
        .login-container h3 {
            color: #ffffff; 
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3); 
        }

        .form-floating input {
            background-color: rgba(73, 80, 87, 0.7) !important; 
            color: #f8f9fa !important; 
            border-color: rgba(108, 117, 125, 0.3) !important; 
            border-radius: 8px; 
        }

        .form-floating label {
            color: #adb5bd !important; 
        }
       
        .form-floating input:focus {
            background-color: rgba(73, 80, 87, 0.9) !important; 
            color: #f8f9fa !important;
            border-color: #0d6efd !important; 
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.35) !important; 
        }

        .btn-primary {
            background-color: #0d6efd !important; 
            border-color: #0d6efd !important;
            border-radius: 8px; 
            transition: all 0.3s ease; 
            box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3); 
        }
        .btn-primary:hover {
            background-color: #0b5ed7 !important; 
            border-color: #0b5ed7 !important;
            transform: translateY(-2px); 
            box-shadow: 0 8px 20px rgba(13, 110, 253, 0.4);
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-xl-4">
                <div class="login-container p-4"> 
                    <h3 class="text-center mb-4" style="font-size: 4rem;"><i class="bi bi-people-fill"></i></h3>
                    <form action="check_login.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loginContainer = document.querySelector('.login-container');
            if (loginContainer) {
                loginContainer.classList.add('animate-in');
            }
        });
    </script>
</body>

</html>