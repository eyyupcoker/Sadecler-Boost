//CURRENT LEAGUE SECTİON
// Get references to the select elements and the image
const currentLeagueSelect = document.getElementById("currentLeague");
const leagueImage = document.getElementById("leagueImage");

// Add event listeners to the select elements
currentLeagueSelect.addEventListener("change", updateLeagueImage);

// Function to update the league image based on selections
function updateLeagueImage() {
    // Get the selected league
    const selectedLeague = currentLeagueSelect.value;

    // Generate the image file path based on selections
    var imagePath = ``;
    if(selectedLeague==="radiant"){
        imagePath = `assets/images/leagues/${selectedLeague}1.png`
    }
    else{
        imagePath = `assets/images/leagues/${selectedLeague}3.png`
    }

    // Set the src attribute of the league image
    leagueImage.src = imagePath;
}
// Initial call to set the default league image
updateLeagueImage();


function calculatePrice(currentLeague, winNumber) {
    // Bu, fiyat hesaplama mantığını içerir.
    const prices = {
        unranked: [21],
        iron: [18],
        bronze: [20],
        silver: [22],
        gold: [25],
        platinum: [27],
        diamond: [55],
        ascendant: [62],
        immortal: [95],
        radiant: [120]
    };

    return prices[currentLeague] * winNumber;
}

function updatePrice() {
    var currentLeague = document.getElementById("currentLeague").value;
    var winNumber = document.getElementById("winNumber").value;
    var extraWin = document.getElementById("extraWin");
    var liveStream = document.getElementById("liveStream");
    var offlineMode = document.getElementById("offlineMode");
    var priceElement = document.getElementById("price");


    var price = calculatePrice(currentLeague, winNumber);

    if (extraWin.checked == true) {
        price += 15;
    }
    if (liveStream.checked == true) {
        price += 50;
    }
    if (offlineMode.checked == true) {
        price += 15;
    }

    priceElement.innerHTML = price + " TL";

    var calculatedPrice = price; // Hesaplanan fiyat
    document.getElementById('hiddenPrice').value = calculatedPrice;
}
updatePrice();


// Get references to the checkswitch elements
const extraWin = document.getElementById("extraWin");
const liveStream = document.getElementById("liveStream");
const offlineMode = document.getElementById("offlineMode");
const winNumber = document.getElementById("winNumber");

// Assign the function to run on change of each select element
// Add event listeners to the select elements
currentLeagueSelect.addEventListener("change", function () {
    updatePrice();
});

extraWin.addEventListener("change", function () {
    updatePrice();
});

liveStream.addEventListener("change", function () {
    updatePrice();
});

offlineMode.addEventListener("change", function () {
    updatePrice();
});

winNumber.addEventListener("change", function () {
    updatePrice();
});



