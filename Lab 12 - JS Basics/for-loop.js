
// Counting
for (let i = 0; i < 5; i++) {
	text += "The number is " + i + "<br>";
}

const cars = ["BMW", "Volvo", "Saab", "Ford"];
let i = 2;
let len = cars.length;
let text = "";

for (; i < len; i++) {
	text += cars[i] + "<br>";
}


// Using var in a loop

var number = 5;
for (var number = 0; number < 10; number++) {
  // some statements
}

// The JavaScript for in statement loops through the properties of an Object:

const person = {fname:"John", lname:"Doe", age:25};
let text1 = "";
for (let x in person) {
	text1 += person[x];
}
