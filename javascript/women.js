let hoverPicture = (imageSrc , imageId) => {
    document.getElementById(imageId).src = "./photos/womenpage-photos/"+imageSrc+".png";
    document.getElementById(imageId).style.width="356px";
    document.getElementById(imageId).style.height="365px";
}


let backToImage = (imageSrc , imageId) => {
    document.getElementById(imageId).src = "./photos/womenpage-hover/"+imageSrc+".png";
    document.getElementById(imageId).style.width="356px";
    document.getElementById(imageId).style.height="365px";
}

document.querySelector('.secondpage').style.display = 'none'
document.getElementById("prev").disabled = true;
let nextPage = (page) => {
    let x = document.getElementById('pagenum').innerText;
    x = Number(x);
    
    let arr = ['firstpage' , 'secondpage']
    
    if(page === 'next'){
        if(arr.length <= x){
            return
        }
        for(let i = 0 ; i < arr.length ;i++){
            document.querySelector('.'+arr[i]).style.display = 'none'
        }
        document.getElementById('pagenum').innerText = x + 1;
        console.log(arr[x])
        console.log(x)
        document.querySelector('.'+arr[x]).style.display = 'block'
        

    }
    else{
       if(x === 1){
           return
       }
       document.getElementById('pagenum').innerText = x - 1;
       x = document.getElementById('pagenum').innerText;
       x = Number(x);
       for(let i = 0 ; i < arr.length ;i++){
            document.querySelector('.'+arr[i]).style.display = 'none'
        }
        document.querySelector('.'+arr[x-1]).style.display = 'block'
        

       
    }

}
