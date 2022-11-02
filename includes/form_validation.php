<script>
var efilter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
var mfilter = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
$('#submit_form').on('click',()=>{
    console.log('test');
    // $('#error').fadeIn(1000);
    $('#error').html('Please Wait...');
    $('#error').addClass('error btn');
    if(!$('#frominput1').val())
    {
        $('#error').html('Please Enter Name');
    } 
    else if(!$('#frominput2').val())
    {
        console.log($('#frominput2').val());
        $('#error').html('Please Enter Mobile');
    } 
    else if(!mfilter.test($('#frominput2').val()))
    {
        console.log($('#frominput2').val());
        $('#error').html('Please Enter Valid Mobile');
        // if(!mfilter.test($('#frominput2').val()))
        // {
            // console.log($('#frominput2').val());
        // }
    } 
    else if(!$('#frominput3').val())
    {
        $('#error').html('Please Enter Email');
    }
    else if(!efilter.test($('#frominput3').val()))
    {
        $('#error').html('Please Enter Valid Email');
        // if(!efilter.test($('#frominput3').val()))
        // {
        // }
    } 
    else if(!$('#frominput4').val())
    {
        $('#error').html('Please Enter Your Query');
    }
    else 
    {
        $.ajax({
            type: 'post',
            url: '/<?=$main_url?>/backend/form_validation.php',
            data: $('#frominputs').serialize(),
            success: (res)=> {
                console.log(res);
            $('#error').html(res);
            setTimeout(() => {
                $('#error').removeClass('error btn');
                $('#error').empty();        
            }, 3000);
            }
        });
    }
    // $('#error').fadeOut(1000);
})
</script>