// Basic String Methods
// Javascript strings are primitive and immutable: All string methods produces a new 
// string without altering the original string.

// String length
// String charAt()
// String charCodeAt()
// String at()
// String [ ]
// String slice()
// String substring()
// String substr()
// String toUpperCase()
// String toLowerCase()
// String concat()
// String trim()
// String trimStart()
// String trimEnd()
// String padStart()
// String padEnd()
// String repeat()
// String replace()
// String replaceAll()
// String split()

let alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
let length = alpha.length;

// Extracting String Characters
// There are 4 methods for extracting string characters:

// The at(position) Method
// The charAt(position) Method
// The charCodeAt(position) Method
// Using property access [] like in arrays
// JavaScript String charAt()
// The charAt() method returns the character at a specified index (position) in a string:

let text = "HELLO WORLD";
let char = text.charAt(0);

let text1 = "Apple, Banana, Kiwi";
let part1 = text1.slice(7, 13);
let part2 = text1.slice(-12);
let part3 = text1.slice(-12, -6);


// JavaScript String substr()
// substr() is similar to slice().

// The difference is that the second parameter specifies the length of the extracted part.

let str = "Apple, Banana, Kiwi";
let partStr = str.substr(7, 6);

let strSub = "Apple, Banana, Kiwi";
let partSub = strSub.substring(7, 13);



let text3 = "Hello World!";
let text4 = text3.toUpperCase();

let text10 = "Hello";
let text20 = "World";
let text30 = text10.concat(" ", text20);

