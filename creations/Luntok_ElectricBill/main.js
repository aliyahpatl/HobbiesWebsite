function computeUnit() {
  var previous = parseFloat(document.getElementById("previous_reading").value);
  var current = parseFloat(document.getElementById("current_reading").value);
  var unit = parseFloat(document.getElementById("unit").value);
  
  //If user omits a field, it will display a REMINDER message immediately
  if (isNaN(previous) || isNaN(current) || isNaN(unit)) {
    document.getElementById("result").innerHTML = "";
    document.getElementById("previous_reading").setCustomValidity("Kindly complete all the required fields.");
    document.getElementById("current_reading").setCustomValidity("Kindly complete all the required fields.");
    document.getElementById("unit").setCustomValidity("Kindly complete all the required fields.");
  } else {
    var result = (current - previous) * unit; //formula to get monthly consumption
    document.getElementById("previous_reading").setCustomValidity("");
    document.getElementById("current_reading").setCustomValidity("");
    document.getElementById("unit").setCustomValidity("");
    document.getElementById("result").innerHTML = result.toFixed(2); //2 decimal points for consumption
  }
}
