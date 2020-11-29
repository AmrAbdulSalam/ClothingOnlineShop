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