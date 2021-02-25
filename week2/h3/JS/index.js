// Soal 1 Mengubah fungsi menjadi fungsi arrow
const golden = (() => console.log("this is golden"));
golden();

// Soal 2 Sederhanakan menjadi Object literal di ES6
const newFunction = ((firstName, lastName) => {
    return {
        firstName, 
        lastName, 
        fullName() {console.log((firstName + " " + lastName))}
    }
});
newFunction("William", "Imoh").fullName();

// Soal 3 Destructuring
const newObject = {
    firstName: "Harry",
    lastName: "Potter Holt",
    destination: "Hogwarts React Conf",
    occupation: "Deve-wizard Avocado",
    spell: "Vimulus Renderus!!!"
}
const {firstName, lastName, destination, occupation, spell} = newObject;
// Driver code
console.log(firstName, lastName, destination, occupation, spell);

// Soal 4 Array Spreading
const west = ["Will", "Chris", "Sam", "Holly"]
const east = ["Gill", "Brian", "Noel", "Maggie"]
const combined = [...west, ...east]
//Driver Code
console.log(combined)

// Soal 5 Template Literals
const planet = "earth" 
const view = "glass" 
var before = `Lorem  ${view} dolor sit amet, 
consectetur adipiscing elit ${planet} 
do eiusmod tempor 
incididunt ut labore et dolore magna aliqua. Ut enim 
ad minim veniam`
// Driver Code 
console.log(before) 