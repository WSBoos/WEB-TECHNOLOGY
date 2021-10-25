let vans1="~", vans2="~", vans3="~";
function ans01(){
    vans1 = document.getElementById("ans").value;
}

function ans02(){
    vans2 = document.getElementById("ans").value;
}

function ans03(){
    vans3 = document.getElementById("ans").value;
}

function send(){
    if (vans1 != "~"){
            let p = document.createElement("p");
            p.innerHTML = vans1;
            document.getElementById("a1").appendChild(p);
            vans1 = "~";
    }
    if (vans2 != "~"){
        let p = document.createElement("p");
        p.innerHTML = vans2;
        document.getElementById("a2").appendChild(p);
        vans2 = "~";
    }
    if (vans3 != "~"){
        let p = document.createElement("p");
        p.innerHTML = vans3;
        document.getElementById("a3").appendChild(p);
        vans3 = "~";
    }
}