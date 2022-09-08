/* check order number */

const orderForm = document.getElementById("formOrder");

orderForm?.addEventListener("submit", (e) =>{
    e.preventDefault();
    const orderNumber = e.target.orderNumber.value;
    
    fetch(`http://localhost/project/php/checkOrderNumber.php?orderNumber=${orderNumber}`, {
        method: "GET",
        headers: { "Content-Type" : "application/json"}
    })
    .then(res => res.json())
    .then(data => {
        if(data == "false"){
            const error = document.querySelector("#order-error");
            error.style.display = "block";
            error.innerText = "Order Number Is Invalid"; 
        }else if(data == '0'){
            window.location = "voiceMessage.php";
            const orderInput = {
                orderNumber : orderNumber
            }

            localStorage.setItem("orderNumber", JSON.stringify(orderInput));
        }else{
            const error = document.querySelector("#order-error");
            error.style.display = "block";
            error.innerText = "The order number has already been used."; 
        }
    });
})