<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffffa4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
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

        input[type="date"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color:  #3108e7;
            width: 140px;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: black;
        }
    </style>
</head>

<body>
<?php include 'include/header.php'; ?>  
    <div class="container">
        <h2>Enrollment Form</h2>
        <form action="submit.php" method="post">
            <label for="enroll_date">Enrollment Date:</label>
            <input type="date" id="enroll_date" name="enroll_date" required>

            <label for="complete_date">Completion Date:</label>
            <input type="date" id="complete_date" name="complete_date" required>

            <label for="R_Numbre">Registration Number :</label>
            <input type="text" id="R_Numbre" name="R_Numbre" required>

            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>

            <label for="payment_status">Payment Status:</label>
            <input type="text" id="payment_status" name="payment_status" required>

            <input type="submit" value="Submit">
        </form>
    </div>
    <br>
<br>
<br>
<br>
<br>
<br>
 <?php include 'include/footer.php'; ?>  
</body>

</html>