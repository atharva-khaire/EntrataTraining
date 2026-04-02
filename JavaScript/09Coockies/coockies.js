console.log("🚀 Cookies in JavaScript");

// ===== 1. Set Cookie =====
document.cookie = "name=Atharva";
document.cookie = "age=21";

console.log("\nCookies Set");

// ===== 2. Get All Cookies =====
console.log("\nAll Cookies:");
console.log(document.cookie);

// ===== 3. Set Cookie with Expiry =====
let date = new Date();
date.setTime(date.getTime() + (24 * 60 * 60 * 1000)); // 1 day

let expires = "expires=" + date.toUTCString();
document.cookie = "city=Pune;" + expires;

console.log("\nCookie with Expiry Added");

// ===== 4. Delete Cookie =====
document.cookie = "age=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
console.log("\nCookie Deleted");

// ===== 5. Function to Get Specific Cookie =====
function getCookie(name) {
  let cookies = document.cookie.split("; ");
  
  for (let i = 0; i < cookies.length; i++) {
    let [key, value] = cookies[i].split("=");
    
    if (key === name) {
      return value;
    }
  }
  return null;
}

// ===== 6. Use getCookie =====
console.log("\nGet name cookie:", getCookie("name"));

console.log("\n Program Finished");