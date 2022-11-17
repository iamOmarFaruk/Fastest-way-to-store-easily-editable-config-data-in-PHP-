window.onload = function () {
  // select __submit button and add event listener
    document.getElementById('__submit').addEventListener('click', function (e) {
        e.preventDefault();
        // get the value of the input field
        let name = document.getElementById('__name').value;
        let age = document.getElementById('__age').value;
        
        // fetch post request to the kernel.php file with the name and age
        fetch('kernel.php', {
            method: 'POST',
            body: JSON.stringify({ name: name, age: age })
        }).then(function (response) {
            return response.text();
        }).then(function (text) {
            console.log(text);
        }).catch(function (error) {
            console.error(error);
        });
    });
}