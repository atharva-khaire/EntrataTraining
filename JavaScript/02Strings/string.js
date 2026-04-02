console.log(" Strings in JavaScript");

// ===== 1. Creating Strings =====
let str1 = "Hello";
let str2 = 'World';
let str3 = `Atharva`; // template literal

console.log(str1, str2, str3);

// ===== 2. String Length =====
console.log("\nLength:", str1.length);

// ===== 3. Access Characters =====
console.log("\nCharacters:");
console.log(str1[0]); // H
console.log(str1.charAt(1)); // e

// ===== 4. Convert Case =====
let text = "javascript";
console.log("\nUpper:", text.toUpperCase());
console.log("Lower:", text.toLowerCase());

// ===== 5. Concatenation =====
let first = "Atharva";
let last = "Khaire";

let fullName1 = first + " " + last;
let fullName2 = `${first} ${last}`; // template string

console.log("\nFull Name:");
console.log(fullName1);
console.log(fullName2);

// ===== 6. Trim Spaces =====
let msg = "   Hello JS   ";
console.log("\nTrim:", msg.trim());

// ===== 7. Slice & Substring =====
let sample = "JavaScript";

console.log("\nSlice:", sample.slice(0, 4));       // Java
console.log("Substring:", sample.substring(4, 10)); // Script

// ===== 8. Replace =====
let line = "I love Java";
console.log("\nReplace:", line.replace("Java", "JS"));

// ===== 9. Includes =====
console.log("\nIncludes 'Java':", sample.includes("Java"));

// ===== 10. Split =====
let data = "a,b,c,d";
let arr = data.split(",");
console.log("\nSplit:", arr);

// ===== 11. Repeat =====
console.log("\nRepeat:", "Hi ".repeat(3));

// ===== 12. StartsWith & EndsWith =====
console.log("\nStartsWith:", sample.startsWith("Java"));
console.log("EndsWith:", sample.endsWith("Script"));

// ===== 13. Escape Characters =====
let quote = "He said \"Hello\"";
console.log("\nEscape:", quote);

console.log("\n Program Finished");