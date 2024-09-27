// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAuth } from "firebase/auth";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyA2EzOvJoxleJ5ROmDOYp4hGc-Y11FTm2M",
  authDomain: "react-auth-kodigo.firebaseapp.com",
  projectId: "react-auth-kodigo",
  storageBucket: "react-auth-kodigo.appspot.com",
  messagingSenderId: "417217913366",
  appId: "1:417217913366:web:fb02802211c5ae302b4b37"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
// Initialize Firebase Authentication and get a reference to the service
export const auth = getAuth(app);