@include('include.header')
<!-- HOVER DIV -->

<div class="container cat">
	<div class="row">
		<div align="center" class="col-md-4 col-xs-12 hovdiv fly">
            <i class="fas fa-graduation-cap"></i>
            <div class="col-md-12 col-xs-12">
                <label class="trending trendinghead">TRENDING COURSES</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <label class="trending">Your chance to be a trending expert in IT industries and make a successful career after completion of our courses.</label>
            </div>
        </div>
		<div align="center" class="col-md-4 col-xs-12 hovdiv1 fly">
            <i class="fas fa-book book"></i>
            <div class="col-md-12 col-xs-12">
                <label class="trending trendinghead top">BOOKS & LIBRARY</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <label class="trending">Masterstudy is one of the world's busiest public library systems, with over 10 million books, movies and other items to borrow.</label>
            </div>    
		</div>
		<div align="center" class="col-md-4 col-xs-12 hovdiv2 fly">
            <i class="fas fa-certificate"></i>
            <div class="col-md-12 col-xs-12">
                <label class="trending trendinghead top">CERTIFICATION</label>
            </div>
            <div class="col-md-12 col-xs-12">
                <label class="trending">Upon successful completion receive a certificate showing your achievement for completing one of our rigorous classes.</label>
            </div> 
            </div>
		</div>
	</div>
</div>

<!-- END OF HOVER DIV -->

<!-- NEWSLETTER -->

<div class="container cf3">
    <div class="row">
        <div class="col-md-1 col-xs-6">
            <i class="fas fa-book"></i>
        </div>
        <div class="col-md-5 col-xs-12">
            <label class="stay with">STAY TUNED</label>    <label class="with">WITH US</label><br>
            <label>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</label>
        </div>
        <div class="col-md-6 col-xs-12">
            <label>YOUR E-MAIL ADDRESS</label><br>
            <input type="text" placeholder="Email" class="emailtxt">
            <b><input type="submit" value="SUBSCRIBE" class="subscribe"></b>
        </div>
    </div>
</div>
<!-- END OF NEWSLETTER SECTION -->

<!-- SIGN UP SECTION -->

<div class="container cont_sign_up" id="sign_up">
    <div class="row row_sign">
        <div align="center" class="col-md-8 col-xs-12">
            <label class="white wsize">GET THE COACHING TRAINING</label><br>
            <label class="black wsize">BY DINESH SHARMA</label> <br><br>
            <label class="black bsize">It's limited seating! Hurry up</label><br>
            <label class="black bsize">Time is up, sorry!</label>
        </div>
        <div class="col-md-4 col-xs-12 signup">
            <div class="col-md-12 col-xs-12 inner_sign">
                <form method="POST" action="register" name="form_register" id="register" >
                    <input name="_token" type="hidden" value="{{ csrf_token() }}">
                    <b><label class="sign_up_now">Sign up now</label><br></b>
                        <input type="text" placeholder="Mention your full name..." name="name" class="form-control txt_color"><br>
                        <input type="text" placeholder="Mention your email..." name="email" class="form-control txt_color"><br>
                        <input type="password" placeholder="Password" name="password" class="form-control txt_color"><br>
                         <input type="password" placeholder="Confirm Password" name="confirm_pass" class="form-control txt_color"><br>
                         <button type="button" class="submit_get" onclick="show_terms();">REGISTER</button>
                    <!--<input type="submit" value="GET IT !" class="submit_get">-->
                </form>
            </div>
        </div>
    </div>
</div>
@include('include.footer')