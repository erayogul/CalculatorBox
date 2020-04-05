var temperature = new Array();
temperature[0] = new Array("temperature","temperatureFromText","temperatureFromText");
temperature[1] = new Array("Celsius","temperatureFromText","temperatureFromTextNew");
temperature[2] = new Array("Fahrenheit", "5/9*(temperatureFromText-32)", "9/5*temperatureFromTextNew + 32");
temperature[3] = new Array("Kelvin", "temperatureFromText-273.15", "temperatureFromTextNew + 273.15");

var lenght = new Array();
lenght[0] = new Array("lenght","lenghtFromText","lenghtFromText");
lenght[1] = new Array("Meter","lenghtFromText","lenghtFromTextNew");
lenght[2] = new Array("Kilometer", "lenghtFromText*1000","lenghtFromTextNew/1000");
lenght[3] = new Array("Centimeter", "lenghtFromText*0.01","lenghtFromTextNew/0.01");
lenght[4] = new Array("Millimeter","lenghtFromText*0.001","lenghtFromTextNew/0.001");
lenght[5] = new Array("Micrometer", "lenghtFromText*0.000001","lenghtFromTextNew/0.000001");
lenght[6] = new Array("Nanometer", "lenghtFromText*0.000000001","lenghtFromTextNew/0.000000001");
lenght[7] = new Array("Mile","lenghtFromText*1609.35","lenghtFromTextNew/1609.35");
lenght[8] = new Array("Yard", "lenghtFromText*0.9144","lenghtFromTextNew/0.9144");
lenght[9] = new Array("Foot", "lenghtFromText*0.3048","lenghtFromTextNew/0.3048");
lenght[10] = new Array("Inch","lenghtFromText*0.0254","lenghtFromTextNew/0.0254");
lenght[11] = new Array("Light Year", "lenghtFromText*9.46066e+15","lenghtFromTextNew/9.46066e+15");

var area = new Array();
area[0] = new Array("Area","areaFromText");
area[1] = new Array("Square Meter","areaFromText","areaFromText");
area[2] = new Array("Square Kilometer", "areaFromText*1000000", "areaFromTextNew/1000000");
area[3] = new Array("Square Centimeter", "areaFromText*0.0001", "areaFromTextNew/0.0001");
area[4] = new Array("Square Millimeter", "areaFromText*0.000001", "areaFromTextNew/0.000001");
area[5] = new Array("Square Micrometer", "areaFromText*0.000000000001", "areaFromTextNew/0.000000000001");
area[6] = new Array("Hectare", "areaFromText*10000", "areaFromTextNew/10000");
area[7] = new Array("Square Mile", "areaFromText*2589990", "areaFromTextNew/2589990");
area[8] = new Array("Square Yard", "areaFromText*0.83612736", "areaFromTextNew/0.83612736");
area[9] = new Array("Square Foot", "areaFromText*0.09290304", "areaFromTextNew/0.09290304");
area[10] = new Array("Square Inch", "areaFromText*0.000645160", "areaFromTextNew/0.000645160");
area[11] = new Array("Acre", "areaFromText*4046.8564224", "areaFromTextNew/4046.8564224");

var weight = new Array();
weight[0] = new Array("Weight","wA");
weight[1] = new Array("Kilogram","weightFromText","weightFromText");
weight[2] = new Array("Gram", "weightFromText*0.001", "weightFromTextNew/0.001");
weight[3] = new Array("Milligram", "weightFromText*0.000001", "weightFromTextNew/0.000001");
weight[4] = new Array("Metric Ton", "weightFromText*1000", "weightFromTextNew/1000");
weight[5] = new Array("Long Ton", "weightFromText*1016.04608", "weightFromTextNew/1016.04608");
weight[6] = new Array("Short Ton", "weightFromText*907.184", "weightFromTextNew/907.184");
weight[7] = new Array("Pound", "weightFromText*0.453592", "weightFromTextNew/0.453592");
weight[8] = new Array("Ounce", "weightFromText*0.0283495", "weightFromTextNew/0.0283495");
weight[9] = new Array("Carrat", "weightFromText*0.0002", "weightFromTextNew/0.0002");
weight[10] = new Array("Atomic Mass Unit", "weightFromText*1.6605401999104288e-27", "weightFromTextNew/1.6605401999104288e-27");

var time = new Array();
time[0] = new Array("Time","mA");
time[1] = new Array("Second","timeFromText","timeFromText");
time[2] = new Array("Millisecond", "timeFromText*0.001", "timeFromTextNew/0.001");
time[3] = new Array("Microsecond", "timeFromText*0.000001", "timeFromTextNew/0.000001");
time[4] = new Array("Nanosecond", "timeFromText*0.000000001", "timeFromTextNew/0.000000001");
time[5] = new Array("Picosecond", "timeFromText*0.000000000001", "timeFromTextNew/0.000000000001");
time[6] = new Array("Minute", "timeFromText*60", "timeFromTextNew/60");
time[7] = new Array("Hour", "timeFromText*3600", "timeFromTextNew/3600");
time[8] = new Array("Day", "timeFromText*86400", "timeFromTextNew/86400");
time[9] = new Array("Week", "timeFromText*604800", "timeFromTextNew/604800");
time[10] = new Array("Month", "timeFromText*2629800", "timeFromTextNew/2629800");
time[11] = new Array("Year", "timeFromText*31557600", "timeFromTextNew/31557600");

