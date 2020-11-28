let hoverPicture = (x) => {
    let arr = ['firstimage' , 'test'];
    for(let i = 0 ; i < arr.length ; i++){
        if(x === arr[i]){
            document.getElementById(x).src = "./photos/menpage-photos/2.png"
        }
    }
}


let backToImage = (imageSrc , imageId) => {
    document.getElementById(imageId).src = "./photos/menpage-photos/"+imageSrc+".png";
    console.log(imageSrc)
}