import { initializeApp } from "https://www.gstatic.com/firebasejs/11.5.0/firebase-app.js";
import { getAnalytics } from "https://www.gstatic.com/firebasejs/11.5.0/firebase-analytics.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

const firebaseConfig = {
  apiKey: "AIzaSyDUiMxaZ3Y9alNDjVu8S2Mj4-loUVqiAwQ",
  authDomain: "pure-zen-essence.firebaseapp.com",
  projectId: "pure-zen-essence",
  storageBucket: "pure-zen-essence.firebasestorage.app",
  messagingSenderId: "534342565255",
  appId: "1:534342565255:web:362921d041ef5f501ba722",
  measurementId: "G-HZCNDLJYCY",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);
