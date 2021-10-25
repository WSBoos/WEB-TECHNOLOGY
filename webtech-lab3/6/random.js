function random(){
    var num1 = (Math.floor(Math.random() * 999999)).toString();
    document.getElementById("1").innerHTML = "0".repeat(6-num1.length) + num1;
    var numf3 = (Math.floor(Math.random() * 999)).toString();
    document.getElementById("f3").innerHTML = "0".repeat(3-numf3.length) + numf3;
    var numb3 = (Math.floor(Math.random() * 999)).toString();
    document.getElementById("b3").innerHTML = "0".repeat(3-numb3.length) + numb3;
    var numb2 = (Math.floor(Math.random() * 99)).toString()
    document.getElementById("b2").innerHTML = "0".repeat(2-numb2.length) + numb2;
}