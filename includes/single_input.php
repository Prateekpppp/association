
<form action="#" method="post" id="<?=$id?>" class="single_form mx-auto px-2 justify-content-center position-relative <?php
    if($addclass){
        echo $addclass;
    } else {
        echo 'w-50';
    }
?>">   
<div class="row">
    <div class="col-md-8 border border-light border-end-0">
        <input type="text" class="form-control text-light rounded-0 bg-transparent border-0 p-0 m-0" id="subscribe_mail">
    </div>
    <div class="col-md-4 border border-light border-start-0 mt-3 mt-md-0 d-flex justify-content-center align-items-center">
        <button type="submit" class="btn rounded-0 text-light border-0 bg-transparent m-0 p-0 text-capitalize"><?=$type?></button>
    </div>
</div>
</form>