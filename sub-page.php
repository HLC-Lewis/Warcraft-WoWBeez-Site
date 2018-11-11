<?php include'include/header.php' ?>

	<div id="main-side">
    
    	<div class="sub-page-header">
        	<h5>sub page</h5>
        </div>
        
        <div class="container-one cont-half padding-top-bot">
        
        	<!-- Form | Register/Login Example -->
            <div class="form-holder">
            <form>
            	<label for="first-name" class="styled-row">
                	<p>First name</p>
                    <input type="text" id="first-name">
                </label>
                
                <label for="input" class="styled-row"><p>Last name</p><input type="text"></label>
                <label for="input" class="styled-row"><p>Password</p><input type="password"></label>
                
                <label class="styled-row">
                    <p>First name</p>
                    <select class="styled">
                        <option>Select Country</option>
                        <option>Bulgaria</option>
                        <option>Romania</option>
                        <option>USA</option>
                        <option>Germany</option>
                    </select>
                </label>
            </form>
            </div>
            
            <!-- Textarea -->
            <div class="form-holder">
            	<textarea placeholder="Your text hext..." spellcheck="false"></textarea>
            </div>
            
            
            <!-- Buttons -->
            <div class="form-holder">
                <input type="submit" value="submit">
                <input type="submit" value="submit" class="light-btn">
                <a href="#" class="light-btn">link</a>
                
                <div class="seperator"></div>
                
            </div>
            
            <!-- 
            	Error messages
                - there are 3 sizes and 2 color types
                - Size classes : small-msg, large-msg, auto-size-msg
            -->
            
            <div class="error-message small-msg green-msg">
            	<p>Quisque sed mauris eget eros imperdiet cursus</p>
            </div>
            
             <div class="error-message small-msg red-msg">
            	<p>Quisque sed mauris eget eros imperdiet cursus</p>
            </div>
                    
        
        </div>
    
    </div>
    
    <div id="sidebar">
    	
        <!-- Login Box -->
        	<div class="sidebar-box login">
            	<div class="sbox-head">Login</div>
                <div class="sbox-content">
                	<form>
                    	<input type="text" placeholder="Username">
                        <input type="password" placeholder="Password">
                        
                        <div class="login-cap">
                        	<input type="text">
                            <div class="cap-image"><img src="style/images/cap-image.gif"></div>
                            <a href="#" class="refresh-btn"></a>
                        </div>
                        
                        <input type="submit" value="login">
                        <span>
                            <a href="#">Forgot your password?</a>
                            <a href="#">Create game account</a>
                        </span>
                    </form>
                    <div class="clear"></div>
                </div>
            
            </div>
        <!-- Login Box.End -->
        
        <a href="#" class="contact-us-baner"><p></p><span></span></a>
        
        <!-- Popular Topics -->
        <div class="sidebar-box popular-topics">
            	<div class="sbox-head">Popular Topics</div>
                <div class="sbox-content">
                	
                    <ul>
                    	
                        <li>
                            <h5><a href="#">Nulla et velit sed mauris</a></h5>
                            <p>Battlegrounds and World PvP - <font color="#4e2318">24/06/12 22:32</font></p>
                        </li>
                        
                        <li>
                            <h5><a href="#">Battlegrounds</a></h5>
                            <p>Battlegrounds and World PvP - <font color="#4e2318">24/06/12 22:32</font></p>
                        </li>
                        
                        <li>
                            <h5><a href="#">For those unfortunate enough to meet a HK farm premade</a></h5>
                            <p>Battlegrounds and World PvP - <font color="#4e2318">24/06/12 22:32</font></p>
                        </li>
                        
                        <li>
                            <h5><a href="#">Tincidunt ullamcorper suscipit</a></h5>
                            <p>Battlegrounds and World PvP - <font color="#4e2318">24/06/12 22:32</font></p>
                        </li>
                        
                        <li>
                            <h5><a href="#">Duis venenatis, turpis eget tempus</a></h5>
                            <p>Battlegrounds and World PvP - <font color="#4e2318">24/06/12 22:32</font></p>
                        </li>
                        
                    </ul>
                    
                </div>
    	</div>
        <!-- Popular Topics.End -->
        
        
    </div>
    
    <!-- Clear fix --><div class="clear"></div>


<?php include'include/footer.php' ?>