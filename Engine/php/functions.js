function odpriFile(id){
    console.log(id + " id was clicked");
    id = id * 1;
    window.location.href = "../php/vprasanja.php?id=" + id + "";
}
var polje_inputov_id = [];
var polje_inputov_value = [];
var content_html_edit;
function test(){
    console.log("test");
    let poljeString = document.getElementById("poljeString").value;
    let besedilo = document.getElementById("besedilo").value;
    let vprasanja = document.getElementById("vprasanja").value;
    let odgovori = document.getElementById("odgovori").value;

    let besediloDecoded = atob(besedilo);
    let vprasanja1 = JSON.parse(vprasanja);
    let odgovori1 = JSON.parse(odgovori);
    let polje_string = atob(poljeString)
    content_html = atob(besedilo) 

    console.log(atob(poljeString));
    console.log(besediloDecoded);
    console.log(vprasanja1);
    console.log(odgovori1);
   
    const str = $(`<div id="parent"> ${polje_string} </div>`);
    for(var i=1;i<10;i++){
      polje_inputov_id[i-1] = str.find(':nth-child(' + i + ')').attr('id');
      if(str.find(':nth-child(' + i + ')').attr('value') == "EMŠO"){
        polje_inputov_value[i-1] = "EM&Scaron;O";
      }else if (str.find(':nth-child(' + i + ')').attr('value') == "Pošta"){
        polje_inputov_value[i-1] = "Po&scaron;ta";
      }else{
        polje_inputov_value[i-1] = str.find(':nth-child(' + i + ')').attr('value')
      }
      
      console.log("polje_inputov_id " + polje_inputov_id);
      console.log("polje_inputov_value " + polje_inputov_value);
      
    } 
    for(var j=0;j<10;j++){
    var n = content_html_edit;
    if(j==0){
      content_html_edit = content_html.replace(`<input id="${polje_inputov_id[j]}" style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${polje_inputov_value[j]}">`, `${odgovori1[j]}`);
    }
    else{
      content_html_edit = n.replace(`<input id="${polje_inputov_id[j]}" style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${polje_inputov_value[j]}">`, `${odgovori1[j]}`);
    }
   
    console.log(content_html_edit);
    
    }
    document.getElementById("div_pdf").innerHTML =  content_html_edit;
    console.log("AAAAAAAAAAAA" + content_html_edit);
}
