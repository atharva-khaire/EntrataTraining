// ===== 1. var, let, const =====
var oldVar = "I am var";
let modernVar = "I am let";
const constantVar = "I cannot change";

console.log(oldVar);
console.log(modernVar);
console.log(constantVar);

// ===== 2. Reassign & Redeclare =====
oldVar = "var changed";       //  allowed
modernVar = "let changed";    //  allowed
// constantVar = "change";    //  error

var oldVar = "var redeclared"; //  allowed
// let modernVar = "new";     //  error

console.log(oldVar);
console.log(modernVar);

// ===== 3. Data Types =====
let name = "Atharva";       // String
let age = 21;               // Number
let isStudent = true;       // Boolean
let marks = [90, 80, 70];   // Array
let person = {              // Object
  name: "Atharva",
  city: "Pune"
};

console.log(name, age, isStudent, marks, person);

// ===== 4. Undefined =====
let x;
console.log("Undefined value:", x);

// ===== 5. Null =====
let y = null;
console.log("Null value:", y);

// ===== 6. Scope Example =====
{
  let a = 10;
  var b = 20;

  console.log("Inside block a:", a);
  console.log("Inside block b:", b);
}

// console.log(a); //  Error (block scoped)
console.log("Outside block b:", b); //  works

// ===== 7. typeof Operator =====
console.log(typeof name);       // string
console.log(typeof age);        // number
console.log(typeof isStudent);  // boolean
console.log(typeof marks);      // object (array)
console.log(typeof person);     // object

// ===== 8. Best Practice Example =====
const PI = 3.14;
let radius = 5;

let area = PI * radius * radius;
console.log("Area of circle:", area);