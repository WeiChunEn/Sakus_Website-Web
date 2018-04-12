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

    request.open("GET", "http://10.56.21.232:8087/api/showRestaurant.php?"+[A].join('&'), true);
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
    {
        var E=$('#radio1').val();
    }
    else if($('#radio2')[0].checked)
    {
        var E=$('#radio2').val();
    }
    else if($('#radio3')[0].checked)
    {
        var E=$('#radio3').val();
    }
    var F=$('#areastyle').val();
    var G=$('#date').val();
    var H=$('#carnum').val();
    if ($('#radio4')[0].checked)
    {
        var I=$('#radio4').val();
        var J=$('#campnum1').val();
    }
    else if($('#radio5')[0].checked)
    {
        var I=$('#radio5').val();
        var J=0
    }
    
    if ($('#radio6')[0].checked)
    {
        var K=$('#radio6').val();
        var L=$('#quiltnum').val();
    }
    else if($('#radio7')[0].checked)
    {
        var K=$('#radio7').val();
        var L=0;
    }
    if ($('#radio8')[0].checked)
    {
        var M=$('#radio8').val();
        var N=$('#petnum').val();
    }
    else if($('#radio9')[0].checked)
    {
        var M=$('#radio9').val();
        var N=0;
    }
    var O = $('#problem').val();
    A='firstname='+A;
    B='lastname='+B;
    C='telephone='+C;
    D='email='+D;
    E='area='+E;
    F='areastyle='+F;
    G='date='+G;
    H='carnum='+H;
    I='camp='+I;
    J='campnum='+J;
    K='quilt='+K;
    L='quiltnum='+L;
    M='pet='+M;
    N='petnum='+N;
    O='problem='+O;







    
   
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        var request = new XMLHttpRequest();
    }
    else {
        // code for IE6, IE5
        var request = new ActiveXObject("Microsoft.XMLHTTP");
    }


    console.log("http://10.56.21.232:8087/project/searchExample2.php?"+[A,B,C,D,E,F,G,H,I,J,K,L,M,N,O].join('&'));


    request.open("GET", "http://10.56.21.232:8087/project/searchExample2.php? "+[A,B,C,D,E,F,G,H,I,J,K,L,M,N,O].join('&'), true);
    request.responseType = 'json';
    request.send();
    request.onload = function () {
        //Get成功後要做的事
        Info = request.response;
    };
}