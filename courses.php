
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>
  <link rel="stylesheet" href="./styles/Testimonial.css">
  <link rel="stylesheet" href="./styles/courses.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <header id="header">
    <navbar id="navbar">
      <div class="left-section">
        <a href="/"><img src="./images/logo-removebg-preview.png" class="logo-img" alt="Logo" /></a>
      </div>
      <div class="mid-section">
        <ul class="navbar-links">
          <li><a href="./index.php">Home</a></li>
          <li><a href="./courses.php">Courses</a></li>
          <li><a href="./Testimonial.php">Testimonial</a></li>
          <li><a href="./OurTeam.php">OurTeam</a></li>
          <li><a href="./about.php">About</a></li>
          <li><a href="./contact.php">Contact Us</a></li>
        </ul>
      </div>
      <?php
       session_start();
       if(isset($_SESSION['username'])) {
      ?>

      <button class="btn" id="right-btn" onclick="window.location.href = './logout.php';"><?php echo $_SESSION['username'] ?></button>
      <?php
      }else {
      ?>
      <button class="btn" id="right-btn" onclick="window.location.href = './logout.php';"> Logout</button>

      <?php
        }
      ?>
    </navbar>
  </header>

  <div class="testimonials-content__title">
    <h4></h4>
    <h2>Courses</h2>
    <p>
      <h4>Get yourself prepared for the Placements!!</h4>
    </p>
  </div>

  <div class="accordion accordion-flush container my-3" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          <h1>C++</h1>
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <h4>chapter-1</h4>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                <h3>C++ History</h3><br>
  History of C++ language is interesting to know. Here we are going to discuss brief history of C++ language. <br>
  C++ programming language was developed in 1980 by Bjarne Stroustrup at bell laboratories of AT&T (American Telephone & Telegraph), located in U.S.A.
  Bjarne Stroustrup is known as the founder of C++ language. <br>
  It was develop for adding a feature of OOP (Object Oriented Programming) in C without significantly changing the C component. <br>
  C++ programming is "relative" (called a superset) of C, it means any valid C program is also a valid C++ program <br><br>


  <h4>It provides a lot of features that are given below. </h4> <br>

  1.Simple <br>
  2.Object-Oriented <br>
  3.Machine Independent or Portable <br>
  4.Mid-level programming language <br>
  5.Structured programming language <br>
  6.Memory Management <br>
  7.Pointers <br>
  8.Recursion <br><br>

  1) <b>Simple</b> <br>
  C++ is a simple language because it provides a structured approach (to break the problem into parts), a rich set of library functions, data types, etc.<br><br>

  2) <b>Object-Oriented</b> <br>
   In C++, object-oriented concepts like data hiding, encapsulation, and data abstraction can easily be implemented using keyword class, private, public, and protected access specifiers. Object-oriented makes development and maintenance easier.<br><br>

  3) <b>Portable</b> <br>
   C++ is a portable language and programs made in it can be run on different machines.<br><br>

  4) <b>Mid-level / Intermediate programming language</b> <br>
  C++ includes both low-level programming and high-level language so it is known as a mid-level and intermediate programming language. It is used to develop system applications such as kernel, driver, etc.<br><br>

  5) <b>Structured Programming Language</b> <br>
   C++ is a structured programming language. In this we can divide the program into several parts using functions.<br><br>

  6) <b>Memory Management</b> <br>
   C++ provides very efficient management techniques. The various memory management operators help save the memory and improve the program's efficiency. These operators allocate and deallocate memory at run time. Some common memory management operators available C++ are new, delete etc.<br><br>

  7) <b>Pointer</b> <br>
   C++ provides the feature of pointers. We can use pointers for memory, structures, functions, array, etc. We can directly interact with the memory by using the pointers.<br><br>

  8) <b>Recursion</b> <br>
   In C++, we can call the function within the function. It provides code reusability for every function.<br><br>

  ===================================================================================================================================

  <b>C++ Variables</b><br>
  Variables are containers for storing data values.<br>

  In C++, there are different types of variables (defined with different keywords), for example:<br><br>

  int    - stores integers (whole numbers), without decimals, such as 123 or -123<br>
  double - stores floating point numbers, with decimals, such as 19.99 or -19.99<br>
  char   - stores single characters, such as 'a' or 'B'. Char values are surrounded by single quotes<br>
  string - stores text, such as "Hello World". String values are surrounded by double quotes<br>
  bool   - stores values with two states: true or false<br><br>

  Declaring (Creating) Variables<br>
  To create a variable, specify the type and assign it a value:<br>

  Syntax:<br>
  	type variableName = value;<br><br>
  	Where type is one of C++ types (such as int), and variableName is the name of the variable (such as x or myName). The equal sign is used to assign values to the variable.<br>

  To create a variable that should store a number, look at the following example:<br>

  Example:<br><br>
  	Create a variable called myNum of type int and assign it the value 15:<br>

  	int myNum = 15;<br>
  	cout << myNum;<br><br>


  Rules for defining variables:<br><br>

  1.A variable can have alphabets, digits and underscore.<br>

  2.A variable name can start with alphabet and underscore only. It can't start with digit.<br>

  3.No white space is allowed within variable name.<br>

  4.A variable name must not be any reserved word or keyword e.g. char, float etc.<br><br>

  Following are the valid variable names:<br>
  					int a;<br>
  					int _ab;<br>
  					int a30;<br><br>
  Following are the invalid variable names:<br>
  					int 4;<br>
  					int x y;<br>
  					int double;<br><br>

  <b>C++ Data Types</b><br>


  A data type specifies the type of data that a variable can store such as integer, floating, character etc.<br><br>

  Basic Data Types<br>


  Data Type	Size		Description<br>
  a)boolean	1 byte	        Stores true or false values<br>
  b)char		1 byte	        Stores a single character/letter/number, or ASCII values<br>
  c)int		  2 or 4 bytes	  Stores whole numbers, without decimals<br>
  d)float		4 bytes	        Stores fractional numbers, containing one or more decimals. Sufficient for storing 6-7 decimal digits<br>
  e)double	8 bytes	        Stores fractional numbers, containing one or more decimals. Sufficient for storing 15 decimal digits<br><br>

