/* form validation */

const form = document.querySelector("#form");

form.addEventListener("focusout", (e)=>{
    const formInput = e.target;
    if(e.target.value == '' || null){
        formInput.classList.add("error-show");
    }else{
        formInput.classList.remove("error-show");
    }
});


/* form submit validation */

form.addEventListener("submit", (e) => {
    if(e.target.name.value == '' || e.target.email.value == '' || e.target.orderNumber.value == '' || e.target.purchase.value == '' || e.target.message.value == ''){
        e.preventDefault();
    }

})