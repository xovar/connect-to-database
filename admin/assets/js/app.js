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

/* qr code */
const makeQR = (your_data) => {
    let qrcodeContainer = document.getElementById("qrcode");
      qrcodeContainer.innerHTML = "";
      new QRious({
        element: qrcodeContainer,
        value: your_data,
        size: 200,
      }); // generate QR code in canvas
      downloadQR(); // function to download the image

  }

function downloadQR() {
      var link = document.createElement('a');
      link.download = 'filename.png';
      link.href = document.getElementById('qrcode').toDataURL()
      link.click();
  } 

const qrCode = (data) =>{
    makeQR(`http://localhost/project/voice/ordernumber.html?id=${data}`);
}


