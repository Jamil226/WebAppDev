function onValidate(){
    var firstName = document.getElementById("first_name").value;
    var lastName = document.getElementById("last_name").value;
    if(firstName.length == 0){
        alert("Enter First Name");
        return false;
    } else if(lastName.length == 0){
        alert("Enter Last Name");
        return false;
    } else {
        alert("Success");
        return true;
    }
}

const fruit = [
	"Apple",
	"Orange",
	"Mango"
];

const cars = [];
		cars[0]= "Saab";
		cars[1]= "Volvo";
		cars[2]= "BMW";
		cars[2]= "Honda";
		cars[2]= "Toyota";

const animal = new Array("Cow", "Dog", "Cat");
