var num = 0;
function change(){
    num += 1;
    if (num == 1){
        document.getElementById('1').src = "http://10.0.15.12/lab3/images/3.png";
        document.getElementById('2').src = "http://10.0.15.12/lab3/images/1.png";
        document.getElementById('3').src = "http://10.0.15.12/lab3/images/4.png";
        document.getElementById('4').src = "http://10.0.15.12/lab3/images/2.png";
    }
    else if(num ==2){
        document.getElementById('1').src = "http://10.0.15.12/lab3/images/4.png";
        document.getElementById('2').src = "http://10.0.15.12/lab3/images/3.png";
        document.getElementById('3').src = "http://10.0.15.12/lab3/images/2.png";
        document.getElementById('4').src = "http://10.0.15.12/lab3/images/1.png";       
    }

    else if(num ==3){
        document.getElementById('1').src = "http://10.0.15.12/lab3/images/2.png";
        document.getElementById('2').src = "http://10.0.15.12/lab3/images/4.png";
        document.getElementById('3').src = "http://10.0.15.12/lab3/images/1.png";
        document.getElementById('4').src = "http://10.0.15.12/lab3/images/3.png";       
    }

    else if(num ==4){
        document.getElementById('1').src = "http://10.0.15.12/lab3/images/1.png";
        document.getElementById('2').src = "http://10.0.15.12/lab3/images/2.png";
        document.getElementById('3').src = "http://10.0.15.12/lab3/images/3.png";
        document.getElementById('4').src = "http://10.0.15.12/lab3/images/4.png";  
        num = 0;     
    } 
}