===================================================================================================================================

  <b>Loops</b><br>
  In Programming, sometimes there is a need to perform some operation more than once or (say) n number of times. Loops come into use when we need to repeatedly execute a block of statements.<br>
  Mainly there are 3 types of loop which are as follows:<br>

  <table border="2">
        <caption></caption>
        <tr>
            <th> S.No.</th>
            <th>Loop Type</th>
            <th>Description</th>
        </tr>
        <tr>
            <td>1</td>
            <td>for loop</td>
            <td>firstly initializes, then, condition check, execute body, update.</td>
        </tr>
        <tr>
            <td>2</td>
            <td>while loop</td>
            <td>First checks the condition, then executes the body.</td>
        </tr>
        <tr>
            <td>3</td>
            <td>do-while loop</td>
            <td>Firstly, execute the body then condition check</td>
        </tr>
    </table>


  1.<b>For Loop:</b><br>
  	A For loop is a repetition control structure that allows us to write a loop that is executed a specific number of times. The loop enables us to perform n number of steps together in one line.<br><br>

  	Syntax:<br>

  	for (initialization expr; test expr; update expr)<br>
  	{<br>
       	// body of the loop<br>
       	// statements we want to execute<br>
  	}<br><br>
  Explanation of the Syntax:<br><br>
  Initialization statement: This statement gets executed only once, at the beginning of the for loop. You can enter a declaration of multiple variables of one type, such as int x=0, a=1, b=2. These variables are only valid in the scope of the loop. Variable defined before the loop with the same name are hidden during execution of the loop.<br>
  Condition: This statement gets evaluated ahead of each execution of the loop body, and abort the execution if the given condition get false.<br>
  Iteration execution: This statement gets executed after the loop body, ahead of the next condition evaluated, unless the for loop is aborted in the body (by break, goto, return or an exception being thrown.)<br><br>

  2.<b>While Loop:</b><br>
  While studying for loop we have seen that the number of iterations is known beforehand, i.e. the number of times the loop body is needed to be executed is known to us. while loops are used in situations where we do not know the exact number of iterations of the loop beforehand. The loop execution is terminated on the basis of the test conditions.<br>
  We have already stated that a loop mainly consists of three statements – initialization expression, test expression, and update expression. The syntax of the three loops – For, while, and do while mainly differs in the placement of these three statements.<br><br>

  Syntax:<br>

  initialization expression;<br>
  while (test_expression)<br>
  {<br>
     // statements<br>
     //update_expression;<br>
  }<br><br>

  3.<b>Do-while loop:</b><br>
  In Do-while loops also the loop execution is terminated on the basis of test conditions. The main difference between a do-while loop and the while loop is in the do-while loop the condition is tested at the end of the loop body, i.e do-while loop is exit controlled whereas the other two loops are entry-controlled loops.<br>
  Note: In a do-while loop, the loop body will execute at least once irrespective of the test condition.<br>
  Syntax:<br>

  initialization expression;<br>
  do<br>
  {<br>
     // statements<br>

     update_expression;<br>
  } while (test_expression);<br><br>

                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4>chapter-2</h4>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4>chapter-3</h4>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    <h4>chapter-4</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    <h4>chapter-5</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    <h4>chapter-6</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
          <h1>Data Structure</h1>
        </button>
      </h2>
      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">

          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <h4>chapter-1</h4>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4>chapter-2</h4>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4>chapter-3</h4>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    <h4>chapter-4</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    <h4>chapter-5</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    <h4>chapter-6</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
          data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
          <h1>Java</h1>
        </button>
      </h2>
      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">

          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <h4>chapter-1</h4>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4>chapter-2</h4>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4>chapter-3</h4>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    <h4>chapter-4</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    <h4>chapter-5</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    <h4>chapter-6</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingFour">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
          <h1>DBMS</h1>
        </button>
      </h2>
      <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">


          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <h4>chapter-1</h4>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h4>chapter-2</h4>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h4>chapter-3</h4>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt
                  nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est
                  accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur
                  voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis
                  consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit,
                  doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus
                  vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni
                  adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad?
                  Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit
                  explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam,
                  eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque
                  nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                </div>
              </div>
            </div>

            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    <h4>chapter-4</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                  aria-labelledby="panelsStayOpen-headingOne">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    <h4>chapter-5</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    <h4>chapter-6</h4>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                  aria-labelledby="panelsStayOpen-headingThree">
                  <div class="accordion-body">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora eligendi id voluptate animi deserunt nulla ducimus tempore, exercitationem sapiente doloremque vel. Quaerat doloribus, repellat est accusantium reprehenderit, provident temporibus consectetur eaque voluptatum amet aspernatur voluptatem perspiciatis quis suscipit. Qui, iure alias? Deleniti iure beatae debitis, veritatis consequuntur aliquam minus harum eius magnam ullam quas aperiam perferendis aut sapiente ad impedit, doloremque cumque in. Hic atque facere ad magni eveniet soluta eius cumque qui, vel expedita delectus vitae, ut magnam corrupti esse fuga, cum animi quo. Eum reiciendis quod est eius. Eum voluptatem magni adipisci accusamus, voluptas tempore provident modi culpa, perferendis animi ipsum, at harum ut ad? Animi eum veritatis, repellat tempora obcaecati, ducimus praesentium libero unde laborum impedit explicabo corrupti assumenda doloribus et non labore quaerat sed. Hic praesentium numquam dolore nam, eius sed delectus iste distinctio. Ipsa, aspernatur omnis officiis architecto enim doloremque nesciunt, expedita itaque quia quisquam sit, officia ad sunt sequi eos? Quis q
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <footer>
    <div class="footer-wrap">
      <div class="widgetFooter">
        <h4 class="uppercase">useful links</h4>
        <ul id="footerUsefulLink">
          <li title="About US">
            <span class="usefulLinksIcons">
              <i class="far fa-id-card"></i>
            </span>
            <a>&nbsp;About us</a>
          </li>
          <li title="Our Team">
            <span class="usefulLinksIcons">
              <i class="far fa-handshake"></i>
            </span>
            <a>&nbsp;Our team</a>
          </li>
          <li title="Gallery">
            <span class="usefulLinksIcons">
              <i class="far fa-images"></i>
            </span>
            <a>&nbsp;Gallery</a>
          </li>
          <li title="Contact Us">
            <span class="usefulLinksIcons">
              <i class="far fa-envelope"></i>
            </span>
            <a>&nbsp;Contact us</a>
          </li>
        </ul>
      </div>
      <div class="widgetFooter" id="footerLogo">
        <img src="./images/footer/Lineage_OS_Logo.png" alt="Logo">
      </div>
      <div class="widgetFooter">
        <h4 class="uppercase">Social media links</h4>
        <ul id="footerMediaLinks">
          <li class="media1" title="Facebook">
            <span class="mediaLinksIcons fb">
              <i class="fab fa-facebook-square"></i>
            </span>
            <a class="fb">&nbsp;facebook</a>
          </li>
          <li class="media2" title="Twitter">
            <span class="mediaLinksIcons twit">
              <i class="fab fa-twitter-square"></i>
            </span>
            <a class="twit">&nbsp;Twitter</a>
          </li>
          <li class="media3" title="Instagram">
            <span class="mediaLinksIcons insta">
              <i class="fab fa-instagram"></i>
            </span>
            <a class="insta">&nbsp;instagram</a>
          </li>
          <li class="media4" title="Github">
            <span class="mediaLinksIcons git">
              <i class="fab fa-github-alt"></i>
            </span>
            <a class="git">&nbsp;Github</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footerCopy">
      <div class="inb">
        <p>Copyrights<sup>&copy;</sup> 2023. Developed with <i class="fas fa-heart" style="color: red;"></i> by Aditya
        </p>
      </div>
    </div>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
