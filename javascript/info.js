

//changing colors to radio buttons
let colors = document.getElementById('allcolors').innerText;
colorarr = colors.split(','); //all colors from database
var node ;
var text;
document.getElementById('allcolors').innerText = '';
for(let i = 0 ; i < colorarr.length;i++){
    
    node = document.createElement('input'); //<input >
    node.type = 'radio' //<input type='radio' >
    node.name = 'colorbtns'
    node.id = 'radio'+colorarr[i];
    
    document.getElementById('allcolors').appendChild(node);

    node = document.createElement('label');
    node.style.color = colorarr[i];
    node.id = 'co'+colorarr[i];
    node.style.paddingRight = '20px';
    text = document.createTextNode(colorarr[i]);
    node.appendChild(text)
    document.getElementById('allcolors').appendChild(node);
    
}
document.getElementById('radio'+colorarr[0]).checked = true;
//for size

let size = document.getElementById('allsizes').innerText;
sizearr = size.split(','); //all colors from database

document.getElementById('allsizes').innerText = '';
for(let i = 0 ; i < sizearr.length;i++){
    
    node = document.createElement('input'); //<input >
    node.type = 'radio' //<input type='radio' >
    node.name = 'sizebtns'
    node.id = 'radio'+sizearr[i];
    
    document.getElementById('allsizes').appendChild(node);

    node = document.createElement('label');
    node.style.color = sizearr[i];
    node.id = 'co'+sizearr[i];
    node.style.paddingRight = '20px';
    text = document.createTextNode(sizearr[i]);
    node.appendChild(text)
    document.getElementById('allsizes').appendChild(node);
    
}
document.getElementById('radio'+sizearr[0]).checked = true;




//end size
let price = document.getElementById('totalprice').innerText;
    let pricearr = price.split(' ');
    pricearr[1] = pricearr[1].substring(1);
    pricearr[1] = Number(pricearr[1]);

let moreItems = () =>{
    document.getElementById('minus').className = 'red minus circle icon'
    let x = document.getElementById('labelnum').innerText;
    x = Number(x);
    x+=1;
    document.getElementById('labelnum').innerText = x;
    
    let total  = pricearr[1] * x
    document.getElementById('totalprice').innerText = 'US $'+total.toFixed(2)
}

let lessItems = () =>{
    let x = document.getElementById('labelnum').innerText;
    if(!(x == 1)){
        x = Number(x);
        x-=1;
        document.getElementById('labelnum').innerText = x;
        let total  = pricearr[1] * x
        document.getElementById('totalprice').innerText = 'US $'+total.toFixed(2)
    }
    if(x==1){
        document.getElementById('minus').className = 'disabled red minus circle icon'
    }
    
}
let colortype = '';

function getColor(){
    for(let i = 0 ; i < colorarr.length ;i++){
        if(document.getElementById('radio'+colorarr[i]).checked){
            return colorarr[i];
        }
        }
}

function quantity () {
    return document.getElementById('labelnum').innerText;
}

function getSize(){
    for(let i = 0 ; i < colorarr.length ;i++){
        if(document.getElementById('radio'+sizearr[i]).checked){
            return sizearr[i];
        }
        }
}
