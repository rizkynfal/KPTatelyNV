// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
      apiKey: "AIzaSyBeOEv46OpU_IwxR81x9XCIaIxFMHACTIs",
      authDomain: "dailyreportkp-71954.firebaseapp.com",
      projectId: "dailyreportkp-71954",
      storageBucket: "dailyreportkp-71954.appspot.com",
      messagingSenderId: "633712995314",
      appId: "1:633712995314:web:7d41835092aca008f3196b",
      measurementId: "G-TCB843G6EB"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);