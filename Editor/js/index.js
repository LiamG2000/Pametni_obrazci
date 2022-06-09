var inputValue = "";
const replaced = "";  
var i = 0;
var polje_string = ""; 
var polje_inputov_id = [];
var polje_inputov_value = [];
var polje_vprasanj = [];
var content_html_edit;
var content_html_edit9;
var json_file;
var nekaj = false;
var input_pomeri = false;
var vprasanje_pomeri = false;
var event_value = "";
var placeholder;


tinymce.init({
  selector: '#text_editor',
  init_instance_callback: function(editor) {
    editor.on('drop', function(e) {
    if(nekaj == true){
      if(input_pomeri == true){
        input_pomeri = false;
        document.getElementById("gumb1234").click();
        
      }else{
        document.getElementById("gumb123").click();
      }
       nekaj=false;
    }
    });
  },
  plugins: 'image paste',
  images_file_types: ''
});

var content_html = null;
function get_editor_content() {
  console.debug(tinyMCE.activeEditor.getContent());
  content_html = tinyMCE.get('text_editor').getContent();
}

function set_editor_content(){
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
    console.log("polje_vprasanj " + polje_vprasanj);
  } 
  for(var j=0;j<10;j++){
  var n = content_html_edit;
  if(j==0){
    content_html_edit = content_html.replace(`<input id="${polje_inputov_id[j]}" style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${polje_inputov_value[j]}">`, `${polje_vprasanj[j]}`);
  }else{
    content_html_edit = n.replace(`<input id="${polje_inputov_id[j]}" style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${polje_inputov_value[j]}">`, `${polje_vprasanj[j]}`);
  }
 
  console.log(content_html_edit9);
  
  }
  console.log("AAAAAAAAAAAA" + content_html_edit);
  tinymce.get('text_editor').setContent(`${content_html_edit}`);
}

function delete_input(){
  content_html = tinyMCE.get('text_editor').getContent();
  const content_html_edit = content_html.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="EM&Scaron;O">', '');
  const content_html_edit2 = content_html_edit.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Ime">', '');
  const content_html_edit3 = content_html_edit2.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Priimek">', '');
  const content_html_edit4 = content_html_edit3.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Datum">', '');
  const content_html_edit5 = content_html_edit4.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Po&scaron;ta">', '');
  const content_html_edit6 = content_html_edit5.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Kraj">', '');
  const content_html_edit7 = content_html_edit6.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Država">', '');
  const content_html_edit8 = content_html_edit7.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Telefon">', '');
  content_html_edit9 = content_html_edit8.replaceAll(`<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${event_value}">`, '');
 
tinymce.get('text_editor').setContent(`${content_html_edit9}`);

}

function add_id_to_input(){
  console.log(event_value);
  placeholder = document.getElementById("input_placeholder").value
  content_html = tinyMCE.get('text_editor').getContent();
  const content_html_edit = content_html.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="EM&Scaron;O">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="EM&Scaron;O" id='${i}'>`);
  const content_html_edit2 = content_html_edit.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Ime">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Ime" id='${i}'>`);
  const content_html_edit3 = content_html_edit2.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Priimek">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Priimek" id='${i}'>`);
  const content_html_edit4 = content_html_edit3.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Datum">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Datum" id='${i}'>`);
  const content_html_edit5 = content_html_edit4.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Po&scaron;ta">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Po&scaron;ta" id='${i}'>`);
  const content_html_edit6 = content_html_edit5.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Kraj">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Kraj" id='${i}'>`);
  const content_html_edit7 = content_html_edit6.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Država">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Država" id='${i}'>`);
  const content_html_edit8 = content_html_edit7.replaceAll('<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Telefon">', `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="Telefon" id='${i}'>`);
  content_html_edit9 = content_html_edit8.replaceAll(`<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${event_value}">`, `<input style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" value="${placeholder}" id='${i}'>`);
  
tinymce.get('text_editor').setContent(`${content_html_edit9}`);
  if(event_value != ""){
    console.log("1");
    polje_string += `<input value='${placeholder}' style="border-radius: 8px; border: 2px solid black;" readonly>`;
  }else{
    console.log("2");
  	polje_string += `<input value='${inputValue}' style='border-radius: 8px; border: 2px solid black;' readonly>`;
  }
  
  const content_input_1 = polje_string.replaceAll("<input value='EMŠO' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value="EM&Scaron;O" style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text"  id='${i}'>`);
  const content_input_2  = content_input_1.replaceAll("<input value='Ime' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Ime' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  const content_input_3  = content_input_2.replaceAll("<input value='Priimek' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Priimek' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  const content_input_4  = content_input_3.replaceAll("<input value='Datum' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Datum' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text"  id='${i}'>`);
  const content_input_5  = content_input_4.replaceAll("<input value='Pošta' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Po&scaron;ta' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  const content_input_6  = content_input_5.replaceAll("<input value='Kraj' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Kraj' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  const content_input_7  = content_input_6.replaceAll("<input value='Država' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Država' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  const content_input_8  = content_input_7.replaceAll("<input value='Telefon' style='border-radius: 8px; border: 2px solid black;' readonly>", `<input value='Telefon' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  const content_input_9 = content_input_8.replaceAll(`<input value='${placeholder}' style="border-radius: 8px; border: 2px solid black;" readonly>`, `<input value='${placeholder}' style="border-radius: 8px; border: 2px solid black;" readonly="readonly" type="text" id='${i}'>`);
  polje_string = content_input_9;
  console.log("polje_string " + polje_string);
i++;
event_value = "";
}

var shouldHandleKeyDown = true;
function dragStart(event) {
  event.dataTransfer.setData("text/html", event.currentTarget.id);
  inputValue = event.currentTarget.id;
  
}

var text_editor = document.getElementById('text_editor');
document.addEventListener('dragstart', function (event) {
  console.log(event.target.id)
  if(event.target.id == "input_8"){
    input_pomeri = true;
    event_value = event.target.value
    vprasanje_pomeri = true;
    event.dataTransfer.setData("text/html", `<input value='${event.target.value}' style='border-radius: 8px; border: 2px solid black;' readonly>`);
  }else{
    event.dataTransfer.setData("text/html", `<input value='${inputValue}' style='border-radius: 8px; border: 2px solid black;' readonly>`);
  }
  
  nekaj = true;
});

function vpis_vprasanja(){
  if(vprasanje_pomeri == true){
    vprasanje_pomeri = false;
    var vpranaje2 = document.getElementById("vprasanje_input2").value;
    polje_vprasanj[polje_vprasanj.length] = vpranaje2;
  }else{
    var vpranaje = document.getElementById("vprasanje_input").value;
    polje_vprasanj[polje_vprasanj.length] = vpranaje;
  }
  

  console.log(polje_vprasanj);
  json_file = JSON.stringify(polje_vprasanj);
  console.log(json_file);
  
  let vprasanja = document.getElementById("vprasanja");
  vprasanja.setAttribute("value", json_file);
  let inputString = document.getElementById("poljeString");
  inputString.setAttribute("value", polje_string);
  let besedilo = document.getElementById("besedilo");
  let html = tinyMCE.get('text_editor').getContent();
  console.log(html);
  besedilo.setAttribute("value", html);
  
  }
