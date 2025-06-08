
    var myStr = "Hello World"
    console.log(myStr)
    var a = 20;
    var b = 20;
    var c = a + b;
    console.log(c);
    
    var pi = 3.1416;
    alert(pi);


    var z = 1000;
    z + = 100;
    document.write("The Value of Z = ")
    document.write(z);
    
    function calcSum(){
        let a, b, c;
        a = 100;
        b = 200;
        c = a + b;
        console.log(c);
    }

    calcSum();

    function displayName(){
        alert("Abdullah");
    }

    // Arrays
    
    // First Method
    const vehicles = ["Saab", "Volvo", "BMW"];
    
    // 2nd Method

    const vehiclesNew = [
                    "Saab",
                    "Volvo",
                    "BMW"
                ];

    // 3rd Method
    const cars = [];
        cars[0]= "Saab";
        cars[1]= "Volvo";
        cars[2]= "BMW";

    // 4th Method
    const cars = new Array("Saab", "Volvo", "BMW");

    // Changing an Array Element
    const cars = ["Saab", "Volvo", "BMW"];
        cars[0] = "Opel";

    cars.length   // Returns the number of elements
    cars.sort() 
    
    const fruitsArr = ["Banana", "Orange", "Apple", "Mango"];
    let length = fruitsArr.length;

    // Accessing the First Array Element
    const fruitsItems = ["Banana", "Orange", "Apple", "Mango"];
    let fruitItem = fruitsItems[0];

    // Accessing the Last Array Element
    const fruitsLast = ["Banana", "Orange", "Apple", "Mango"];
    let fruitLast = fruitsLast[fruits.length - 1];

    // Looping Array Elements
    const fruitsLoop = ["Banana", "Orange", "Apple", "Mango"];
    let fLen = fruitsLoop.length;

    let text = "<ul>";
    for (let i = 0; i < fLen; i++) {
    text += "<li>" + fruits[i] + "</li>";
    }
    text += "</ul>";

    // The pop() method removes the last element from an array
    const fruitsPop = ["Banana", "Orange", "Apple", "Mango"];
    fruitsPop.pop();
