// a simple function that triggers alert box
function hello(){
    alert("Welcome to my website!");
}

// a simple function to add 2 numbers
function add(){
    document.write(5+5);
}
//document.getElementById(id)

//function to change the background colour of the page 
function setColor(where,newColor){
    if(where == "background"){
        document.body.style.backgroundColor = newColor;

    }
}

//functiono to change the background colour of the page
function changeColor(){
    let color = document.getElementById('b1').value; 
    document.body.style.backgroundColor = color;
}

function changeFcolor(){
    let fcolor = document.getElementById('f1').value;
    document.body.style.color = fcolor;
}

//crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length < 3) {
        alert("First Name must have at least 3 characters");
        return false;
    }
}

function fname(){
    let fname=(document.form1.fname.value).trim();
    if(fname.length < 3) {
        alert("First Name must have at least 3 characters");
        return false;
    }
}
