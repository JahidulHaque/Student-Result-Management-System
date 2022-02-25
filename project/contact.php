<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>


       
	<style type="text/css">
		body{
			background: url('bg3.jpg')no-repeat center center fixed ;
			-moz-background-size: cover;
			-webkik-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}


		



		/*for Contact Form */
		

		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Josefin Sans', sans-serif;
		}
		.contact{
			position: relative;
			min-height: 100vh;
			padding: 50px 100px;
			display: flex;
			justify-content: center;
			flex-direction: column;

		}
		.contact .content{
			max-width: 80px;
			text-align: center;

		}
		.contact .content h2{
          font-size: 36px;
          font-weight: 600;
           color: #463f3f;
           margin-left: 500%;
           width: 200px;

		}
		.contact .content p{

         font-weight: 700;
         color:#463f3f;
         margin-left: 250%;
           width: 600px;

		}
		.container{
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 30px;

		}

		.container .contactInfo{
			width: 50%;
			display: flex;
			flex-direction: column;
		}
        .container .contactInfo .box{
        	position: relative;
        	padding: 20px 0;
        	display: flex;

        }
        .container .contactInfo .box .icon{
        	min-width: 60px;
        	height: 60px;
        	background: #fff;
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	border-radius: 50%
        	font-size: 22px;

        }
        .container .contactInfo .box .text{
        	display: flex;
        	flex-direction: column;
        	margin-left: 20px;
        	font-size: 16px;
        	color: #fff;
        	font-weight: 300;

        }
         .container .contactInfo .box .text h3{
         	font-weight: 500;
         	color: #000000;


         }
         .contactForm{
         	width: 40%;
         	padding: 40px;
         	background: #fff;

         }
         .contactForm h2{
         	font-size: 30px;
         	color: #333;
         	font-weight: 500;

         }
         .contactForm .inputBox{
         	position: relative;
         	width: 100%;
         	margin-top: 10px;

         }
         .contactForm .inputBox input,
         .contactForm .inputBox textarea{
         	width: 100%;
         	padding: 5px 0;
         	font-size: 16px;
         	margin: 10px 0;
         	border: none;
         	border-bottom: 2px solid #333;
         	outline: none;
            resize: none;

         }

         .contactForm .inputBox span{
         	position: absolute;
         	left: 0;
         	padding: 5px 0;
         	font-size: 16px;
         	margin: 10px 0;
         	pointer-events: none;
         	transition: 0.5s;
         	color: #666;


         }
     
           .contactForm .inputBox input[type="submit"]{
           	width: 100px;
           	background: #00bcd4;
           	color: #fff;
           	border: none;
           	cursor: pointer;
           	padding: 10px;
           	font-size: 18px;

           }


          

           .map{
           	margin-left: 40%;
           	 color:#f3f5f2;
           }

	</style>
	
</head>
<body>

<section>
	<div>
		<h2>Contact Us</h2>
		<p>We'll be in touch as soon as possible with you. Thanks for contacting with us.</p>
	</div>
	<div class="container">
		<div>
			<div>
				
				<div class="text">
					<h3>Address</h3>
					<p>Rampura,<br>Aftabnagar<br>Dhaka,Bangladesh</p>
				</div>
				
			</div>
			<div>
				
				<div>
					<h3>Phone</h3>
					<p>01521435943</p>
				</div>
				
			</div>
			<div>
				
				<div>
					<h3>Email</h3>
					<p>ewuUniversity@gmail.com</p>
				</div>
				
			</div>
		</div>
		
	</div>
</section>

	
	
</body>
</html>