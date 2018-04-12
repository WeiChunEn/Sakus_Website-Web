var Info;

function API(A='',B=''){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        var request = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        var request = new ActiveXObject("Microsoft.XMLHTTP");
    }

    if(A!='')A='A='+A;

    request.open("GET", "http://192.168.0.5:8087/api/showRestaurant.php?"+[A].join('&'), true);
    request.responseType = 'json';
    request.send();
    request.onload = function () {
        //Get成功後要做的事
        Info = request.response;
    };
}

function Finish(){
    var A=$('#name1').val();
    var B=$('#name2').val();
    var C=$('#name3').val();
    var D=$('#name4').val();
    if ($('#radio1')[0].checked)
        var E=$('#radio1').val();
    else if($('#radio2')[0].checked)
        var E=$('#radio2').val();
    else if($('#radio3')[0].checked)
        var E=$('#radio3').val();
    else if($('#radio4')[0].checked)
        var E=$('#radio4').val();
    var F=$('#amount').val(); 
    var G=$('#problem').val();
    A='firstname='+A;
    B='lastname='+B;
    C='telephone='+C;
    D='email='+D;
    E='tea='+E;
    F='sum='+F;
    G='problem='+G;
    
    
   
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        var request = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        var request = new ActiveXObject("Microsoft.XMLHTTP");
    }


    console.log("http://10.56.21.232:8087/project/searchExample.php?"+[A,B,C,D,E,F,G].join('&'));


    request.open("GET", "http://10.56.21.232:8087/project/searchExample.php?"+[A,B,C,D,E,F,G].join('&'), true);
    request.responseType = 'json';
    request.send();
    request.onload = function () {
        //Get成功後要做的事
        Info = request.response;
    };
}