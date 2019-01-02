<html>
<head>
<script type="text/javascript">
var minutes = 0;
var interval;

function timer() {
  minutes = minutes - 1;

  document.getElementById("txt").innerHTML= minutes + " minutes"; // watch for spelling

  if (minutes <= 0) {
     //counter ended, do something here
     window.clearInterval(interval);
     return;
  }
}


function checktimer() {
    var checkbox1 = form.preference.value;
    var checkbox2 = form.eggsize.value;
    var checkbox3 = form.suacepansize.value;

    if(checkbox1 == 1 && checkbox2 == 1 && checkbox3 == 1) {
        minutes = 3;
        s = 0;
    }

    interval = setInterval(timer, 1000);

    return false;
}

</script>

</head>
<body>
<div id = "txt"> </div>

    <form id="form" onsubmit="return checktimer()">

    <div class = "question">
    <div class="circle"> <h2 class = "whiteh2"> 1 </h2></div>
    <div class="question-text"><h6>How do you like your egg? </h6> </div>
    <select id="prefernce" name ="preference">
  <option value="1">Soft</option>
  <option value="2">Medium</option>
  <option value="3">Hard</option>
</select>

    </div> <!--Ends the question div-->

<div class = "question">
    <div class="circle"> <h2 class = "whiteh2"> 2 </h2></div>
    <div class="question-text"><h6>What size is your egg? </h6> </div>
    <select id="eggsize" name = "eggsize">
  <option value="1">Small</option>
  <option value="2">Medium</option>
  <option value="3">Large</option>
</select>

    </div> <!--Ends the question div-->

    <div class = "question">
    <div class="circle"> <h2 class = "whiteh2"> 3 </h2></div>
    <div class="question-text"><h6>What size is the saucepan? </h6> </div>
    <select id="saucepansize" name = "suacepansize">
  <option value="1">Small</option>
  <option value="2">Medium</option>
  <option value="3">Large</option>
</select>

    </div> <!--Ends the question div-->

        <div class = "question">
            <input type="submit" id="button" name="submit" value = "Go"/> <br/> 
        </div>

    </form>

    </div>  <!--Ends the main form div-->

</body>
</html>
