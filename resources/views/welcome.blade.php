<!DOCTYPE html>
<html>
<head>
<title>Holi Canvas Effect</title>
<style>
body{
    margin:0;
    overflow:hidden;
    background:black;
}
canvas{
    position:fixed;
    top:0;
    left:0;
}
</style>
</head>
<body>

<canvas id="holi"></canvas>

<script>
const canvas = document.getElementById("holi");
const ctx = canvas.getContext("2d");

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particles = [];

function randomColor(){
    const colors=[
        "#ff1744","#f50057","#d500f9",
        "#651fff","#2979ff","#00e5ff",
        "#00e676","#ffea00","#ff9100"
    ];
    return colors[Math.floor(Math.random()*colors.length)];
}

class Particle{
    constructor(x,y,color){
        this.x=x;
        this.y=y;
        this.angle=Math.random()*Math.PI*2;
        this.speed=Math.random()*10+2;
        this.size=Math.random()*3+1;
        this.life=120;
        this.opacity=1;
        this.color=color;
    }

    update(){
        this.x+=Math.cos(this.angle)*this.speed;
        this.y+=Math.sin(this.angle)*this.speed;
        this.speed*=0.96;
        this.life--;
        this.opacity-=0.008;
    }

    draw(){
        ctx.globalAlpha=this.opacity;
        ctx.fillStyle=this.color;
        ctx.fillRect(this.x,this.y,this.size,this.size);
        ctx.globalAlpha=1;
    }
}

function createSplash(x,y){
    const color=randomColor();

    // dense center
    for(let i=0;i<300;i++){
        particles.push(new Particle(x,y,color));
    }

    // spike rays
    for(let i=0;i<40;i++){
        const baseAngle=Math.random()*Math.PI*2;
        for(let j=0;j<20;j++){
            let p=new Particle(x,y,color);
            p.angle=baseAngle+(Math.random()*0.2-0.1);
            p.speed=Math.random()*15+5;
            particles.push(p);
        }
    }
}

function animate(){
    ctx.fillStyle="rgba(0,0,0,0.15)";
    ctx.fillRect(0,0,canvas.width,canvas.height);

    particles.forEach((p,i)=>{
        p.update();
        p.draw();
        if(p.life<=0 || p.opacity<=0){
            particles.splice(i,1);
        }
    });

    requestAnimationFrame(animate);
}

canvas.addEventListener("mousedown",(e)=>{
    createSplash(e.clientX,e.clientY);
});

canvas.addEventListener("touchstart",(e)=>{
    const t=e.touches[0];
    createSplash(t.clientX,t.clientY);
});

animate();

window.addEventListener("resize",()=>{
    canvas.width=window.innerWidth;
    canvas.height=window.innerHeight;
});
</script>

</body>
</html>