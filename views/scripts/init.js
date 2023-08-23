document.addEventListener('DOMContentLoaded', function() {
    fetch('controllers/config.php')
        .then(response => response.json())
        .then(configData => {
            // Handle the configuration data
            console.log(configData);
            // You can now proceed with your application's initialization
        })
        .catch(error => {
            console.error('Error fetching configuration:', error);
        });
});

