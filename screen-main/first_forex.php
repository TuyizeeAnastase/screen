<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency Exchange | Bank of Africa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff; /* added white background */
            color: #333; /* changed default text color to dark */
        }
        header {
            background-color: #fff; /* changed header color to green */
            color: #018657;
            padding: 5px 5px;
            text-align: center;
        }
        header img {
            height: 40px;
            vertical-align: middle;
        }
        main {
            padding: 10px;
            text-align: center; /* centered content */
        }
        table {
            width: 70%; /* centered table with 50% width */
            margin: 0 auto; /* centered table */
            border-collapse: collapse;
            border: 10px solid #018657; /* added borders to the table */
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            font-weight: bolder;
        }
        th {
            background-color: #018657;
            color: #fff;
            font-weight: bolder;
        }
        footer {
            background-color: #018657; /* changed footer color to green */
            color: #fff;
            padding: 10px 20px;
            text-align: center;
            position: fixed;
            font-size: 2rem;
            bottom: 0;
            width: 100%;
            height: 40px;
        }
        .flag {
            width: 30px;
            height: 20px;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo">
        <h1>Forex Exchange Rates</h1><span class="flag-icon flag-icon-ad flag-icon-squared"></span>
    </header>
    <main>
        <table id="exchange-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Country</th>
                    <th>Currency</th>
                    <th>Buy</th>
                    <th>Sell</th>
                </tr>
            </thead>
            <tbody>
                <!-- Table rows will be dynamically added here -->
            </tbody>
        </table>
    </main>
    <footer id="footer"></footer>

    <script>
        // Dummy data for demonstration
        const currencies = [
            { country: "UNITED STATES DOLLAR", currency: "USD", buy: "1,298.9930", sell: "1.389.8945", flag: "./usa.png" },
            { country: "EURO", currency: "EUR", buy: "1,383.9691", sell: "1,486.7030", flag: "./euro.png" },
            { country: "BRITISH POUNDS", currency: "GBP", buy: "1,624.9879", sell: "1,731.6969", flag: "./british.png" },
            { country: "CANADIAN DOLLARS", currency: "CAD", buy: "946.1583", sell: "1,008.2902", flag: "./canada.png" },
            { country: "KENYAN SHILLINGS", currency: "KSH", buy: "9.6574", sell: "13.2956", flag: "./kenya.png" }
        ];

        // Function to populate table rows
        function populateTable() {
            const tableBody = document.querySelector("#exchange-table tbody");

            currencies.forEach(currency => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td class="flag" style="background-image: url(${currency.flag});"></td>
                    <td>${currency.country}</td>
                    <td>${currency.currency}</td>
                    <td>${currency.buy}</td>
                    <td>${currency.sell}</td>
                `;
                tableBody.appendChild(row);
            });
        }

        // Function to update footer with current date and time
        function updateFooter() {
            const footer = document.querySelector("#footer");
            const currentDate = new Date().toLocaleDateString();
            const currentTime = new Date().toLocaleTimeString();
            footer.innerText = `Last updated: ${currentDate}`;
        }

        // Call functions to populate table and update footer
        populateTable();
        updateFooter();

        // Update date and time every second
        setInterval(updateFooter, 1000);
        setTimeout(function() {
            window.location.href = "second_forex.php";
        }, 10000);
    </script>
</body>
</html>
