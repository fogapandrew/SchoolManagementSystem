<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<!-- footer.html -->
<footer>
    <div class="DataContainers">
        <div class="about">
            <h3>About Us</h3>
            <p>Your about us content goes here.</p>
        </div>
        <div class="social-links">
            <h3>Connect with Us</h3>
            <ul>
                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i> Twitter</a></li>
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
            </ul>
        </div>
    </div>
</footer>


<style>
    footer {
        background-color: black;
        color: #fff;
        padding: 20px;
    }

    footer .about,
    footer .social-links {
        width: 50%;
        display: inline-block;
    }

    footer h3 {
        color: #fff;
    }

    footer ul {
        list-style-type: none;
        padding: 0;
    }

    footer ul li {
        margin-bottom: 10px;
    }

    footer ul li a {
        color: #fff;
        text-decoration: none;
    }

    footer ul li a:hover {
        color:#3108e7;
    }
    .DataContainers{
        display: flex;
        justify-content: space-between;
    }
    .about, .social-links {
    padding: 10px;
}
.about {
    flex: 1;
    /* If you want the left div to take up more space, you can adjust the flex value */
}

.social-links {
    flex: 1;
    text-align: right;
}
</style>