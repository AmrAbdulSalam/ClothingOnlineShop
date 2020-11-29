let hoverPicture = (imageSrc,imageId) => {
    document.getElementById(imageId).src = "./photos/menpage-photos/"+imageSrc+".png";
    document.getElementById(imageId).style.width = "356px"
    document.getElementById(imageId).style.height = "365px"
}


let backToImage = (imageSrc , imageId) => {
    document.getElementById(imageId).src = "./photos/menpage-hover/"+imageSrc+".png";
    document.getElementById(imageId).style.width = "356px"
    document.getElementById(imageId).style.height = "365px"
}