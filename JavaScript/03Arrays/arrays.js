console.log("🚀 Arrays in JavaScript");

// ===== 1. Creating Array =====
let arr = [10, 20, 30, 40];
console.log("\nArray:", arr);

// ===== 2. Access Elements =====
console.log("\nFirst Element:", arr[0]);
console.log("Last Element:", arr[arr.length - 1]);

// ===== 3. Add Elements =====
arr.push(50);        // add at end
arr.unshift(5);      // add at beginning
console.log("\nAfter Adding:", arr);

// ===== 4. Remove Elements =====
arr.pop();           // remove last
arr.shift();         // remove first
console.log("\nAfter Removing:", arr);

// ===== 5. Looping Array =====
console.log("\nLooping (for):");
for(let i = 0; i < arr.length; i++){
  console.log(arr[i]);
}

console.log("\nLooping (forEach):");
arr.forEach((value, index) => {
  console.log(index, value);
});

// ===== 6. Map (Transform Array) =====
let doubled = arr.map(num => num * 2);
console.log("\nMapped (Doubled):", doubled);

// ===== 7. Filter =====
let filtered = arr.filter(num => num > 20);
console.log("\nFiltered (>20):", filtered);

// ===== 8. Reduce =====
let sum = arr.reduce((acc, num) => acc + num, 0);
console.log("\nSum:", sum);

// ===== 9. Find =====
let found = arr.find(num => num > 20);
console.log("\nFirst >20:", found);

// ===== 10. Includes =====
console.log("\nIncludes 30:", arr.includes(30));

// ===== 11. Slice (copy part) =====
let part = arr.slice(1, 3);
console.log("\nSlice:", part);

// ===== 12. Splice (modify original) =====
arr.splice(1, 1); // remove 1 element from index 1
console.log("\nAfter Splice:", arr);

// ===== 13. Sort =====
let nums = [5, 2, 9, 1];
nums.sort((a, b) => a - b);
console.log("\nSorted:", nums);

// ===== 14. Reverse =====
nums.reverse();
console.log("Reversed:", nums);

// ===== 15. Join =====
let joined = arr.join("-");
console.log("\nJoined:", joined);

// ===== 16. Spread Operator =====
let newArr = [...arr, 100];
console.log("\nSpread:", newArr);

// ===== 17. Nested Array =====
let matrix = [[1,2], [3,4]];
console.log("\nNested:", matrix[1][0]); // 3

console.log("\n Program Finished");