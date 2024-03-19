// JavaScript source code
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

/*  **************************************************************** */
//TARGET LEAGUE SECTİON
// Get references to the select elements and the image
const targetLeagueSelect = document.getElementById("targetLeague");
const targetLeagueDivisionSelect = document.getElementById("targetLeagueDivision");
const targetLeagueImage = document.getElementById("targetLeagueImage");

// Add event listeners to the select elements
targetLeagueSelect.addEventListener("change", updateTargetLeagueImage);
targetLeagueDivisionSelect.addEventListener("change", updateTargetLeagueImage);

// Function to update the league image based on selections
function updateTargetLeagueImage() {
    // Get the selected league and division
    const selectedTargetLeague = targetLeagueSelect.value;
    const selectedTargetDivision = targetLeagueDivisionSelect.value;

    // Generate the image file path based on selections
    const targetImagePath = `assets/images/leagues/${selectedTargetLeague}${selectedTargetDivision}.png`;

    // Set the src attribute of the league image
    targetLeagueImage.src = targetImagePath;
}

// Initial call to set the default league image
updateTargetLeagueImage();

document.getElementById("targetLeague").addEventListener("change", function () {
    // Seçilen değeri kontrol et
    var selectedValue = this.value;
    var targetLeagueDivision = document.getElementById("targetLeagueDivision");
    if (selectedValue === "immortal") {
        targetLeagueDivision.disabled = true;
        targetLeagueDivision.value = "1"
        updateTargetLeagueImage();
    }
    else {
        targetLeagueDivision.disabled = false;
    }
});


var originalCurrentLeague = document.getElementById("currentLeague").value;
var originalLeagueDivision = document.getElementById("leagueDivision").value;
var originalTargetLeague = document.getElementById("targetLeague").value;
var originalTargetLeagueDivision = document.getElementById("targetLeagueDivision").value;

function validateForm() {
    var leagueValues = {
        "iron": 1,
        "bronze": 2,
        "silver": 3,
        "gold": 4,
        "platinum": 5,
        "diamond": 6,
        "ascendant": 7
    };

    var currentLeague = document.getElementById("currentLeague").value;
    var currentDivision = parseInt(document.getElementById("leagueDivision").value);
    var targetLeague = document.getElementById("targetLeague").value;
    var targetDivision = parseInt(document.getElementById("targetLeagueDivision").value);

    // Compare the leagues and divisions using assigned values
    if (leagueValues[currentLeague] === leagueValues[targetLeague]) {
        if (targetDivision < currentDivision) {
            Swal.fire("Hedef Lig Aşaması, Mevcut Lig Aşamasından düşük olamaz.");
            return false;
        }
    }
    else if (leagueValues[currentLeague] > leagueValues[targetLeague]) {
        Swal.fire("Hedef Lig, Mevcut Ligden düşük olamaz.");
        return false;
    }

    return true;
}

// Assign the function to run on change of each select element
document.getElementById("currentLeague").onchange = validateForm;
document.getElementById("leagueDivision").onchange = validateForm;
document.getElementById("targetLeague").onchange = validateForm;
document.getElementById("targetLeagueDivision").onchange = validateForm;

function calculatePrice(currentLeague, leagueDivision, targetLeague, targetLeagueDivision) {
    // Bu, fiyat hesaplama mantığını içerir.
    const prices = {
        iron: [0, 60, 120],
        bronze: [170, 250, 300],
        silver: [400, 490, 580],
        gold: [750, 850, 970],
        platinum: [1100, 1250, 1400],
        diamond: [1570, 1870, 2200],
        ascendant: [2650, 3250, 3750],
        immortal: [4400]
    };

    return prices[targetLeague][targetLeagueDivision - 1] - prices[currentLeague][leagueDivision - 1];
}

function updatePrice() {
    var currentLeague = document.getElementById("currentLeague").value;
    var leagueDivision = document.getElementById("leagueDivision").value;
    var targetLeague = document.getElementById("targetLeague").value;
    var targetLeagueDivision = document.getElementById("targetLeagueDivision").value;
    var extraWin = document.getElementById("extraWin");
    var liveStream = document.getElementById("liveStream");
    var offlineMode = document.getElementById("offlineMode");
    var priceElement = document.getElementById("price");
    var leaguePoints = document.getElementById("leaguePoints").value;

    if ((currentLeague === targetLeague) && (leagueDivision === targetLeagueDivision)) {
        document.getElementById("orderBtn").disabled = true;
        extraWin.disabled = true;
        liveStream.disabled = true;
        offlineMode.disabled = true;
        Swal.fire("Hedef Lig Aşaması, Mevcut Lig ile aynı olamaz.");
    } else {
        document.getElementById("orderBtn").disabled = false;
        extraWin.disabled = false;
        liveStream.disabled = false;
        offlineMode.disabled = false;
    }

    var price = calculatePrice(currentLeague, leagueDivision, targetLeague, targetLeagueDivision);

    if (leaguePoints === "2") {
        var tempPrice = Math.floor(price - ((price * 8) / 100));
        price = tempPrice;
    }

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

// Mevcut ligin seçimini izle
function changeLeague() {
    var leagues = ["iron", "bronze", "silver", "gold", "platinum", "diamond", "ascendant", "immortal"];
    var leaguesDivision = ["1", "2", "3"];

    var currentLeagueElement = document.getElementById("currentLeague");
    var leagueDivisionElement = document.getElementById("leagueDivision");
    var targetLeagueElement = document.getElementById("targetLeague");
    var targetLeagueDivisionElement = document.getElementById("targetLeagueDivision");

    var currentLeague = currentLeagueElement.value;
    var leagueDivision = leagueDivisionElement.value;

    var currentLeagueIndex = leagues.indexOf(currentLeague);
    var currentLeagueDivisionIndex = leaguesDivision.indexOf(leagueDivision);

    if (currentLeague === "ascendant" && leagueDivision === "3") {
        targetLeagueElement.value = leagues[7];
        targetLeagueDivisionElement.disabled = true;
        targetLeagueDivisionElement.value = "1"
        updateTargetLeagueImage();
        return;
    }
    if (leagueDivision === "1" || leagueDivision === "2") {
        targetLeagueElement.value = leagues[currentLeagueIndex];
        targetLeagueDivisionElement.value = leaguesDivision[currentLeagueDivisionIndex + 1];
    }
    else if (leagueDivision === "3") {
        targetLeagueElement.value = leagues[currentLeagueIndex + 1];
        targetLeagueDivisionElement.value = leaguesDivision[0];
    }
    updateTargetLeagueImage();
}

// Get references to the checkswitch elements
const extraWin = document.getElementById("extraWin");
const liveStream = document.getElementById("liveStream");
const offlineMode = document.getElementById("offlineMode");
const leaguePoints = document.getElementById("leaguePoints");

// Assign the function to run on change of each select element
// Add event listeners to the select elements
currentLeagueSelect.addEventListener("change", function () {
    if (validateForm()) {
        updatePrice();
    }
    else {
        changeLeague();
        updatePrice();
    }
});
leagueDivisionSelect.addEventListener("change", function () {
    if (validateForm()) {
        updatePrice();
    }
    else {
        changeLeague();
        updatePrice();
    }
});
targetLeagueSelect.addEventListener("change", function () {
    if (validateForm()) {
        updatePrice();
    }
    else {
        changeLeague();
        updatePrice();
    }
});
targetLeagueDivisionSelect.addEventListener("change", function () {
    if (validateForm()) {
        updatePrice();
    }
    else {
        changeLeague();
        updatePrice();
    }
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

leaguePoints.addEventListener("change", function () {

    updatePrice();
});



