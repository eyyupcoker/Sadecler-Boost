//CURRENT LEAGUE SECTİON
// Get references to the select elements and the image
const currentLeagueSelect = document.getElementById("currentLeague");
const leagueDivisionSelect = document.getElementById("leagueDivision");
const leagueImage = document.getElementById("leagueImage");

// Add event listeners to the select elements
currentLeagueSelect.addEventListener("change", updateLeagueImage);
leagueDivisionSelect.addEventListener("change", updateLeagueImage);

// Function to update the league image based on selections
function updateLeagueImage() {
    // Get the selected league and division
    const selectedLeague = currentLeagueSelect.value;
    const selectedDivision = leagueDivisionSelect.value;

    // Generate the image file path based on selections
    const imagePath = `assets/images/leagues/${selectedLeague}${selectedDivision}.png`;

    // Set the src attribute of the league image
    leagueImage.src = imagePath;
}
// Initial call to set the default league image
updateLeagueImage();

document.getElementById("currentLeague").addEventListener("change", function () {
    // Seçilen değeri kontrol et
    var selectedValue = this.value;
    var currentLeagueDivision = document.getElementById("leagueDivision");
    if (selectedValue === "radiant") {
        currentLeagueDivision.disabled = true;
        currentLeagueDivision.value = "1"
        updateLeagueImage();
    }
    else {
        currentLeagueDivision.disabled = false;
    }
});

function calculatePrice(currentLeague, leagueDivision, winNumber) {
    // Bu, fiyat hesaplama mantığını içerir.
    const prices = {
        iron: [8, 9, 10],
        bronze: [11, 12, 13],
        silver: [16, 17, 18],
        gold: [20, 21, 23],
        platinum: [25, 28, 30],
        diamond: [54, 72, 82],
        ascendant: [87, 95, 103],
        immortal: [150, 180, 210],
        radiant: [320]
    };

    return prices[currentLeague][leagueDivision-1] * winNumber;
}

function updatePrice() {
    var currentLeague = document.getElementById("currentLeague").value;
    var leagueDivision = document.getElementById("leagueDivision").value;
    var winNumber = document.getElementById("winNumber").value;
    var extraWin = document.getElementById("extraWin");
    var liveStream = document.getElementById("liveStream");
    var offlineMode = document.getElementById("offlineMode");
    var priceElement = document.getElementById("price");


    var price = calculatePrice(currentLeague, leagueDivision, winNumber);

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
leagueDivisionSelect.addEventListener("change", function () {
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



