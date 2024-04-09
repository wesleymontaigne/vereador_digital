 <!-- Create Form -->
 <form id="form">
 
 <!-- Details -->
 <div class="form-control">
     <label for="name" id="label-name">
         Name
     </label>

     <!-- Input Type Text -->
     <input type="text" id="name"
            placeholder="Enter your name" />
 </div>

 <div class="form-control">
     <label for="email" id="label-email">
         Email
     </label>

     <!-- Input Type Email-->
     <input type="email" id="email"
            placeholder="Enter your email" />
 </div>

 <div class="form-control">
     <label for="age" id="label-age">
         Age
     </label>

     <!-- Input Type Text -->
     <input type="text" id="age"
            placeholder="Enter your age" />
 </div>

 <div class="form-control">
     <label for="role" id="label-role">
         Which option best describes you?
     </label>

     <!-- Dropdown options -->
     <select name="role" id="role">
         <option value="student">Student</option>
         <option value="intern">Intern</option>
         <option value="professional">
             Professional
         </option>
         <option value="other">Other</option>
     </select>
 </div>

 <div class="form-control">
     <label>
         Would you recommend GeeksforGeeks
         to a friend?
     </label>

     <!-- Input Type Radio Button -->
     <label for="recommed-1">
         <input type="radio" id="recommed-1"
                name="recommed">Yes
           </input>
     </label>
     <label for="recommed-2">
         <input type="radio" id="recommed-2"
                name="recommed">No
           </input>
     </label>
     <label for="recommed-3">
         <input type="radio" id="recommed-3"
                name="recommed">Maybe
           </input>
     </label>
 </div>

 <div class="form-control">
     <label>Languages and Frameworks known
         <small>(Check all that apply)</small>
     </label>
     <!-- Input Type Checkbox -->
     <label for="inp-1">
         <input type="checkbox" name="inp">C
           </input>
       </label>
     <label for="inp-2">
         <input type="checkbox" name="inp">C++
           </input>
     </label>
     <label for="inp-3">
         <input type="checkbox" name="inp">C#
           </input>
     </label>
     <label for="inp-4">
         <input type="checkbox" name="inp">Java
           </input>
     </label>
     <label for="inp-5">
         <input type="checkbox" name="inp">Python
           </input>
     </label>
     <label for="inp-6">
         <input type="checkbox" name="inp">JavaScript
           </input>
     </label>
     <label for="inp-7">
         <input type="checkbox" name="inp">React
           </input>
     </label>
     <label for="inp-7">
         <input type="checkbox" name="inp">Angular
           </input>
     </label>
     <label for="inp-7">
         <input type="checkbox" name="inp">Django
           </input>
     </label>
     <label for="inp-7">
         <input type="checkbox" name="inp">Spring
           </input>
     </label>
 </div>

 <div class="form-control">
     <label for="comment">
         Any comments or suggestions
     </label>

     <!-- multi-line text input control -->
     <textarea name="comment" id="comment"
               placeholder="Enter your comment here">
     </textarea>
 </div>

 <!-- Multi-line Text Input Control -->
 <button type="submit" value="submit">
     Submit
 </button>
</form>