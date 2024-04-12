fetch('log.txt')
    .then(response => response.text()) // Get the response as text
    .then(data => {
        // Display the contents in the <pre> element
        document.getElementById('logContent').textContent = data;
    })
    .catch(error => {
        console.error('Error fetching log.txt:', error);
    });