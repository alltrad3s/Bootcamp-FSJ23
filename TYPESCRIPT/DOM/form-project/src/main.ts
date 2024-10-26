import './style.css';

/* 
The ! character in TypeScript is called the “non-null assertion operator.” It is used to tell the 
TypeScript compiler that you are certain the value is not null or undefined, even if the TypeScript type checker thinks it might be.
*/
document.querySelector<HTMLDivElement>('#app')!.innerHTML = `
  <div>
    <h1 id="textHi">Hola, Login</h1>
    <form action="" id="registerForm">
      <div class="svgContainer">
      <div>
        <svg class="mySVG" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 200">
          <!-- SVG content here -->
        </svg>
        </div>
      </div>
      <section>
          <label>Username:</label>
          <input type="text" name="username" id="username" required>
      <section>

      <section>
          <label>Email:</label>
          <input type="email" name="email" id="email" required>
      <section>

      <section>
        <label>Password:</label>
        <input type="password" name="password" id="password" required>
      <section>

      <section>
        <label>Confirm Password:</label>
        <input type="password" name="confirmPassword" id="confirmPassword" required>
      <section>

      <button type="submit">Registro</button>
    </form> 
  </div>
`;

/* This produces an error
const text:HTMLElement | null = document.querySelector<HTMLElement>('textHi');
text?.innerText = "Cambiando con TS";

Correct way of adding it is as follows with the non-null assertion operator
*/
// If the following lines are uncommented, the form doesn't work, it shows a text is null error
// const text:HTMLElement = document.querySelector<HTMLElement>('textHi')!;
// text.innerText = "Cambiando con TS";

// We "listen" for the submit event
form.addEventListener('submit', (ev: SubmitEvent) => { // e is for event, we cannot use "event" as it's reserved
  ev.preventDefault(); // We prevent the default behavior after submit which is the page reload/refresh
  // We will catch the elements that we are interested in which in this case, it would be the inputs
  /* We get the HTML element, however, the correct option in this case as we're looking for the value, we do it like the following line
  const username = document.getElementById("username") as HTMLInputElement;
  */
  const username = (document.getElementById("username") as HTMLInputElement).value;
  const email = (document.getElementById("email") as HTMLInputElement).value;
  const password = (document.getElementById("password") as HTMLInputElement).value;
  const confirmPassword = (document.getElementById("confirmPassword") as HTMLInputElement).value;

  // Basic Validation
  /*
  The trim() method of String values removes whitespace from both ends of this string and returns a new string, without modifying the original string.
  */
  if (username.trim() === "" || password.trim() === "" || confirmPassword.trim() === "") {
    // Email is not validated at the moment because the type of input helps.
    alert("Completar todos los campos");
    return; // Added to stop runtime
  }

  console.log("It works");
  console.log(`Los datos son ${username}, ${email}, ${password} y ${confirmPassword}`);
});