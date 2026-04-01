// Sample Data
let arr = [10, 20, 30, 40];
let str = "JS";

// ===== 1. for loop =====
console.log("FOR LOOP:");
for(let i = 0; i < arr.length; i++){
  console.log(arr[i]);
}

// ===== 2. while loop =====
console.log("\nWHILE LOOP:");
let i = 0;
while(i < arr.length){
  console.log(arr[i]);
  i++;
}

// ===== 3. do...while loop =====
console.log("\nDO-WHILE LOOP:");
let j = 0;
do{
  console.log(arr[j]);
  j++;
} while(j < arr.length);

// ===== 4. for...of (values) =====
console.log("\nFOR...OF LOOP:");
for(let value of arr){
  console.log(value);
}

// ===== 5. for...in (keys/index) =====
console.log("\nFOR...IN LOOP:");
for(let index in arr){
  console.log(index, arr[index]);
}

// ===== 6. forEach (array method) =====
console.log("\nforEach LOOP:");
arr.forEach(function(value, index){
  console.log(index, value);
});

// ===== 7. Loop on String =====
console.log("\nLOOP ON STRING:");
for(let char of str){
  console.log(char);
}

// ===== 8. break & continue =====
console.log("\nBREAK & CONTINUE:");
for(let k = 1; k <= 5; k++){
  if(k === 3){
    continue; // skip 3
  }
  if(k === 5){
    break; // stop loop
  }
  console.log(k);
}