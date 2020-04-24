window.onload = function() {
    getCovidStats();
}

function getCovidStats() {
    fetch('https://coronavirus-tracker-api.herokuapp.com/v2/locations/132')
        .then(function(resp) { return resp.json() })
        .then(function(data) {
            let recover = data.location.latest.recovered;
            let confirmedCases = data.location.latest.confirmed;
            let deaths = data.location.latest.deaths;

            document.getElementById('tot').innerHTML = confirmedCases.toLocaleString('en');
            document.getElementById('mati').innerHTML = deaths.toLocaleString('en');
            document.getElementById('sembuh').innerHTML = recover.toLocaleString('en');

        })
        .catch(function() {
            console.log("error");
        })
    setTimeout(getCovidStats, 3600) // update every 12 hours
}