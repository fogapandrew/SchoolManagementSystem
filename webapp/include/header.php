<!-- header.html -->
<header>
    <nav>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li class="right"><a href="dashboard.php">DASHBOARD</a></li>
            <li class="right"><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
</header>

<style>
    header {
        background-color: black;
        color: #fff;
        padding: 25px;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: space-between; /* Align items horizontally with space between */
    }

    nav ul li {
        display: inline;
    }

    .right {
        margin-left: auto; /* Pushes the item to the right */
    }

    nav ul li a {
        color: #fff;
        text-decoration: none;
    }

    nav ul li a:hover {
        color: #3108e7;
    }
</style>
