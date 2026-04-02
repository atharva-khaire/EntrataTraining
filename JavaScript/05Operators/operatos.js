// ===== 1. Arithmetic Operators =====
let a = 10;
let b = 5;

console.log("Addition:", a + b);
console.log("Subtraction:", a - b);
console.log("Multiplication:", a * b);
console.log("Division:", a / b);
console.log("Modulus:", a % b);
console.log("Exponent:", a ** b);

// ===== 2. Assignment Operators =====
let x = 10;

x += 5;   // x = x + 5
x -= 2;
x *= 2;
x /= 2;

console.log("Assignment result:", x);

// ===== 3. Comparison Operators =====
let num1 = 10;
let num2 = "10";

console.log("== :", num1 == num2);   // true (value check)
console.log("=== :", num1 === num2); // false (value + type)
console.log("!= :", num1 != num2);
console.log("!== :", num1 !== num2);
console.log("> :", num1 > 5);
console.log("< :", num1 < 20);

// ===== 4. Logical Operators =====
let isLoggedIn = true;
let isAdmin = false;

console.log("AND:", isLoggedIn && isAdmin);
console.log("OR:", isLoggedIn || isAdmin);
console.log("NOT:", !isLoggedIn);

// ===== 5. Increment / Decrement =====
let count = 5;

console.log("Post Increment:", count++); // 5
console.log("After:", count);            // 6

console.log("Pre Increment:", ++count);  // 7

console.log("Post Decrement:", count--); // 7
console.log("After:", count);            // 6

// ===== 6. Ternary Operator =====
let age = 18;

let result = (age >= 18) ? "Adult" : "Minor";
console.log("Ternary Result:", result);

// ===== 7. Type Operator =====
let name = "Atharva";

console.log("Type of name:", typeof name);
console.log("Type of age:", typeof age);

// ===== 8. String Operator =====
let firstName = "Atharva";
let lastName = "Khaire";

let fullName = firstName + " " + lastName;
console.log("Full Name:", fullName);

// ===== 9. Nullish Coalescing (??) =====
let value = null;
let defaultValue = value ?? "Default Value";

console.log("Nullish:", defaultValue);

// ===== 10. Optional Chaining (?.) =====
let user = {
  profile: {
    name: "Atharva"
  }
};

console.log("Optional:", user?.profile?.name);
console.log("Optional (safe):", user?.address?.city); // undefined