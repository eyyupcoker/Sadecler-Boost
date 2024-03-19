        document.getElementById("currentPoints").addEventListener("input", calculatePrice);
        document.getElementById("targetPoints").addEventListener("input", calculatePrice);
        document.getElementById("extraWin").addEventListener("input", calculatePrice);
        document.getElementById("liveStream").addEventListener("input", calculatePrice);
        document.getElementById("offlineMode").addEventListener("input", calculatePrice);

        function calculatePrice() {
            var currentPoints = parseInt(document.getElementById("currentPoints").value);
            var targetPoints = parseInt(document.getElementById("targetPoints").value);
            var extraWin = document.getElementById("extraWin");
            var liveStream = document.getElementById("liveStream");
            var offlineMode = document.getElementById("offlineMode");

            //ALERT DESİGN START<------------------------------------------------------>
            //Alert when If current points or target points are not an number
            if(isNaN(currentPoints)===true|| isNaN(targetPoints)===true){
                document.getElementById("pointAlert3").style.display = "block";
                document.getElementById("pointAlert4").style.display = "none";
                document.getElementById("pointAlert2").style.display = "none";
                document.getElementById("pointAlert").style.display = "none";
                document.getElementById("price").textContent = "0 TL";
                document.getElementById("orderBtn").disabled = true;
                extraWin.disabled = true;
                liveStream.disabled = true;
                offlineMode.disabled = true;
                return;
            }
            else{
                document.getElementById("pointAlert3").style.display = "none";
                document.getElementById("orderBtn").disabled = false;
                extraWin.disabled = false;
                liveStream.disabled = false;
                offlineMode.disabled = false;
                var price = calculatePriceBasedOnPoints(currentPoints, targetPoints);
                document.getElementById("price").textContent =  price + " TL";
            }

            //Alert when If current points or target points less then 0 or greater then 1000
            if(currentPoints<0 || currentPoints > 999 || targetPoints<0 || targetPoints>999){
                document.getElementById("pointAlert2").style.display = "block";
                document.getElementById("pointAlert4").style.display = "none";
                document.getElementById("pointAlert").style.display = "none";
                document.getElementById("price").textContent = "0 TL";
                document.getElementById("orderBtn").disabled = true;
                extraWin.disabled = true;
                liveStream.disabled = true;
                offlineMode.disabled = true;
                return;
            }
            else{
                document.getElementById("pointAlert2").style.display = "none";
                document.getElementById("orderBtn").disabled = false;
                extraWin.disabled = false;
                liveStream.disabled = false;
                offlineMode.disabled = false;
                var price = calculatePriceBasedOnPoints(currentPoints, targetPoints);
                document.getElementById("price").textContent =  price + " TL";
            }

            //Alert when If current points are higher then target points
            if (currentPoints >= targetPoints) {
                document.getElementById("pointAlert4").style.display = "block";
                document.getElementById("pointAlert").style.display = "none";
                document.getElementById("price").textContent = "0 TL";
                document.getElementById("orderBtn").disabled = true;
                extraWin.disabled = true;
                liveStream.disabled = true;
                offlineMode.disabled = true;
                return;
            } else {
                document.getElementById("pointAlert4").style.display = "none";
                document.getElementById("orderBtn").disabled = false;
                extraWin.disabled = false;
                liveStream.disabled = false;
                offlineMode.disabled = false;
                var price = calculatePriceBasedOnPoints(currentPoints, targetPoints);
                document.getElementById("price").textContent =  price + " TL";
            }

            //Alert when If target points - current points equal 20 or lower
            if (targetPoints - currentPoints < 20) {
                document.getElementById("pointAlert").style.display = "block";
                document.getElementById("price").textContent = "0 TL";
                document.getElementById("orderBtn").disabled = true;
                extraWin.disabled = true;
                liveStream.disabled = true;
                offlineMode.disabled = true;
            } else {
                document.getElementById("pointAlert").style.display = "none";
                document.getElementById("orderBtn").disabled = false;
                extraWin.disabled = false;
                liveStream.disabled = false;
                offlineMode.disabled = false;
                var price = calculatePriceBasedOnPoints(currentPoints, targetPoints);
                document.getElementById("price").textContent =  price + " TL";
            }
            //ALERT DESİGN END<------------------------------------------------------>

            var calculatedPrice = price; // Hesaplanan fiyat
            document.getElementById('hiddenPrice').value = calculatedPrice;
        }

        calculatePrice();

        function calculatePriceBasedOnPoints(currentPoints, targetPoints) {
            var price = 0;

            for (var i = currentPoints; i < targetPoints; i++) {
                price += getPricePerPoint(i);
            }

            if (document.getElementById("extraWin").checked) {
                price += 15;
            }
            if (document.getElementById("liveStream").checked) {
                price += 50;
            }
            if (document.getElementById("offlineMode").checked) {
                price += 15;
            }

            return price;
        }

        function getPricePerPoint(currentPoints) {
            if (currentPoints >= 0 && currentPoints < 100) {
                return 7;
            } else if (currentPoints >= 100 && currentPoints < 200) {
                return 9;
            } else {
                return 11; // Varsayılan fiyat, diğer tüm aralıklar için
            }
        }
