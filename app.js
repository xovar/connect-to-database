/* form validation */

const form = document.querySelector("#form");
let errorCount = 1;

form.addEventListener("focusout", (e)=>{
    const formInput = e.target;
    if(e.target.value == '' || null){
        formInput.classList.add("error-show");
    }else{
        formInput.classList.remove("error-show");
    }
})
