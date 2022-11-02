<script>
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
        }
    });
</script>