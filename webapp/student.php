<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffffa4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3108e7;
            width: 140px;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color:black;
        }
    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>
        <div class="container">
            <h2>Student Registration Form</h2>
            <form action="submit.php" method="post">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
        
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
                
                        
                <label for="R_Numbre">Registration Number :</label>
                <input type="text" id="R_Numbre" name="R_Numbre" required>
        
                <label for="phone_number">Phone Number:</label>
                <input type="text" id="phone_number" name="phone_number">
        
                <label for="email_address">Email Address:</label>
                <input type="text" id="email_address" name="email_address">

                <label for="Country_of_residence">Country of residence </label>
                <select id="country" name="country">
                    <option value="">Select a country...</option>
                </select>
                <!-- Include the JavaScript file -->
                <script src="countries.js"></script>

                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" id="date_of_birth" name="date_of_birth" required>
        
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
        
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
        
                <input type="submit" value="Submit">
            </form>
        </div>
        <?php include 'include/footer.php'; ?>
</body>
</html>