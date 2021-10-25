function add1(){
    let lit = document.createElement("div");
    let lit2 = document.createElement("div");
    document.getElementById("song12").remove();
    lit2.innerHTML = document.getElementById("song1").innerHTML;
    document.getElementById("song11").remove();
    document.getElementById("addie").appendChild(lit).innerHTML = document.getElementById("song1").innerHTML;
    document.getElementById("song1").innerHTML = lit2.innerHTML;
}

function add2(){
    let lit = document.createElement("div");
    let lit2 = document.createElement("div");
    document.getElementById("song22").remove();
    lit2.innerHTML = document.getElementById("song2").innerHTML;
    document.getElementById("song21").remove();
    document.getElementById("addie").appendChild(lit).innerHTML = document.getElementById("song2").innerHTML;
    document.getElementById("song2").innerHTML = lit2.innerHTML;
}

function add3(){
    let lit = document.createElement("div");
    let lit2 = document.createElement("div");
    document.getElementById("song32").remove();
    lit2.innerHTML = document.getElementById("song3").innerHTML;
    document.getElementById("song31").remove();
    document.getElementById("addie").appendChild(lit).innerHTML = document.getElementById("song3").innerHTML;
    document.getElementById("song3").innerHTML = lit2.innerHTML;
}