var volume = new Array();
volume[0] = new Array("Volume","vA");
volume[1] = new Array("Cubic Meter","volumeFromText","volumeFromText");
volume[2] = new Array("Cubic Kilometer", "volumeFromText*1000000000", "volumeFromTextNew/1000000000");
volume[3] = new Array("Cubic Centimeter", "volumeFromText*0.000001", "volumeFromTextNew/0.000001");
volume[4] = new Array("Cubic Millimeter", "volumeFromText*1.0e-9", "volumeFromTextNew/1.0e-9");
volume[5] = new Array("Liter", "volumeFromText*0.001", "volumeFromTextNew/0.001");
volume[6] = new Array("Milliliter", "volumeFromText*0.000001", "volumeFromTextNew/0.000001");
volume[7] = new Array("US Gallon", "volumeFromText*0.00378541", "volumeFromTextNew/0.00378541");
volume[8] = new Array("US Quart", "volumeFromText*0.0009463525", "volumeFromTextNew/0.0009463525");
volume[9] = new Array("US Pint", "volumeFromText*0.00047317625", "volumeFromTextNew/0.00047317625");
volume[10] = new Array("US Cup", "volumeFromText*0.000236588125", "volumeFromTextNew/0.000236588125");
volume[11] = new Array("US Fluid Ounce", "volumeFromText*0.000029573515625", "volumeFromTextNew/0.000029573515625");
volume[12] = new Array("US Table Spoon", "volumeFromText*0.0000147867578125", "volumeFromTextNew/0.0000147867578125");
volume[13] = new Array("US Tea Spoon", "volumeFromText*4.9289192708333333333333333333333e-6", "volumeFromTextNew/4.9289192708333333333333333333333e-6");
volume[14] = new Array("Imperial Gallon", "volumeFromText*0.00454609", "volumeFromTextNew/0.00454609");
volume[15] = new Array("Imperial Quart", "volumeFromText*0.0011365225", "volumeFromTextNew/0.0011365225");
volume[16] = new Array("Imperial Pint", "volumeFromText*0.00056826125", "volumeFromTextNew/0.00056826125");
volume[17] = new Array("Imperial Fluid Ounce", "volumeFromText*0.0000284130625", "volumeFromTextNew/0.0000284130625");
volume[18] = new Array("Imperial Table Spoon", "volumeFromText*0.0000177581640625", "volumeFromTextNew/0.0000177581640625");
volume[19] = new Array("Imperial Tea Spoon", "volumeFromText*5.9193880208333333333333333333333e-6", "volumeFromTextNew/5.9193880208333333333333333333333e-6");
volume[20] = new Array("Cubic Mile", "volumeFromText*4.16818e+9", "volumeFromTextNew/4.16818e+9");
volume[21] = new Array("Cubic Yard", "volumeFromText*0.764554857984", "volumeFromTextNew/0.764554857984");
volume[22] = new Array("Cubic Foot", "volumeFromText*0.028316846592", "volumeFromTextNew/0.028316846592");
volume[23] = new Array("Cubic Inch", "volumeFromText*0.000016387064", "volumeFromTextNew/0.000016387064");



function convertTemperature(){
  var temperatureFromText = Number(document.getElementById('temperatureFromText').value);
  var temperatureFrom = document.getElementById('temperatureFrom').value;
  var temperatureTo = document.getElementById('temperatureTo').value;
  var temperatureToText = document.getElementById('temperatureToText');
  var temperatureFromTextNew = eval(temperature[temperatureFrom][1]);
  alert(temperatureFromTextNew);
  temperatureToText.value = eval(temperature[temperatureTo][2]);
}

function convertlenght(){
  var lenghtFromText = Number(document.getElementById('lenghtFromText').value);
  var lenghtFrom = document.getElementById('lenghtFrom').value;
  var lenghtTo = document.getElementById('lenghtTo').value;
  var lenghtToText = document.getElementById('lenghtToText');
  var lenghtFromTextNew = eval(lenght[lenghtFrom][1]);
  lenghtToText.value = eval(lenght[lenghtTo][2]);
}

function convertarea(){
  var areaFromText = Number(document.getElementById('areaFromText').value);
  var areaFrom = document.getElementById('areaFrom').value;
  var areaTo = document.getElementById('areaTo').value;
  var areaToText = document.getElementById('areaToText');
  var areaFromTextNew = eval(area[areaFrom][1]);
  areaToText.value = eval(area[areaTo][2]);
}

function convertweight(){
  var weightFromText = Number(document.getElementById('weightFromText').value);
  var weightFrom = document.getElementById('weightFrom').value;
  var weightTo = document.getElementById('weightTo').value;
  var weightToText = document.getElementById('weightToText');
  var weightFromTextNew = eval(weight[weightFrom][1]);
  weightToText.value = eval(weight[weightTo][2]);
}

function convertime(){
  var timeFromText = Number(document.getElementById('timeFromText').value);
  var timeFrom = document.getElementById('timeFrom').value;
  var timeTo = document.getElementById('timeTo').value;
  var timeToText = document.getElementById('timeToText');
  var timeFromTextNew = eval(time[timeFrom][1]);
  timeToText.value = eval(time[timeTo][2]);
}

function convertvolume(){
  var volumeFromText = Number(document.getElementById('volumeFromText').value);
  var volumeFrom = document.getElementById('volumeFrom').value;
  var volumeTo = document.getElementById('volumeTo').value;
  var volumeToText = document.getElementById('volumeToText');
  var volumeFromTextNew = eval(volume[volumeFrom][1]);
  volumeToText.value = eval(volume[volumeTo][2]);
}
