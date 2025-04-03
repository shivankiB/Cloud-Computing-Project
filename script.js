function sound(){
    var snd = new Audio('sound.mp3')   
    snd.play()
}
function changeCurrency() {
  alert('Currency changed');
  var selectedCurrency = document.getElementById("currency").value;
  var prices = document.querySelectorAll(".price");

  for (var i = 0; i < prices.length; i++) {
      var price = prices[i].textContent.trim();
      var currentCurrency = price.slice(0, 1);
      var currentPrice = parseFloat(price.slice(1));
      var convertedPrice;

      if (selectedCurrency === "usd" && currentCurrency === "₹") {
        convertedPrice = currentPrice / 73.5; // conversion rate for INR to USD
        prices[i].textContent = "$" + convertedPrice.toFixed(2);
      }
      else if (selectedCurrency === "inr" && currentCurrency === "€") {
        convertedPrice = currentPrice * 73.5; // conversion rate for USD to INR
        prices[i].textContent = "₹" + convertedPrice.toFixed(2);
    }
      if (selectedCurrency === "usd" && currentCurrency === "₹") {
          convertedPrice = currentPrice / 73.5; // conversion rate for INR to USD
          prices[i].textContent = "$" + convertedPrice.toFixed(2);
      }
      else if (selectedCurrency === "usd" && currentCurrency === "€") {
        convertedPrice = currentPrice /1.20; // conversion rate for EUR to USD
        prices[i].textContent = "$" + convertedPrice.toFixed(2);
    }
    else if (selectedCurrency === "eur" && currentCurrency === "$") {
      convertedPrice = currentPrice *1.20; // conversion rate for USD to EUR
      prices[i].textContent = "€" + convertedPrice.toFixed(2);
  }
    
      else if (selectedCurrency === "eur" && currentCurrency === "₹") {
        convertedPrice = currentPrice /90.0323; // conversion rate for INR to EUR
        prices[i].textContent = "€" + convertedPrice.toFixed(2);
    }
    else if (selectedCurrency === "inr" && currentCurrency === "€") {
      convertedPrice = currentPrice * 90.0323; // conversion rate for EUR to INR
      prices[i].textContent = "₹" + convertedPrice.toFixed(2);
  }
  }
}