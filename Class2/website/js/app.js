const slides = document.querySelectorAll(".slide");
const nextBtn = document.querySelector(".nextBtn");
const prevBtn = document.querySelector(".prevBtn");
slides.forEach(function (slide, index) {
  slide.style.left = `${index * 100}%`;
});
let counter = 0;
nextBtn.addEventListener("click", function () {
  counter++;
  carousel();
});

prevBtn.addEventListener("click", function () {
  counter--;
  carousel();
});

function carousel() {
  // working with slides
  // if (counter === slides.length) {
  //   counter = 0;
  // }
  // if (counter < 0) {
  //   counter = slides.length - 1;
  // }
  // working with buttons
  if (counter < 0) {
    counter = 0;
  }
  if (counter < slides.length - 1) {
    nextBtn.style.display = "block";
  } else {
    nextBtn.style.display = "none";
  }
  if (counter > 0) {
    prevBtn.style.display = "block";
  } else {
    prevBtn.style.display = "none";
  }
  slides.forEach(function (slide) {
    slide.style.transform = `translateX(-${counter * 100}%)`;
  });
}

prevBtn.style.display = "none";





// var theForm = document.forms["cakeform"];
// var cake_prices = new Array();
// cake_prices["Round6"]=20;
// cake_prices["Round8"]=25;
// cake_prices["Round10"]=35;
// cake_prices["Round12"]=75;

// function getCakeSizePrice()
// {
//     var cakeSizePrice=0;
//     //Get a reference to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the cake the user Chooses name=selectedCake":
//     var selectedCake = theForm.elements["selectedcake"];
//     //Here since there are 4 radio buttons selectedCake.length = 4
//     //We loop through each radio buttons
//     for(var i = 0; i < selectedCake.length; i++)
//     {
//         //if the radio button is checked
//         if(selectedCake[i].checked)
//         {
//             //we set cakeSizePrice to the value of the selected radio button
//             //i.e. if the user choose the 8" cake we set it to 25
//             //by using the cake_prices array
//             //We get the selected Items value
//             //For example cake_prices["Round8".value]"
//             cakeSizePrice = cake_prices[selectedCake[i].value];
//             //If we get a match then we break out of this loop
//             //No reason to continue if we get a match
//             break;
//         }
//     }
//     //We return the cakeSizePrice
//     return cakeSizePrice;
// }
// var filling_prices= new Array();
// filling_prices["None"]=0;
// filling_prices["Lemon"]=5;
// filling_prices["Custard"]=5;
// filling_prices["Fudge"]=7;
// filling_prices["Mocha"]=8;
// filling_prices["Raspberry"]=10;

// //This function finds the filling price based on the
// //drop down selection
// function getFillingPrice()
// {
//     var cakeFillingPrice=0;
//     //Get a reference to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the select id="filling"
//     var selectedFilling = theForm.elements["filling"];

//     //set cakeFilling Price equal to value user chose
//     //For example filling_prices["Lemon".value] would be equal to 5
//     cakeFillingPrice = filling_prices[selectedFilling.value];

//     //finally we return cakeFillingPrice
//     return cakeFillingPrice;
// }
// //candlesPrice() finds the candles price based on a check box selection
// function candlesPrice()
// {
//     var candlePrice=0;
//     //Get a reference to the form id="cakeform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the checkbox id="includecandles"
//     var includeCandles = theForm.elements["includecandles"];

//     //If they checked the box set candlePrice to 5
//     if(includeCandles.checked==true)
//     {
//         candlePrice=5;
//     }
//     //finally we return the candlePrice
//     return candlePrice;
// }
// function getQuantity()
// {
//     //Assume form with id="theform"
//     var theForm = document.forms["cakeform"];
//     //Get a reference to the TextBox
//     var quantity = theForm.elements["quantity"];
//     var howmany =0;
//     //If the textbox is not blank
//     if(quantity.value!="")
//     {
//         howmany = parseInt(quantity.value);
//     }
// return howmany;
// }

// function getTotal()
// {
//     //Here we get the total price by calling our function
//     //Each function returns a number so by calling them we add the values they return together
//     var cakePrice = getCakeSizePrice() + getFillingPrice() +
//             candlesPrice() + insciptionPrice();

//     //display the result
//     document.getElementById('totalPrice').innerHTML =
//             "Total Price For Cake $"+cakePrice;

// }