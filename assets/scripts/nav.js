// const searchicon1 =document.querySelector("#searchicon1");
// const srcicon1=document.querySelector("#srchicon1");
// const search1=document.querySelector("#searchinput1");

// searchicon1.addEventListener("click",function(){
//     search1.style.display="flex";
//     searchicon1.style.display="none";
// })

// search1.addEventListener("blur",function(){
//     search1.style.display="none";
// })

// const searchicon2 =document.querySelector("#searchicon2");
// const srcicon2=document.querySelector("#srchicon2");
// const search2=document.querySelector("#searchinput2");

// searchicon2.addEventListener("click",function(){
//     search2.style.display="flex";
//     searchicon2.style.display="none";
// })

const bar =document.querySelector(".fa-bars");
const cross =document.querySelector("#hdcross");
const headerbar =document.querySelector(".headerbar");

bar.addEventListener("click",function(){
    setTimeout(()=>{
        cross.style.display="block";
        cross.style.position="fixed";
        cross.style.zIndex="1500";
    },200);
    headerbar.style.right ="0%";
    headerbar.style.zIndex ="1500";
})

cross.addEventListener("click",function(){
    cross.style.display="none";
    headerbar.style.right="-100%";
})
