// Back-Tics Syntax
// Template Strings use back-ticks (``) rather than the quotes ("") to define a string:

let text = `Hello World!`;

// Quotes Inside Strings
// Template Strings allow both single and double quotes inside a string:

let text1 = `He's often called "Johnny"`;

// Multiline Strings
// Template Strings allow multiline strings:

let text3 =
`The quick
brown fox
jumps over
the lazy dog`;

// Interpolation
// Template String provide an easy way to interpolate variables and expressions into strings.

// The method is called string interpolation.

// The syntax is:

// ${...}

function myInfo(fname, lname, country) { 
	return `My name is ${fname} ${lname}. ${country} is my favorite country`; 
} 
console.log(myInfo("Muhammad", "Jamil", "Pakistan")); 



