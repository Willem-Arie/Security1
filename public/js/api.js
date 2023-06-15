const headers = {
    'Accept': 'application/json'
};

async function getCarbonIntensity() {
    try {
        const response = await fetch('https://api.carbonintensity.org.uk/intensity/date', {
            method: 'GET',
            headers: headers
        });

        const body = await response.json();
        for (let key in body.data) {
            const record = [];
            record.push(body.data[key].from, body.data[key].to, body.data[key].intensity.forecast, body.data[key].intensity.actual, body.data[key].intensity.index);
            console.log(record);
            const domElement = document.querySelector('.max-w-xl');
            domElement.innerHTML += '<br>' + record.map((value, index) => index === 0 ? value : `<br>${value}<br>`).join('');
        }
        console.log(body);
    } catch (error) {
        console.error('Error:', error);
    }
}

getCarbonIntensity();
