import firebase from "firebase";
const firebaseConfig = {
  apiKey: "AIzaSyCcPXPKMzHj-MvmPDYCcqI8sUJt52PM94E",
  authDomain: "professional-website-c2292.firebaseapp.com",
  projectId: "professional-website-c2292",
  storageBucket: "professional-website-c2292.appspot.com",
  messagingSenderId: "712225348067",
  appId: "1:712225348067:web:4a1b939265cdd65fb3e8d6",
  measurementId: "G-Z35B1B5H8N",
};

const db = firebase.firestore();
const fbStorage = firebase.storage();

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();

module.exports = {
  db: db,
  fbStorage: fbStorage,
};

export default firebase;
