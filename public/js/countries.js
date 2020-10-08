function getcountry(q){
    const regex = /Continent:/g;
    const found = q.match(regex);
    if(found){
        let search = q.substring(10);
        $.ajax({
            url:"./requestRegion/"+search,
            success:function(res){
                document.getElementById("output").innerHTML=""+res;
            }
        })
    }else{
        $.ajax({
            url:"https://restcountries.eu/rest/v2/name/"+q,
            success:function(res){
                document.getElementById("output").innerHTML="<h1>"+res[0].name+"</h1><br><img src='"+res[0].flag+"'width='500'/><br><p>Capitale  : "+res[0].capital+"<br>Continent : "+res[0].region+"<br>Nombre de Population : "+res[0].population+"<br>Monnaie : "+res[0].currencies[0].name+"<br> Symbole monnaie : "+res[0].currencies[0].symbol+"</p>";
            }
        })
    }
}  



