
// While Loop

while (i < 10) {
    text += "The number is " + i;
    i++;
}

// The Do While Loop

do {
    text += "The number is " + i;
    i++;
}
while (i < 10);


// Comparing For and While

const carsForLoop = ["BMW", "Volvo", "Saab", "Ford"];
let counterForLoop = 0;
let textForLoop = "";

for (;cars[counterForLoop];) {
    textForLoop += carsForLoop[counterForLoop];
    counterForLoop++;
}

const cars = ["BMW", "Volvo", "Saab", "Ford"];
let i = 0;
let text = "";
while (cars[i]) {
    text += cars[i];
    i++;
}


