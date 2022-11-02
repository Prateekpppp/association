<?php 
    include('backend/db.php');
    $get = $_SERVER['REQUEST_URI'];
    $get = explode('/',$get);
    if(isset($get[3]))
    {
        $sql = "select * from members_detail where name LIKE '{$get[3]}%'";
        $result = $conn->query($sql);
        // echo $get[3];
        // var_dump($result); die();
    } else
    {
        $sql = "select * from members_detail";
        $result = $conn->query($sql);
    }
    
    ?>

<div class="h60 d-flex align-items-center justify-content-center position-relative bg-img"><div class="black-overlay"></div>
    <h1 class="mt-5 text-light position-relative">OUR MEMBERS</h1>
    <?php 
        // $functions = new Functions();
        // $functions->single_input('Search','member');
    ?>
</div>
<!-- <div class="d-flex align-items-center justify-content-center w-100 my-3 alphabet overflow-hidden">
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aA">A</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aB">B</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aC">C</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aD">D</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aE">E</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aF">F</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aG">G</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aH">H</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aI">I</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aJ">J</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aK">K</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aL">L</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aM">M</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aN">N</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aO">O</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aP">P</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aQ">Q</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aR">R</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aS">S</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aT">T</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aU">U</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aV">V</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aW">W</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aX">X</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aY">Y</a>
    <a class="fs-5 btn" value="" href="/<?=$main_url?>/members/aZ">Z</a>
</div> -->
<div class="container">
    <div class="row align-items-center justify-content-center mt-5">
        <div class="col-md-12"><h4 class="primary-color p-0 m-0 text-center text-capitalize">SEARCH BY ALPHABET</h4></div>
        <div class="col-md-12">
            <div class="row align-items-center justify-content-center my-3 alphabet">
                <a class="fs-5 btn" value="A" href="/<?=$main_url?>/members/a">A</a>
                <a class="fs-5 btn" value="B" href="/<?=$main_url?>/members/b">B</a>
                <a class="fs-5 btn" value="C" href="/<?=$main_url?>/members/c">C</a>
                <a class="fs-5 btn" value="D" href="/<?=$main_url?>/members/d">D</a>
                <a class="fs-5 btn" value="E" href="/<?=$main_url?>/members/e">E</a>
                <a class="fs-5 btn" value="F" href="/<?=$main_url?>/members/f">F</a>
                <a class="fs-5 btn" value="G" href="/<?=$main_url?>/members/g">G</a>
                <a class="fs-5 btn" value="H" href="/<?=$main_url?>/members/h">H</a>
                <a class="fs-5 btn" value="I" href="/<?=$main_url?>/members/i">I</a>
                <a class="fs-5 btn" value="J" href="/<?=$main_url?>/members/j">J</a>
                <a class="fs-5 btn" value="K" href="/<?=$main_url?>/members/k">K</a>
                <a class="fs-5 btn" value="L" href="/<?=$main_url?>/members/l">L</a>
                <a class="fs-5 btn" value="M" href="/<?=$main_url?>/members/m">M</a>
                <a class="fs-5 btn" value="N" href="/<?=$main_url?>/members/n">N</a>
                <a class="fs-5 btn" value="O" href="/<?=$main_url?>/members/o">O</a>
                <a class="fs-5 btn" value="P" href="/<?=$main_url?>/members/p">P</a>
                <a class="fs-5 btn" value="Q" href="/<?=$main_url?>/members/k">Q</a>
                <a class="fs-5 btn" value="R" href="/<?=$main_url?>/members/r">R</a>
                <a class="fs-5 btn" value="S" href="/<?=$main_url?>/members/s">S</a>
                <a class="fs-5 btn" value="T" href="/<?=$main_url?>/members/t">T</a>
                <a class="fs-5 btn" value="U" href="/<?=$main_url?>/members/u">U</a>
                <a class="fs-5 btn" value="V" href="/<?=$main_url?>/members/v">V</a>
                <a class="fs-5 btn" value="W" href="/<?=$main_url?>/members/w">W</a>
                <a class="fs-5 btn" value="X" href="/<?=$main_url?>/members/x">X</a>
                <a class="fs-5 btn" value="Y" href="/<?=$main_url?>/members/y">Y</a>
                <a class="fs-5 btn" value="Z" href="/<?=$main_url?>/members/z">Z</a>
            </div>
        </div>
    </div>
</div>
<div class="w-75 members overflow-auto d-flex flex-column align-items-center justify-content-evenly my-5 mx-auto">
    <div class="container h-100">
        <div class="row">
        <!-- <script>
            var ajax_data = '';
            var callconsole = (data)=>{
                console.log(data);
            }
            $.ajax({
                type: 'post',
                url: '<?=$ajax_url?>',
                data: <?=$input?>,
                success: (res)=> {
                    ajax_data = res;
                    console.log(ajax_data);
                }
            });
        </script> -->
        <?php 
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) { ?>
            <a href="/<?=$main_url?>/member_profile/<?=$row['name']?>" class="col-md-2 col-lg-2 col-sm-6">
                <div class="card mb-4 d-flex flex-column align-items-center justify-content-center position-relative overflow-hidden">
                    <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center bg-img" style="background-image:url('/<?=$main_url?>/assets/logo/<?=$row['logo']?>')">
                        <div class="black-overlay"></div>
                    </div>
                    <p class="text-light position-relative w-100 text-center p-2"><?=$row['name']?><br><?=$row['location']?><br><?=$row['phone']?></p>
                </div>
            </a>
        <?php 
             } }?>
        </div>
    </div>
</div>