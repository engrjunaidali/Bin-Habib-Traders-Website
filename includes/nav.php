
<ul class="navbar-nav ms-auto smooth-scroll">
    <?php
        foreach ($navItems as $item){
            // echo "  <li class='nav-item active px-3'>
            //             <a class='nav-link' href=\"$item[slug]\">$item[title]</a>
            //         </li>";

            echo "  <li class='nav-item'>
                        <a href=\"$item[slug]\" class='nav-link'>$item[title]</a>
                    </li>";
        }
    ?>

                    



    <!-- <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
    </li> -->
</ul>
