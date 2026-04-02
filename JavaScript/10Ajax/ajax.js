console.log("🚀 AJAX in JavaScript");

// ===== 1. GET Request =====
fetch("https://jsonplaceholder.typicode.com/posts/1")
  .then(response => response.json())
  .then(data => {
    console.log("\nGET Response:");
    console.log(data);
  })
  .catch(error => console.log("Error:", error));

// ===== 2. GET Multiple Data =====
fetch("https://jsonplaceholder.typicode.com/posts")
  .then(res => res.json())
  .then(posts => {
    console.log("\nFirst 3 Posts:");
    console.log(posts.slice(0, 3));
  });

// ===== 3. POST Request =====
fetch("https://jsonplaceholder.typicode.com/posts", {
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify({
    title: "Hello JS",
    body: "This is AJAX POST request",
    userId: 1
  })
})
  .then(res => res.json())
  .then(data => {
    console.log("\nPOST Response:");
    console.log(data);
  });

// ===== 4. Async/Await Version =====
async function getData() {
  try {
    let response = await fetch("https://jsonplaceholder.typicode.com/posts/2");
    let data = await response.json();

    console.log("\nAsync/Await Response:");
    console.log(data);
  } catch (error) {
    console.log("Error:", error);
  }
}

getData();

// ===== 5. Simple UI Example (Browser only) =====
document.body.innerHTML += `
  <button onclick="loadData()">Load Data</button>
  <pre id="output"></pre>
`;

function loadData() {
  fetch("https://jsonplaceholder.typicode.com/posts/3")
    .then(res => res.json())
    .then(data => {
      document.getElementById("output").innerText =
        JSON.stringify(data, null, 2);
    });
}

console.log("\n✅ Program Finished");