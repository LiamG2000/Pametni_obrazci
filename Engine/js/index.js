<<<<<<< HEAD:index.js

   var input = document.createElement("input");
   var text_editor = document.getElementById('text_editor');
   document.addEventListener('dragstart', function (event) {
   event.dataTransfer.setData("text/html", input.outerHTML);
   
=======
document.addEventListener('dragstart', function (event) {
    event.dataTransfer.setData('Text', event.target.innerHTML);
    //event.dataTransfer.setData('Text', prozi());
    //prozi();
    
>>>>>>> 67b3baee9e54e3da79dd4d66c99f15b5f05e53f3:Engine/js/index.js
  });

  document.addEventListener('drop', function (event) {
   prompt("!23");
   
  });
  function myFunction(){
   setEndOfContenteditable(text_editor);
  }  

  function setEndOfContenteditable(contentEditableElement)
{
    var range,selection;
    if(document.createRange)//Firefox, Chrome, Opera, Safari, IE 9+
    {
        range = document.createRange();//Create a range (a range is a like the selection but invisible)
        range.selectNodeContents(contentEditableElement);//Select the entire contents of the element with the range
        range.collapse(false);//collapse the range to the end point. false means collapse to end rather than the start
        selection = window.getSelection();//get the selection object (allows you to change selection)
        selection.removeAllRanges();//remove any selections already made
        selection.addRange(range);//make the range you have just created the visible selection
    }
    else if(document.selection)//IE 8 and lower
    { 
        range = document.body.createTextRange();//Create a range (a range is a like the selection but invisible)
        range.moveToElementText(contentEditableElement);//Select the entire contents of the element with the range
        range.collapse(false);//collapse the range to the end point. false means collapse to end rather than the start
        range.select();//Select the range (make it the visible selection
    }
}


<<<<<<< HEAD:index.js
=======
 function prozi(){
    let nekaj = document.getElementById("text");
    var input = document.createElement("input");
    input.type = "text";
    input.className = "css-class-name"; // set the CSS class
    input.setAttribute("placeholder", "Vnosno polje")
    nekaj.appendChild(input); // put it into the DOM
 }
>>>>>>> 67b3baee9e54e3da79dd4d66c99f15b5f05e53f3:Engine/js/index.js
