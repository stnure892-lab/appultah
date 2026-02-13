<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ucapan Ulang Tahun - Siti Nursaidah</title>

<style>
body{
    margin:0;
    font-family:'Segoe UI', sans-serif;
    background: linear-gradient(to bottom, #0a0f2c, #000814);
    overflow:hidden;
    color:#d6ecff;
    text-align:center;
}

/* BINTANG */
.star{
    position:absolute;
    width:2px;
    height:2px;
    background:white;
    border-radius:50%;
    animation:blink 2s infinite alternate;
}
@keyframes blink{
    from{opacity:0.2;}
    to{opacity:1;}
}

/* METEOR */
.meteor{
    position:absolute;
    width:3px;
    height:120px;
    background:linear-gradient(white, transparent);
    transform:rotate(45deg);
    animation:fall 3s linear;
}
@keyframes fall{
    0%{top:-150px; left:0;}
    100%{top:100%; left:100%;}
}

/* CONTAINER */
.container{
    position:relative;
    top:20%;
    width:80%;
    margin:auto;
    padding:40px;
    background:rgba(0,0,60,0.6);
    border-radius:25px;
    box-shadow:0 0 25px #1e90ff;
    animation:glow 3s infinite alternate;
}
@keyframes glow{
    from{box-shadow:0 0 15px #1e90ff;}
    to{box-shadow:0 0 35px #00bfff;}
}

button{
    padding:12px 25px;
    border:none;
    border-radius:15px;
    background:#1e90ff;
    color:white;
    font-size:16px;
    cursor:pointer;
    transition:0.3s;
}
button:hover{
    transform:scale(1.1);
    background:#00bfff;
}

/* ANIMASI TEKS */
.fade{
    animation:fadeIn 2s;
}
@keyframes fadeIn{
    from{opacity:0; transform:translateY(20px);}
    to{opacity:1; transform:translateY(0);}
}

/* CONFETTI */
.confetti{
    position:absolute;
    width:6px;
    height:6px;
    background:yellow;
    animation:confettiFall 3s linear forwards;
}
@keyframes confettiFall{
    0%{top:-10px;}
    100%{top:100%;}
}
</style>
</head>
<body>

<audio id="musik" src="https://www2.cs.uic.edu/~i101/SoundFiles/HappyBirthday.mid"></audio>

<div class="container">
    <h1>🌌 Langit Malam Berbicara...</h1>
    <p id="teks" class="fade">
        Dalam gelapnya malam, bintang tetap bersinar.
        Begitu pula dirimu, yang selalu memberi cahaya.
    </p>
    <br>
    <button onclick="lanjut()">✨ Lanjut ✨</button>
</div>

<script>

/* Bintang */
for(let i=0;i<200;i++){
    let star=document.createElement("div");
    star.className="star";
    star.style.top=Math.random()*100+"%";
    star.style.left=Math.random()*100+"%";
    document.body.appendChild(star);
}

/* Meteor setiap 5 detik */
setInterval(()=>{
    let meteor=document.createElement("div");
    meteor.className="meteor";
    meteor.style.left=Math.random()*100+"%";
    document.body.appendChild(meteor);
    setTimeout(()=>meteor.remove(),3000);
},5000);

/* Confetti */
function confetti(){
    for(let i=0;i<80;i++){
        let c=document.createElement("div");
        c.className="confetti";
        c.style.left=Math.random()*100+"%";
        c.style.background=["#ff0","#0ff","#f0f","#fff","#1e90ff"][Math.floor(Math.random()*5)];
        document.body.appendChild(c);
        setTimeout(()=>c.remove(),3000);
    }
}

let step=0;

function lanjut(){
    const teks=document.getElementById("teks");
    const musik=document.getElementById("musik");
    step++;

    if(step==1){
        teks.innerHTML="🌠 Doa: Semoga setiap langkahmu dipenuhi keberkahan, kesehatan, dan kebahagiaan yang tak terhingga.";
    }
    else if(step==2){
        teks.innerHTML="✨ Quote Filosofi: Usia hanyalah angka, tetapi kebaikan dan makna hidupmu adalah cahaya yang abadi.";
    }
    else if(step==3){
        musik.play();
        confetti();
        teks.innerHTML="<h2>🎉 Selamat Ulang Tahun 🎉<br><br>Siti Nursaidah</h2><br>Semoga tahun ini membawa mimpi yang terwujud dan hati yang selalu bersyukur 💙";
    }
    else{
        teks.innerHTML="🌌 Teruslah bersinar seperti bintang di langit malam ✨";
    }

    teks.classList.remove("fade");
    void teks.offsetWidth;
    teks.classList.add("fade");
}
</script>

</body>
</html>
