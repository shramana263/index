// let x=0;
// $('#icon').on("click",function(){
//     if(x==0){
//         $('#icon').removeClass('out-color')
//         $('#icon').addClass('bg-color-active')
//         $('#icon-bg').addClass('bg-color-active')
//         x=1;
//     }
//     else{
//         $('#icon').removeClass('bg-color-active')
//         $('#icon-bg').removeClass('bg-color-active')
//         $('#icon').addClass('out-color')
//         x=0;
//     }
    
// });

// let y=0;
// $('#save-out').on("click",function(){
//     if(y==0)
//     {
//         $('#save').removeClass('bg-color')
//         $('#save').addClass('save-img-active') 
//         y=1;   
//     }
//     else{
//         $('#save').removeClass('save-img-active')
//         $('#save').addClass('bg-color')
//         y=0;
//     }
    
// });

$('.btn-like').on("click",function(e){
    // console.log(e.target);
    if(e.target.classList.contains('like')){
        e.target.classList.remove('like');
        e.target.classList.add('liked');
    }
    else{
    
        e.target.classList.remove('liked');
        e.target.classList.add('like');
    }
    
})