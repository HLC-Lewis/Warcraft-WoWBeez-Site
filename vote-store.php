<?php include'include/header.php' ?>

	<div id="main-side">
    
    	<!-- Account Panel -->
        
        	<div class="account-panel-head"></div>
            
            <div class="container-one cont-half">
            	<!-- Vote Store -->
                	
                    <!-- SUB PAGE HEADER -->
                    	<!-- Small Fix--><div style="height:10px; width:1px;"></div>
                	<div class="account-subpage-header container-two cont-half-two">
                    	<h4>Vote Store</h4>
                        <a class="back-to-account" href="./account-panel.php"></a>
                    </div>
                    <!-- SUB PAGE HEADER.End -->
                    
                    <!-- STORE -->
                    
                    	<div class="vote-store-search-bar container-two cont-half-two" align="center">
                        
                            <form>
                            	<input type="text" placeholder="Item name...">
                                <select class="styled">
                                	<option>Results</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>75</option>
                                    <option>100</option>
                                </select>
                                <input class="light-btn" type="submit" value="search">
                                
                                <div class="charcater-and-info">
                                
                                	<div class="vote-points-info">
                                    	<h4>You have <font color="#cfa357"><b>256</b></font> available Vote Points</h4>
                                        <p>Refresh this page if vote points amount is not correct!</p>
                                    </div>
                                    
                                    <select class="styled" id="charcaters">
                                    	<option>Select charcater</option>
                                    </select>
                                    <div class="clear"></div>
                                </div>
                                
                            </form>
                        
                        </div>
                        
                        <div class="vote-store-search-bar" align="center">
                            <div class="advanced-options">
                                <select id="category" class="styled">
                                	<option>Category</option>
                                </select>
                                                                        
                                <select  class="styled">
                                	<option>Quality</option>
                                </select>
                                                                        
                                <select id="item-level"  class="styled">
                                	<option>Item Level</option>
                                </select>
                                                                        
                                <select id="price"  class="styled">
                                	<option>Price</option>
                                </select>
                            </div>
                    	</div>
                        
                        <!-- Search results -->
                        <ul class="store-items-results">
                        	
                            <!-- Item ROW -->
                        	<li>
                            	<div>
                            		<h4><a href="#" style="color:#0070dd;">Itemnamegoeshere</a></h4>
                                	<p>25 Vote points</p>
                                </div>
                                <a href="#" class="purchase-item-store"></a>
                            </li>
                            
                            <!-- Item ROW -->
                        	<li>
                            	<div>
                            		<h4><a href="#" style="color:#a335ee;">Itemnamegoeshere</a></h4>
                                	<p>25 Vote points</p>
                                </div>
                                <a href="#" class="purchase-item-store"></a>
                            </li>
                            
                            <!-- Item ROW -->
                        	<li>
                            	<div>
                            		<h4><a href="#" style="color:#0070dd;">Itemnamegoeshere</a></h4>
                                	<p>25 Vote points</p>
                                </div>
                                <a href="#" class="purchase-item-store"></a>
                            </li>
                            
                            <!-- Item ROW -->
                        	<li>
                            	<div>
                            		<h4><a href="#" style="color:#0070dd;">Itemnamegoeshere</a></h4>
                                	<p>25 Vote points</p>
                                </div>
                                <a href="#" class="purchase-item-store"></a>
                            </li>
                        
                        
                        <div class="clear"></div>
                        </ul>
                        
                    <!-- STORE.End -->
                    
                    
                    
            	<!-- Vote Store.End -->
            </div>
            
    	<!-- Account Panel.End -->
    
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