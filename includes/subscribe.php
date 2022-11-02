<div class="subscribe position-relative bg-img">
<div class="overlay"></div>
    <div class="container">
        <div class="row align-items-center py-5 position-relative">
            <div class="col-md-6">        
                <h2 class="text-light py-3 text-center text-md-start my-md-0">Subscribe Us</h2>
            </div>
            <div class="col-md-6">
                <!-- <form action="#" method="post" id="subscribe_form" class="row px-2 justify-content-center">    
                <input type="text" class="form-control text-light rounded-0 bg-transparent col-sm-8 col-md-8 border border-light border-end-0" id="subscribe_mail">
                <button type="submit" class="btn rounded-0 w-25 text-light border border-light border-start-0 bg-transparent col-sm-4 col-md-4 d-flex justify-content-center align-items-center">Subscribe</button>
                </form> -->
                <?php 
                $functions = new Functions();
                $functions->single_input('subscribe','subscribe','col-sm-6'); ?>
            </div>
        </div>
    </div>
</div>