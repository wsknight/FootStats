//Global Variables

var slider = document.getElementById("slider");
var sliderOutput = document.getElementById("valueNum");
sliderOutput.innerHTML = calcSliderKick(slider.value);
slider.oninput = function() {
  sliderOutput.innerHTML = calcSliderKick(this.value);
}

var sliderTwo = document.getElementById("sliderTwo");
var sliderOutputTwo = document.getElementById("valueNumTwo");
sliderOutputTwo.innerHTML = calcSliderKick(sliderTwo.value);
sliderTwo.oninput = function() {
  sliderOutputTwo.innerHTML = calcSliderKick(this.value);
}


getDate();


//Functions


//Function that gets current date
function getDate() {
  let date = new Date().toISOString().substring(0, 10)
  document.getElementById("gameDate").value = date;
}





function calcSliderKick(num) {
  let absnum = 50 - Math.abs(num);
  if (num == 0) {
    return ("On The: 50");
  }
  if (absnum == 0) {
    if (num == -50) {
      return ("On The: Left 20 (Touchback)");
    }
    else {
      return ("On The: Right 20 (Touchback)");
    }
  }

  if (num > 0) {
    return ("On The: Right " + absnum);
  }
  else {
    return ("On The: Left " + absnum);
  }
}


function calcSlider(num) {
  let absnum = 50 - Math.abs(num);
  if (num == 0) {
    return ("On The: 50");
  }
  if (absnum == 0) {
    if (num == -50) {
      return ("Touchdown!!!");
    }
    else {
      return ("Touchdown!!!");
    }
  }

  if (num > 0) {
    return ("On The: Right " + absnum);
  }
  else {
    return ("On The: Left " + absnum);
  }
}



//   cursor parking |||||||||||||
//   ------------------------------
//      M            |||||||||||||
//      L 


