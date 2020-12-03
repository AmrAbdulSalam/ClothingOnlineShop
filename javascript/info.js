

//changing colors to radio buttons
let colors = document.getElementById('allcolors').innerText;
colorarr = colors.split(','); //all colors from database
var node ;
var text;
document.getElementById('allcolors').innerText = '';
for(let i = 0 ; i < colorarr.length;i++){

    node = document.createElement('input');
    node.type = 'radio'
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

