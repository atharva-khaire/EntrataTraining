console.log("🚀 Objects in JavaScript");

// ===== 1. Creating Object =====
let person = {
  name: "Atharva",
  age: 21,
  city: "Pune"
};

console.log("\nObject:", person);

// ===== 2. Accessing Values =====
console.log("\nAccess:");
console.log(person.name);      // dot notation
console.log(person["age"]);    // bracket notation

// ===== 3. Adding New Property =====
person.country = "India";
console.log("\nAfter Adding:", person);

// ===== 4. Updating Value =====
person.age = 22;
console.log("\nAfter Update:", person);

// ===== 5. Deleting Property =====
delete person.city;
console.log("\nAfter Delete:", person);

// ===== 6. Methods inside Object =====
let user = {
  name: "Atharva",
  greet: function() {
    console.log("Hello " + this.name);
  }
};

console.log("\nMethod Call:");
user.greet();

// ===== 7. Looping Object =====
console.log("\nLooping Object:");
for(let key in person){
  console.log(key, ":", person[key]);
}

// ===== 8. Object Keys & Values =====
console.log("\nKeys:", Object.keys(person));
console.log("Values:", Object.values(person));
console.log("Entries:", Object.entries(person));

// ===== 9. Nested Object =====
let student = {
  name: "Atharva",
  marks: {
    math: 90,
    science: 85
  }
};

console.log("\nNested Object:");
console.log(student.marks.math);

// ===== 10. Copy Object =====
let copy = {...person}; // spread operator
console.log("\nCopied Object:", copy);

// ===== 11. Object Destructuring =====
let { name, age } = person;
console.log("\nDestructuring:");
console.log(name, age);

console.log("\n✅ Program Finished");