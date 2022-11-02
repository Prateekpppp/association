$('.slide').each(
    function(index,slide) {
        $(this).css('left',`${index*100}%`)
    }
);

sliding = ()=>{
    var counter = 0
    console.log(counter);
    $('.slide').each(
        function(index,slide) {
            if(counter < 5) {
            $(this).css('translateX',`-${counter*100}%`);
            counter++;
            }
            else {
                counter=0;
            }
            // console.log(slide)
        }
    );
}
var cnt =1
// var counter = 0
setInterval(() => {
    sliding(counter);
}, 2000);
// while(cnt) {
//     if(counter < 5) {
//         // setTimeout(() => {
//         //     sliding(counter);
//         // }, 2000);
//         console.log(counter);
//         counter++;
//     } 
//     else {
//         counter=0;
//     }
// }