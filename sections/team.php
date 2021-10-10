<link rel="stylesheet" href="css/team.css">

<div class="container my-5" id="team">
    <div class="section-title text-center mt-5">
        <h1>Our Team</h1>
        <p>Greate things are never done by a one person. They are done by a team of people.</p>
    </div>


    <div class="row text-center my-2">
        <?php
        // define('TITLE','Home | AutoWash');
        include 'components/navbar.php';
        foreach($teamMembers as $member){;
    ?>
        <!-- Team item-->
        <div class="col-xl-3 col-md-3 col-sm-6 mb-5 px-7" >
            <div class="bg-white rounded shadow-sm py-5 px-4 h-100" id="teamItem">
                <img src="img/<?php echo $member['img'];?>" alt="<?php echo $member['name'];?>" width="100"
                    class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                <h5 class="mb-1"><?php echo $member['name'];?></h5>
                <span class="small text-uppercase text-muted"><?php echo $member['position'];?></span>
            </div>
        </div>

        <?php 
        };
    ?>
    </div>
</div>
</div>