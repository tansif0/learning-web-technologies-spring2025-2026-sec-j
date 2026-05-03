function signup(){
    let username = document.getElementById('username').value;
    let password = document.getElementById('password').value;

    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', 'upload.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('username='+username+'&password='+password);

    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let response = JSON.parse(this.responseText);
            document.getElementById('signup').innerHTML = response.message;
        }
    }
}
