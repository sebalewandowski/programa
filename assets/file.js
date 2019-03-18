function validateForm() {
    var imie = document.forms["cv"]["imie"].value;
    var nazwisko = document.forms["cv"]["nazwisko"].value;
    var wiek = document.forms["cv"]["wiek"].value;
    var plec = document.forms["cv"]["plec"].value;
    var zgoda = document.forms["cv"]["zgoda"];

    if (imie.length<1) {
        document.getElementById('error-imie').innerHTML = " Please Enter Your Name *"
    }
    if (nazwisko.length<1) {
        document.getElementById('error-nazwisko').innerHTML = " Please Enter Your Surname *";
    }
    if (wiek.length<1) {
        document.getElementById('error-wiek').innerHTML = " Please Enter Your Age *";
    }
    if (wiek < 18 || wiek > 99){
        document.getElementById('error-wiek').innerHTML = " The age needs to be in range 18-99 *";
    }
    if (plec.length<1) {
        document.getElementById('error-plec').innerHTML = " Please Enter Your Sex *";
    }
    if (zgoda.checked == 0) {
        document.getElementById('error-zgoda').innerHTML = " This checkbox is required *";
    }
    if(imie.length<1 || nazwisko.length<1 || wiek.length<1 || plec.length<1 || zgoda.checked == 0){
        return false;
    }
}
