// import axios from "axios";

// export const axiosInstance = axios.create({
//   baseURL: import.meta.env.MODE === "development" ? "http://localhost:5001/api" : "/api",
//   withCredentials: true,
// });


// import axios from "axios";

// // Use VITE_API_URL for production and localhost for development
// const baseURL =
//   import.meta.env.MODE === `${import.meta.env.VITE_API_URL}/api`;

// export const axiosInstance = axios.create({
//   baseURL,
//   withCredentials: true,
// });
import axios from "axios";

const baseURL = `${import.meta.env.VITE_API_URL}/api`; // ✅ correct

export const axiosInstance = axios.create({
  baseURL,
  withCredentials: true,
});
