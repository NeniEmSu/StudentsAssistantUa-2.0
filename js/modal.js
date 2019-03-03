[modal, modalBtn, closeBtn] = [
    document.querySelector("#simpleModal"),
    document.querySelector("#modalBtn"),
    document.querySelector(".closeBtn")
];

modalBtn.addEventListener("click", () => {
    modal.style.display = "block";
});
closeBtn.addEventListener("click", () => {
    modal.style.display = "none";
});
window.addEventListener("click", e => {
    if (e.target == modal) {
        modal.style.display = "none";
    }
});

[modal2, modalBtn2, closeBtn2] = [
    document.querySelector("#simpleModal2"),
    document.querySelector("#modalBtn2"),
    document.querySelector(".closeBtn2")
];

modalBtn2.addEventListener("click", () => {
    modal2.style.display = "block";
});
closeBtn2.addEventListener("click", () => {
    modal2.style.display = "none";
});
window.addEventListener("click", e => {
    if (e.target == modal2) {
        modal2.style.display = "none";
    }
});



// <div id="simpleModal" class="modal">
//                 <div class="modal-content">

//                     <div class="modal-header"><span class="closeBtn">+</span>
//                         <h1>Lets Get You Started!</h1>
//                     </div>

//                     <form class="form-signup" action="includes/signup.inc.php" method="POST">
//                         <h2 class="h3 mb-3 font-weight-normal">Signup Here</h2>

//                         <label for="Username" class="sr-only">Username</label>
//                         <br />
//                         <input type="Username" name="uid" id="inputEmail" class="form-control" placeholder="Username"
//                             required autofocus>
//                         <br />
//                         <label for="inputEmail" class="sr-only">Email address</label>
//                         <br />
//                         <input type="email" name="mail" id="inputEmail" class="form-control" placeholder="Email..."
//                             required autofocus>
//                         <br />
//                         <label for="inputPassword" class="sr-only">Password</label>
//                         <br />
//                         <input type="password" name="pwd" id="inputPassword" class="form-control"
//                             placeholder="Password..." required>
//                         <br />
//                         <label for="inputPassword" class="sr-only">Password</label>
//                         <br />
//                         <input type="password" name="pwd-repeat" id="inputPassword" class="form-control"
//                             placeholder="Repeat Password..." required>
//                         <br /><br />
//                         <button class="btn small-btn sign-up" type="submit" name="signup-submit">Sign
//                             up<span data-feather="log-in"></span></button>
//                         <br /><br />
//                         <p class="mt-5 mb-3 text-muted">Already Have an Account?</p><button id="modalBtn2"
//                             class="btn clear-btn sign-in">Sign in</button>

//                         <br /><br />

//                     </form>
//                 </div>
//             </div>

//             <div id="simpleModal2" class="modal2">
//                 <div class="modal-content">

//                     <div class="modal-header"><span class="closeBtn2">+</span>
//                         <h2>Lets Get You Back In.</h2>
//                     </div>

//                     <form class="form-signin" action="includes/login.inc.php" method="POST">
//                         <h1 class="h3 mb-3 font-weight-normal" style="text-align: center;">You are logged out <br>
//                             Please sign in </h1>
//                         <br />
//                         <label for="inputEmail" class="sr-only">Email address</label>
//                         <br />
//                         <input type="Username" name="mailuid" id="inputEmail" class="form-control"
//                             placeholder="Username..." required autofocus>
//                         <br />
//                         <label for="inputPassword" class="sr-only">Password</label>
//                         <br />
//                         <input type="password" name="pwd" id="inputPassword" class="form-control"
//                             placeholder="Password..." required>
//                         <br />
//                         <div class="checkbox mb-3">
//                             <label>
//                                 <input type="checkbox" value="remember-me"> Remember me
//                             </label>
//                         </div>
//                         <br />
//                         <button class="btn small-btn sign-in" type="submit" name="login-submit">Sign in<span
//                                 data-feather="log-in"></span></button>
//                         <br /><br />
//                         <p class="mt-5 mb-3 text-muted">Don't have an account?</p>
//                         <button id="modalBtn2" class="btn clear-btn sign-in">Sign up</button>
//                         <br /><br />
//                     </form>


//                 </div>
//             </div>