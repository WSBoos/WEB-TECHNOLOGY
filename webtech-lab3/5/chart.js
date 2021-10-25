var num = 0;
function chart(){
    num += 1
    if (num%2 != 0){
        document.getElementById("1").style.width = "60%";
        document.getElementById("2").style.width = "90%";
        document.getElementById("3").style.width = "50%";
        document.getElementById("4").style.width = "80%";
        document.getElementById("5").style.width = "75%";
    }

    else{
            document.getElementById("1").style.width = "10%";
            document.getElementById("2").style.width = "10%";
            document.getElementById("3").style.width = "10%";
            document.getElementById("4").style.width = "10%";
            document.getElementById("5").style.width = "10%";
    }
}