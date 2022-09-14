/* add order number */

const saveBtn = document.querySelector("#saveOrderNumber");
const orderNumber = document.querySelector("#orderNumberInput");

saveBtn.addEventListener("click", () =>{
    fetch(`./php/createData.php?id=${orderNumber.value}`,{
        method: "GET",
        headers: { "Content-Type" : "application/json"}
    })
    .then(res => res.json())
    .then(data => console.log(data));
})


/* delete data */ 

const deleteData = (data) =>{
    const deleteId = data;
    
    const deleteConfirm = document.querySelector("#deleteBtn");

    deleteConfirm.addEventListener("click", ()=>{
        fetch(`./php/delete.php?id=${deleteId}`, {
            method: "GET",
            headers: { "Content-Type" : "application/json"}
            })
            .then(res => res.json())
            .then(data => console.log(data))
    })
}