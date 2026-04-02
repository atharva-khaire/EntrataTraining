console.log("🚀 Math in JavaScript");

// ===== 1. Basic Math Functions =====
console.log("\nBasic Operations:");
console.log("Square root:", Math.sqrt(25));   // 5
console.log("Power:", Math.pow(2, 3));        // 8
console.log("Absolute:", Math.abs(-10));      // 10

// ===== 2. Rounding Numbers =====
console.log("\nRounding:");
console.log("Round:", Math.round(4.6));   // 5
console.log("Floor:", Math.floor(4.9));   // 4
console.log("Ceil:", Math.ceil(4.1));     // 5
console.log("Trunc:", Math.trunc(4.9));   // 4

// ===== 3. Max & Min =====
console.log("\nMax & Min:");
console.log("Max:", Math.max(10, 20, 5)); // 20
console.log("Min:", Math.min(10, 20, 5)); // 5

// ===== 4. Random Numbers =====
console.log("\nRandom:");
console.log("Random (0-1):", Math.random());

// Random between 1–10
let rand = Math.floor(Math.random() * 10) + 1;
console.log("Random (1-10):", rand);

// ===== 5. Constants =====
console.log("\nConstants:");
console.log("PI:", Math.PI);
console.log("E:", Math.E);

// ===== 6. Log & Exponential =====
console.log("\nLog & Exp:");
console.log("log(10):", Math.log(10));
console.log("exp(2):", Math.exp(2));

// ===== 7. Trigonometry =====
console.log("\nTrigonometry:");
console.log("sin(90°):", Math.sin(Math.PI / 2));
console.log("cos(0°):", Math.cos(0));
console.log("tan(45°):", Math.tan(Math.PI / 4));

// ===== 8. Number to Fixed =====
let num = 12.34567;
console.log("\nFixed:", num.toFixed(2)); // 12.35

console.log("\n Program Finished");