function myclick(a){
  myform.display.value+=a;
}

function fneval(){
  myform.display.value=eval(myform.display.value);
}

function ac(){
  myform.display.value='0';
}

function backspace(){
  let prevalue=myform.display.value;
  myform.display.value=prevalue.substr(0,prevalue.length-1);
}

function fnsin(){
  myform.display.value=Math.sin(myform.display.value);
}

function fncos(){
  myform.display.value=Math.cos(myform.display.value);
}

function fntan(){
  myform.display.value=Math.tan(myform.display.value);
}

function fntan(){
  myform.display.value=Math.tan(myform.display.value);
}

function square(){
  myform.display.value=Math.pow(myform.display.value,2);
}

function sqrt(){
  myform.display.value=Math.sqrt(myform.display.value);
}

function factorial() {
  let inputValue = myform.display.value;
  let checkValue = isNaN(inputValue);

  if (!checkValue) {
    myform.display.value = inputValue;
    var final = 1;

    while(inputValue >= 1) {
      final = final * inputValue;
      inputValue--;
    }

    myform.display.value = final;
  }
}