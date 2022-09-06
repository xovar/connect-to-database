const keys = window.location.search;
const params = new URLSearchParams(keys);
const orderId = params.get('id');
const link = window.location.href;

fetch(`../php/readData.php?id=${orderId}`, {
    method: "GET",
    headers: { "Content-Type" : "application/json"}
})
.then(res => res.json())
.then(data => {
    console.log(data[0]);
    if(data[0].datafound !== "false"){
        /* music, name and image src */
        const imgSrc = `./upload/img/${data[0].image}`;
        const musicSrc = `./upload/music/${data[0].voice_message_file}`;
        const avatarNameSrc = `${data[0].message}`;

        /* Avatar */
        const avatar = document.querySelector(".avatar");
        avatar.src = imgSrc;

        /* Name */
        const avatarName = document.querySelector(".main-content");
        avatarName.innerText = avatarNameSrc;

        /* Audio Player */
        const mainAudio = document.querySelector("#player");
        mainAudio.src = musicSrc; /*  */

        /* download mp3 */
        const downloadIcon = document.querySelector("#download-btn");
        downloadIcon.href = musicSrc;

        /* all audio var */
        const playPauseBtn = document.querySelector("#playbtn");
        const playbtn = document.querySelector("#playbtn");
        const progressBar = document.querySelector("#progress");
        const progressArea = document.querySelector(".bar");

        /* play music function */
        const playMusic = () =>{
            playPauseBtn.classList.add("paused");
            playbtn.classList.remove("fa-play");
            playbtn.classList.add("fa-pause");
            playbtn.style.backgroundColor = 'white';
            playbtn.style.boxShadow = 'none';
            playbtn.style.border = '1px solid black';
            avatar.style.transform = 'scale(1.05)';
            mainAudio.play();
        }

        /* pause music function */
        const pauseMusic = () =>{
            playPauseBtn.classList.remove("paused");
            playbtn.classList.remove("fa-pause");
            playbtn.classList.add("fa-play");
            playbtn.style.backgroundColor = '#83cabc';
            playbtn.style.boxShadow = '0px 8px 16px 0.9px rgb(0 0 0 / 24%), 0px 4px 10px 0.4px rgb(0 0 0 / 16%)';
            playbtn.style.border = 'none';
            avatar.style.transform = 'none';
            mainAudio.pause();
        }

        /* Audio Button Events */
        playPauseBtn.addEventListener("click", ()=>{
            isMusicPlayed = playPauseBtn.classList.contains("paused");
            isMusicPlayed ? pauseMusic() : playMusic();
        });

        /* update progress bar */

        mainAudio.addEventListener("timeupdate", (e) =>{
            const currentTime = e.target.currentTime;
            const duration = e.target.duration;
            const progressWidth = (currentTime / duration) * 100;
            progressBar.style.width = `${progressWidth}%`;

            mainAudio.addEventListener("loadeddata", ()=>{
                const musicDuration = document.querySelector(".duration");

                /* update song total duration */
                const audioDuration = mainAudio.duration;
                const totalMin = Math.floor(audioDuration / 60);
                const totalSec = Math.floor(audioDuration % 60);
                musicDuration.innerText = `0${totalMin}:${totalSec}`;
            })

            /* update song current time */
            const musicCurrentTime = document.querySelector(".current");
            const currentMin = Math.floor(currentTime / 60);
            let currentSec = Math.floor(currentTime % 60);
            if(currentSec < 10){
                currentSec = `0${currentSec}`
            }
            musicCurrentTime.innerText = `0${currentMin}:${currentSec}`;
        })

        /* update duration by click */

        progressArea.addEventListener("click", (e)=>{
            const progressWidthVal = progressArea.clientWidth;
            const clickedOffSetX = e.offsetX;
            const songDuration = mainAudio.duration;

            mainAudio.currentTime = (clickedOffSetX / progressWidthVal) * songDuration;
            playMusic();
        })

        /* if audio ended */

        mainAudio.addEventListener("ended", ()=>{
            playbtn.classList.remove("fa-pause");
            playbtn.classList.add("fa-play");
            playbtn.style.backgroundColor = '#83cabc';
            playbtn.style.boxShadow = '0px 8px 16px 0.9px rgb(0 0 0 / 24%), 0px 4px 10px 0.4px rgb(0 0 0 / 16%)';
            playbtn.style.border = 'none';
            avatar.style.transform = 'none';
        })

        /* preloader */

        let preloader = document.querySelector("#preloader");

        window.addEventListener("load", ()=>{
            preloader.style.display = "none";
        })

        /* modal */

        const shareIcon = document.querySelector(".fa-share-alt");
        const modal = document.querySelector("#modal");
        const modalBox = document.querySelector(".modal-box");
        const closeIcon = document.querySelector(".fa-times");

        /* modal open */
        shareIcon.addEventListener("click", ()=>{
            modal.style.visibility = "visible";
        });


        /* modal close */
        closeIcon.addEventListener("click", ()=>{
            modal.style.visibility = "hidden";
        })

        /* copy url */

        const copyBtn = document.querySelector("#copy");
        const url = document.querySelector("#url");

        copyBtn.addEventListener("click", ()=>{
        /* Select the text field */
        url.select();
        url.setSelectionRange(0, 99999); /* For mobile devices */
        /* Copy the text inside the text field */
        document.execCommand("copy")
        })

        /* modals url */
        const facebook = document.getElementById("facebook");
        const twitter = document.getElementById("twitter");
        const whatsapp = document.getElementById("whatsapp");
        const email = document.getElementById("email");

        facebook.href = `https://www.facebook.com/sharer/sharer.php?u=https://uniqicon.com`;
        twitter.href = `https://twitter.com/intent/tweet?text=${link}`;
        whatsapp.href = `whatsapp://send?text=${link}`;
        email.href = `mailto:test@example.com?subject=uniqicon&body=${link}`;
        url.value = `${link}`;
    }else{

        /* main body */
        let main = document.querySelector(".main");

        main.style.display = "none";

        /* error page */
        const error = document.querySelector("#error-page");
        error.style.display = "block";

        /* preloader */
        let loader = document.querySelector("#preloader");

        window.addEventListener("load", ()=>{
            loader.style.display = "none";
        })
    }
});
