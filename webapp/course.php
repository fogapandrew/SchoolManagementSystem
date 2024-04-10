<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Course Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1000px;
            height : 2200px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffffa4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            resize: vertical;
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
            background-color:grey;
        }
        h3{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 20px;
        }
          /* Define styles for list items */
        ul {
            padding: 0;
        }

        .List {
            color: #00f;
            position: relative; /* Positioning context for ::before */
            padding-left: 20px; /* Space for the custom bullet */
            line-height: 1.5; /* Adjust line height */
            cursor: pointer;
            transition: color 0.3s;
            text-decoration: underline;
        }

        /* Custom bullet point */
        .List::before {
            content: "\25BA"; /* Bullet character */
            position: absolute;
            left: 0;
            color: #00f; /* Light blue color */
        }

        /* Change color on hover */
        .List:hover {
            color: yellow;
        }  /* Yellow color on hover */

        .DSPS, .IBT , .CS{
            max-width: 800px;
            height : 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffffa4;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
            /* Style to hide row lines */
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    }

    /* Style for table rows */
    tr {
        background-color: #f0f8ff; /* Very light blue */
        transition: background-color 0.3s; /* Smooth transition */
    }

    /* Hover effect */
    tr:hover {
        background-color: #add8e6; /* Light blue on hover */
    }

    /* Style for table cells */
    td {
        padding: 8px;
        border: none; /* No cell borders */
    }
      /* Style for button */
  #submitBtn {
    margin-top: 10px;
    padding: 8px 16px;
    background-color: blue;
    color: white;
    border: none;
    cursor: pointer;
  }

  #submitBtn:hover {
    background-color: #45a049;
  }
    /* Style for checkbox */
  input[type="checkbox"] {
    width: 14px;
    height: 14px;
    margin: 0;
    padding: 0;
  }

    </style>
</head>

<body>
    <?php include 'include/header.php'; ?>
    
    <div class="container">
        <h3>CHOOSE YOUR PROGRAMME</h3>
    <ul>
        <li onclick="scrollToDiv('section1')" class="List">Data Science Protection and security</li>
        <li onclick="scrollToDiv('section2')" class="List">Internation Business and Trade</li>
        <li onclick="scrollToDiv('section3')" class="List">Conputer Science</li>
    </ul>
        <div class= "DSPS" id = "section1">
            <table>
            <thead>
                <tr>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Description</th>
                <th>Credits</th>
                </tr>
            </thead>
            <tbody>
                            <!-- 10 rows -->
                <tr><td><input type="checkbox" name="row1"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row2"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row3"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row4"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row5"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row6"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row7"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row8"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row9"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row10"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row8"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row9"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row10"></td><td></td><td></td><td></td><td></td></tr>
            </tbody>
            </table>
            <button id="submitBtn" onclick="submitData()">Submit Selected Data</button>
        </div>
        <br>
        <br>
        <br>

        <div  class= "IBT" id = "section2">
             <table>
            <thead>
                <tr>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Description</th>
                <th>Credits</th>
                </tr>
            </thead>
            <tbody>
                            <!-- 10 rows -->
                <tr><td><input type="checkbox" name="row1"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row2"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row3"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row4"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row5"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row6"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row7"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row8"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row9"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row10"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row8"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row9"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row10"></td><td></td><td></td><td></td><td></td></tr>
            </tbody>
            </table>
            <button id="submitBtn" onclick="submitData()">Submit Selected Data</button>

        </div>
        <br>
        <br>
        <br>

        <div class= "CS" id="section3">
             <table>
            <thead>
                <tr>
                <th>Course Name</th>
                <th>Course Code</th>
                <th>Course Description</th>
                <th>Credits</th>
                </tr>
            </thead>
            <tbody>
                            <!-- 10 rows -->
                <tr><td><input type="checkbox" name="row1"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row2"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row3"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row4"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row5"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row6"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row7"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row8"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row9"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row10"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row8"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row9"></td><td></td><td></td><td></td><td></td></tr>
                <tr><td><input type="checkbox" name="row10"></td><td></td><td></td><td></td><td></td></tr>
            </tbody>
            </table>
            <button id="submitBtn" onclick="submitData()">Submit Selected Data</button>

        </div>
    </div>
    <?php include 'include/footer.php'; ?>
    <script>
    function scrollToDiv(id) {
    var element = document.getElementById(id);
    if (element) {
        element.scrollIntoView({ behavior: 'smooth' });
    }
    }
</script>
</body>
</html>