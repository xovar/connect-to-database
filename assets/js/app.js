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


/* input file preview */

var fileInputError = 0;

/* image */

const imgInput = document.getElementById("img-file");
const imgPreviewSection = document.querySelector(".img-preview-section");
const imgPreview = document.querySelector(".img-preview");
const imgName = document.querySelector(".img-name");
const imgSize = document.querySelector(".img-size");

imgInput.addEventListener("change", (e) =>{
    const selectedFile = document.getElementById('img-file').files[0];
    const url = URL.createObjectURL(selectedFile);
    const types = ["jpg","jpeg","png","svg","gif"];
    const typeCheck = selectedFile.name.split(".")[1];
    const error = document.querySelector(".error-img");
    const errorText = document.querySelector(".error-img-text");

    if(types.includes(typeCheck)){
        error.style.display = "none";
        errorText.innerText = '';
        imgPreview.src = url;
        console.log(selectedFile.name);
        imgName.innerText = selectedFile.name;
        const size = `${selectedFile.size / 1000}`;
        imgSize.innerText = `${size.split(".")[0]}Kb`;
        imgPreviewSection.style.visibility = "visible";
        fileInputError = 1;
    }else{
        imgPreviewSection.style.visibility = "hidden";
        error.style.display = "flex";
        errorText.innerText = `${selectedFile.name} has invalid extension. Only jpg, jpeg, png, gif are allowed.`;
        fileInputError = 0;
    }
})

const deleteImgFileSelection = document.querySelector(".img-delete");

deleteImgFileSelection.addEventListener("click", () =>{
    imgPreview.src = '';
    imgName.innerText = '';
    imgSize.innerText = "0kb";
    imgPreviewSection.style.visibility = "hidden";
})

/* music */

const musicInput = document.getElementById("voice-file");
const musicPreviewSection = document.querySelector(".music-preview-section");
const musicPreview = document.querySelector(".music-preview");
const musicName = document.querySelector(".music-name");
const musicSize = document.querySelector(".music-size");

musicInput.addEventListener("change", (e) =>{
    const selectedFile = document.getElementById('voice-file').files[0];
    console.log(selectedFile.name);
    const types = ["mp3", "wma", "mpg", "flv", "avi"];
    const typeCheck = selectedFile.name.split(".")[1];
    const error = document.querySelector(".error-music");
    const errorText = document.querySelector(".error-music-text");


    if(types.includes(typeCheck)){
        error.style.display = "none";
        errorText.innerText = '';
        musicName.innerText = selectedFile.name;
        const size = `${selectedFile.size / 1000}`;
        musicSize.innerText = `${size.split(".")[0]}Kb`;
        musicPreviewSection.style.visibility = "visible";
        fileInputError = 1;
    }else{
        musicPreviewSection.style.visibility = "hidden";
        error.style.display = "flex";
        errorText.innerText = `${selectedFile.name} has invalid extension. Only mp3, wma, mpg, flv, avi are allowed.`;
        fileInputError = 0;
    }
})

const deleteMusicFileSelection = document.querySelector("#music-delete");

deleteMusicFileSelection.addEventListener("click", () =>{
    musicPreview.src = '';
    musicName.innerText = '';
    musicSize.innerText = "0kb";
    musicPreviewSection.style.visibility = "hidden";
})


form.addEventListener("submit", (e) => {
    const submitBtn = document.querySelector(".btn-footer");

    if(e.target.name.value == '' || e.target.email.value == '' || e.target.orderNumber.value == '' || e.target.purchase.value == '' || e.target.message.value == ''){
        e.preventDefault();
        submitBtn.style.cursor = "not-allowed"
    }else{
        submitBtn.style.cursor = "pointer";
        
    }

    if(fileInputError == 0){
        e.preventDefault();
        submitBtn.style.cursor = "not-allowed"
    }else{
        submitBtn.style.cursor = "pointer";
    }
})

/* get order number from localstorage */

const codeNumber = JSON.parse(localStorage.getItem("orderNumber"));
const orderInput = document.querySelector("#orderNumber");

if(codeNumber?.orderNumber != ''){
    orderInput.value = codeNumber?.orderNumber;
    localStorage?.removeItem("orderNumber");
    window?.localStorage?.key("orderNumber");
}

if(orderInput.value == 'undefined'){
    window.location = "index.php";
}