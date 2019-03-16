<?php include "includes/header.php" ?> 
        <link rel="stylesheet" href="css/main.css" />
    </head> 
    <body>
        <div id="pageContainer">
            <main>
                <h1 id="tutHead" class="headline">PHP Hello World Tutorial</h1>
                
                
                
            <?php
            
            
                    echo "
                        <p class='txt'>
                            Hello, World!
                        </p>
                        <p class='txt'>
                            This is a basic PHP program. It prints a few lines of text to the screen.
                        </p>
                        <p class='txt'>
                            Abby, Salsa, and Gaucho are cats.
                        </p>
                        <p class='txt'>
                            Gaucho, Abby, and Salsa are tabby cats.
                        </p>
                        <p class='txt'>
                            =^. .^=
                        </p>
                        <p id='kitty' class='txt'>
                            Cats are great!
                        </p>
                    ";
        
                    echo "
                        <p class='tutorial'>
                            It is quite simple create a 'Hello, World!' application in PHP.
                        </p>
                        <p class='tutorial'>
                            All it takes is 6 simple steps...let's get started!
                        </p>
                        <p class='tutorial'>
                            1. Create a new file and save it. I usually use 'index.php' but 'hello-world.php' works, too! 
                            (you could call it 'frog.php' and it would still work, but index.php and hello-world.php make 
                            the most sense).</p>
                        <p class='tutorial'>
                            2. To create an opening PHP tag, type the following characters with NO SPACES, and then hit return/enter a few times to give 
                            yourself some space: 
                        </p>
                        <p id='codeTxt' class='tutorial'>
                            < ? php
                        </p>
                        <p class='tutorial'>
                            3. Next, type the word 'echo', a set of quotation marks -- either single or double quotes work. It's important to remember 
                            that while it does not matter whether you use single or double quotes in this program, as you get into more advanced 
                            PHP programming, it will.
                        </p>
                        <p class='tutorial'>
                            4. In between your quotes, type 'Hello, world!' -- or anything you want, really...it doesn't matter what is between the quotes. 
                            To read more about why 'Hello, world!' is what is traditionally written here, be sure to visit the link at the end of this tutorial!
                        </p>
                        <p class='tutorial'>
                            5. After your closing quote, make sure you close your echo statement with a semi-colon. This tells PHP that you are done with 
                            that particular part of the program.
                        </p>
                        <p class='tutorial'>
                            6. Finally, write your closing PHP tag. As with the opening tag, your closing tag consists of the following characters with NO SPACES:
                        </p>
                        <p id='codeTxt' class='tutorial'>
                            ? >
                        </p>
                        <p id='happy' class='tutorial'>
                            That's everything! You have just written your first PHP program! Happy programming!
                        </p>
                    ";
                    
                    echo "
                        <p id='linkTxt'>
                            To read about the history of the 'Hello, World!' application, 
                                <a href='https://itc134-php-hello-tutorial-emorri08.c9users.io/hello-world-hist.php' target='_blank'>
                                    click here!
                                </a>
                        </p>
                    ";
                    

            ?>
            
            
            
            </main>
        </div>

<?php include "includes/footer.php" ?>