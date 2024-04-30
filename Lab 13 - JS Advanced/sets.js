let set1 = new Set();

set1.add(10);
set1.add(20);

// As this method returns
// the set object hence chaining 
// of add method can be done.
set1.add(30).add(40).add(50);

console.log(set1);


let set2 = new Set("foooodiiiieee");
 
// deleting e from the set
// it prints true
console.log(set2.delete('e'));
 
console.log(set2);
 
// deleting an element which is 
// not in the set
// prints false
console.log(set2.delete('g'));