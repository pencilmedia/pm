<?php 
    include("../assets/inc/config.inc");
    $ROOT = '../'; // Set root for relative paths
    $subPage="uxd";
    $subName="uxJS";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo uxTitle ?></title>
    <?php include("../assets/inc/head.inc.php"); ?></head>
<body id="labs">
    <?php include("../assets/inc/nav/nav.inc.php"); ?>
    <?php include("../assets/inc/socialbar.inc.php"); ?>
    <section class="content">
        <h2>
            <?php echo uxHead ?></h2>
        <?php include("../assets/inc/nav/ux.inc.php"); ?>
        <div class="colonnade">
            <article class="lt_column">
                <div class="slate">
                    <h3>
                        <?php echo jsName ?></h3>
                    <!-- BEGIN: Toggle JS -->
                    <h6>Javascript Toggling an Element Block or Inine</h6>
                    <script>
                    function toggleEl(obj) {
                        var el = document.getElementById(obj);
                        if ( el.style.display != 'none' ) { 
                                el.style.display = 'none';
                        } else {
                            el.style.display = '';
                        }
                    }
                </script>
                    <p style="margin-top:2em;">
                        <button onclick="toggleEl('toggleDiv')">Toggle DIV</button>
                        <button onclick="toggleEl('toggleSpan')">Toggle SPAN</button>
                    </p>
                    <div id="toggleDiv" style="border: 1px solid orange; padding: 20px;">
                        <span id="toggleSpan" style="border: 1px solid green; padding: 3px;">This content can be toggled.</span>
                    </div>
                    <hr />

                    <!-- BEGIN: Photo Slider JS -->
                    <h6>Photo Slider</h6>
                    <script>
                $(document).ready(
                    function slideNext() {
                        $('#next').bind('click', function() {
                        
                            var slider = $('#slider').position();
                            var currentPosition = slider.left;
                            currentPosition = slider.left - 100;
                            $('#slider').css('left',currentPosition);
                            $("#toolbar span em").html(currentPosition);
                            
                        });
                        
                        $('#back').bind('click', function() {
                            
                            var slider = $('#slider').position();
                            var currentPosition = slider.left;
                            currentPosition = slider.left + 100;
                            $('#slider').css('left',currentPosition);
                            $("#toolbar span em").html(currentPosition);
                            
                        });
                });
            </script>
                    <style>
                #viewport {
                border: 1px solid black;
                    position: relative;
                    top:25%;
                    left: 0;
                    width: 500px;
                    height: 150px;
                    overflow: hidden;
                }
                #slider {
                    position: relative;
                    top: 0;
                    left: 0;
                    height: 120px;
                    width: 1100px;
                }
                #slider img {
                    width: 100px;
                    margin-top: 1em;
                }
                #toolbar {
                    border-top: 1px solid gray;
                    position: relative;
                    left: 0;
                    bottom: 0;
                    height: 20px;
                    width: auto;
                    text-align: center;
                    background-color: #e5e5e5;
                    padding: 5px;
                }
                #toolbar span {
                    display: block;
                    float: right;
                    width: 200px;
                    font-size: .82em;
                }
                
            </style>

                    <div id="viewport">
                        <div id="slider">
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg1.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg2.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg1.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg2.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg1.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg2.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg1.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg2.png" />
                            <img src="<? echo path ?>
                            /work/portfolio/wd/websites/jnrds/jnrds_hmpg1.png" />
                            <img src="<? echo path ?>/work/portfolio/wd/websites/jnrds/jnrds_hmpg2.png" /></div>
                        <div id="toolbar">
                            <button id="next">Next</button>
                            <button id="back">Back</button>
                            <span>
                                Left Position: <em>0</em>
                            </span>
                        </div>
                    </div>
                    <hr />

                    <!-- BEGIN: Inheritance JS -->
                    <h6>Inheritance</h6>
                    <p>
                        Create a function then a second function that inherits from the original function.
                    </p>
                    <script>
                    /* Class Person. */
                    function Person(name) {
                         this.name = name;
                    }
                    Person.prototype.getName = function() { 
                        return this.name;
                    }
                    var reader = new Person('John Smith'); reader.getName();
                    var reader2 = new Person('Jack Tripper'); reader2.getName();
                </script>
                    <div class="code_sample">
                        <code>
                        /* Class Person. */ <br />
                        function Person(name) { <br />
                             this.name = name; <br />
                        } <br />
                        Person.prototype.getName = function() {  <br />
                            return this.name; <br />
                        } <br />
                        var reader = new Person('John Smith'); reader.getName(); <br />
                        var reader2 = new Person('Jack Tripper'); reader2.getName();
                    </code>
                    </div>
                    <button onClick="alert( reader.name ); ">Get Reader</button>
                    <button onClick="alert( reader2.name ); ">Get Second Reader</button>
                    <hr />

                    <!-- BEGIN: Polymorphism JS -->
                    <h6>Polymorphism JavaScripting</h6>
                    <p></p>
                    <script>
                function Animal(name) {
                        this.name = name;
                        this.talk = function () {
                                return "";
                        };
                }
                function Cat(name) {
                        Animal.call(this, name);
                        this.talk = function() {
                                return "Meow!!!";
                        };
                }
                function Dog(name) {
                        Animal.call(this, name);
                        this.talk = function() {
                                return "Arf! Arf!";
                        };
                }
                var animals = [
                        new Cat("Big Cat Jones"),
                        new Cat("Kitty Kat"),
                        new Dog("Big Dee"),
                        new Dog("Lil Milo")
                ];
                 
                // prints the following:
                //
                // Missy: Meow!!!
                // Mr. Mistoffelees: Meow!!!
                // Lassie: Arf! Arf!
                 
                for (var i = 0; i < animals.length; i++) {
                        document.write(animals[i].name + " says, " + animals[i].talk() + "<br/>");
                        document.write("<p></p>");
                }
                </script>

                    <hr />
                    <!-- BEGIN: Closures JS -->
                    <h6>
                        JavaScript Closures
                        <a name="js"></a>
                    </h6>
                    <p>
                        Two one sentence summaries:
                        <ul>
                            <li>
                                a closure is the local variables for a function - kept alive <em>after</em>
                                the function has returned, or
                            </li>
                            <li>
                                a closure is a stack-frame which is
                                <em>not deallocated</em>
                                when the function returns. (as if a 'stack-frame' were malloc'ed instead of being on the stack!)
                            </li>
                        </ul>
                    </p>
                    <div class="code_sample">
                        <code>
                    function sayHello2(name) {<br />
                    &nbsp;&nbsp; var text = 'Hello ' + name; // local variable<br />
                    &nbsp;&nbsp; var sayAlert = function() { alert(text); }<br />
                    &nbsp;&nbsp; return sayAlert;<br />
                    &nbsp; }<br />
                    </code>
                    </div>
                    <p id="closure_result" class="code_sample">Closure results here &hellip;</p>
                    <script>
                    function sayHello2(name) {
                      var el = document.getElementById('closure_result');
                      var text = 'Hello ' + name; // local variable
                      var sayAlert = function() { el.innerHTML = text; }
                      return sayAlert;
                    }
                </script>
                    <button id="btn2" class="codeButton" onClick="var say2 = sayHello2('Jane');say2();window['say2x'] = say2;" type="button">var say2 = sayHello2('Jane'); say2();</button>
                    <hr />

                </div>
            </article>
            <aside class="rt_column">
                <?php include("uxsubnav.inc.php"); ?>
            </aside>
        </div>
    </section>
    <?php include("../assets/inc/foot.inc.php"); ?></body>
</html>