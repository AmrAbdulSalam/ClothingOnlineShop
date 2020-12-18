let chart ;
let mychart ;
colorsforbackground = [
    'rgba(255, 99, 132, 0.2)',
    'rgba(54, 162, 235, 0.2)',
    'rgba(255, 206, 86, 0.2)',
    'rgba(75, 192, 192, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 159, 64, 0.2)'
] ;

$(document).ready(function (){
    $.ajax({
        url : "http://localhost/WebProject2020/charts/nationalcode.php",
        method : "GET" , 
        success : function(info){
            info = info.substring(3,info.length-1);
            let newarr = info.split(',');
            for(let i = 0 ; i < newarr.length ;i++){
                newarr[i] = Number(newarr[i])
            }
            chart = document.getElementById('charts').getContext('2d');
            mychart = new Chart(chart , {
                type : 'bar' ,
                data :{
                    labels : ["Palestine" , "Jordan" , "Lebanon" , "China" , "Usa" , "Others"],
                    datasets :[{
                        label : "Address",
                        data : newarr,
                        backgroundColor : colorsforbackground,
                        borderColor :[
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ] ,
                        borderWidth : 2
                    }]
                }
            });
            


        },
        error : function (data){
            console.log('could not connect to server');
        }
    })
});




//for pie

$(document).ready(function(){
    $.ajax({
        url : "http://localhost/WebProject2020/charts/colors.php",
        post : "GET",
        success : function (info){
            console.log(info)
            info = info.substring(1,info.length-1);
            let newarr = info.split(',');
            for(let i = 0 ; i < newarr.length ;i++){
                newarr[i] = Number(newarr[i])
            }
            console.log(newarr)
            chart = document.getElementById('piechart').getContext('2d');
            mychart = new Chart(chart , {
                type : 'pie' ,
                data : {
                    labels : ['Red' , 'Black' , 'Green' , 'Orange' , 'Gray' , 'Blue'],
                    datasets :[{
                        label : 'Most requested colors' ,
                        data : newarr ,
                        backgroundColor : [
                            'rgba(255, 0, 0, 0.6)',
                            'rgba(0, 0, 0, 0.6)',
                            'rgba(0, 255, 0, 0.6)',
                            'rgba(255, 128, 0, 0.6)',
                            'rgba(128, 128, 128, 0.6)',
                            'rgba(0, 0, 255, 0.6)'
                          
                        ],
                        borderWidth : 2,
                        borderColor :[
                            'rgba(255, 0, 0, 1)',
                            'rgba(0, 0, 0, 1)',
                            'rgba(0, 255, 0, 1)',
                            'rgba(255, 128, 0, 1)',
                            'rgba(128, 128, 128, 1)',
                            'rgba(0, 0, 255, 0.6)'
                          
                        ]
                    }]
                } ,
                options : {
                    legend :{
                        position : 'right'
                    }
                }
            });
        },
        error : function(info){
            console.log('error connecting to the server')
        }
    })
});

$(document).ready(function(){
    $.ajax({
        url : "http://localhost/WebProject2020/charts/size.php",
        method : "GET" ,
        success : function (info){

            info = info.substring(3,info.length-1);
            let newarr = info.split(',');
            for(let i = 0 ; i < newarr.length ;i++){
                newarr[i] = Number(newarr[i])
            }
            
            chart = document.getElementById('doughnut').getContext('2d');
            mychart = new Chart(chart , {
                type : 'doughnut' ,
                data : {
                    labels : ['XXL' , 'XL' , 'Large' , 'Medium'  , 'small'],
                    datasets : [{
                        label : "Sizes ",
                        data : newarr ,
                        backgroundColor : [
                            'rgba(255, 99, 132 , 0.7)',
                            'rgba(54, 162, 235 ,0.7)',
                            'rgba(255, 206, 86 ,0.7)',
                            'rgba(75, 192, 192 ,0.7)',
                            'rgba(153, 102, 255 ,0.7)',
                        ]
                        
                    }]
                } ,
                options : {
                    legend :{
                        position : 'right'
                    }
                }
            })
        }
    })
})


$(document).ready(function(){
    $.ajax({
        url : "http://localhost/WebProject2020/charts/salespermonth.php",
        method : "GET" ,
        success : function (info){
            info = info.substring(3,info.length-1);
            let newarr = info.split(',');
            for(let i = 0 ; i < newarr.length ;i++){
                newarr[i] = Number(newarr[i])
            }
            
            chart = document.getElementById('line').getContext('2d');
            mychart = new Chart(chart , {
                type : 'line' ,
                data : {
                    labels : ['January' , 'February' , 'March' , 'April'  , 'May' , 'June' ,'July' ,'August ' ,'September' ,'October' , 'November' , 'December'],
                    datasets : [{
                        label : "Sales Per Month ",
                        data : newarr ,
                        backgroundColor : [
                            'rgba(255, 99, 266 , 0.7)'
                        ]
                        
                    }]
                } ,
                
            })
        }
    })
})