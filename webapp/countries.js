// countries.js

async function populateCountries() {
    const select = document.getElementById("country");
    
    try {
        const response = await fetch("https://restcountries.com/v3.1/all");
        const countries = await response.json();
        
        countries.forEach(function(country) {
            const option = document.createElement("option");
            option.value = country.alpha2Code;
            option.text = country.name.common;
            select.appendChild(option);
        });
    } catch (error) {
        console.error("Error fetching countries:", error);
    }
}

// Call the function to populate the select element when the page loads
window.onload = populateCountries;
