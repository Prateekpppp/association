<?php 
    $get = $_SERVER['REQUEST_URI'];
    $get = explode('/',$get);
    // echo $get[3]; die();
    include('backend/db.php');
    if(isset($get[3]))
    {
        $sql = "select * from members_detail where name='$get[3]'";
        $result = $conn->query($sql);
        // var_dump($result); die();
    } else
    {
        header("Location: /association/members");
    }
    
    if ($result->num_rows) {
        $r=1;
        while($row = $result->fetch_assoc()) { 
    ?>
<div class="h60 d-flex align-items-center justify-content-center position-relative bg-img">
    <div class="black-overlay"></div>
    <h1 class="mt-5 text-light position-relative"><?=$row['name']?></h1>
</div>
<div class="container">
    <div class="row position-relative align-items-center justify-content-evenly mt-5">
        <div class="col-sm-4">
        <p><?=$row['name']?></p>
        <p><?=$row['email']?></p>
        </div>
        <div class="col-sm-4">
        <p><?=$row['phone']?></p>
        <p><?=$row['website']?></p>
        </div>
    <div class="col-md-4 logo mlogo d-flex justify-content-center">
        <a href="javascript::void();" class="text-light position-relative">
            <img src="/association/assets/logo/<?=$row['logo']?>" alt="" class="rounded-4 bg-white">
        </a>
    </div>
    </div>
</div>
<div class="container h-100">
    <div class="row">
        <div class="col-md-8 d-flex flex-column py-5 my-md-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" style="text-align: justify;"><br>Home<br><?=$row['about']?></div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" style="text-align: justify;"><br>Profile<br><?=$row['about']?></div>
            </div>
        </div>
        <div class="col-md-4 pb-5 my-mb-5">
        <h2 class="mt-5 primary-color text-center">Contact us</h2>
            <?php
                include('includes/form.php');
            ?>  
        </div>
    </div>
</div>
        <?php 
            } }
        ?>