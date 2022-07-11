
<style>


body{
	background-image: #eee;
  margin: 0%;
}

/*Start Header syle */


header {

    background-color:#D68910;
    width: 100%;
    position:absolute;
    display: flex;
    justify-content: space-between;
    align-items: center;
    
}



.navbar{
    width: 1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width: 200px;
    float: left;
    height: 100px;
}

.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float: left;
    padding-top: 15px;
    margin-top: 5px
}

.menu{
    width: 400px;
    float: left;
    height: 70px;
    margin-left: 370px;
    display:flex;
    flex-wrap: wrap; 
    justify-content: space-between;
    background-color: #D68910;
    padding: 5px;
    display: block;
    width: 100%;
    position:absolute;
    display: flex;
    justify-content: space-between;   
}
    ul li {
    display: inline;
    text-align: center;
    line-height: 40px;
    background-color: none;
    font-size: 22px;
    width: 140px;
    height: 43px;
    opacity: 0.7;
    float:right;
   }
    ul li a{
        text-decoration: none;
        color: #fff;  
    }
    ul li a:hover {
    color:black;
   }
   ul li ul li {
   display: none;
   background-color: #000;
   }
   ul li:hover ul li{
   display: block ;
   display: block;
   position:absolute; 
   position: relative;
   border: 1px solid #042331;
   border-top: none;
   text-decoration:none; 
   line-height: 50px;
   border-top: none;
   top: 0px; 
   opacity: 0.8;
   }
/*end Header syle */
/* Start Main pic */
.back_image {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center; 
    background-position: center;
    background-repeat: no-repeat;
    background-size:cover;
  }
.text {
    position: absolute;
    background-color: black; 
    font-weight: bold;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 45%;
    padding:20px;
    text-align:center;
    font-family:'Courier New', Courier, monospace;
    font-size: 38px;
    color: #fff;
   
 
}
#gear{
color: #ff7200;
font-size: 50px;
font-family:'Times New Roman', Times, serif;


}
#main_page{

	background-color: #f6f5f7;

} 





/* END Main pic */

/*Start add design page*/
#form{
border: solid gray 2px;
width:20%;
border-radius: 5px;
margin: 100px ;
background: white;

}
#add {

	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

button {
	border-radius: 20px;
	border: 1px solid #F39C12;
	background-color: #F39C12;
	color:black;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #D5D8DC;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: rgb(240, 251, 251);
	border: none;
	padding: 12px 15px;
	margin: 8px 5px;
	width: 100%;
	

}

/*End add dasigns page*/


/*Start login page*/
.main{
    width: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(background/backround.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}
.content{
    width: 1200px;
    height: auto;
    margin: auto;
    color: #fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family:'Times New Roman';
    letter-spacing: 1.2px;
    line-height: 10px;

    
}

.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 9%;
    letter-spacing: 2px;
}

.content .cn{
    width: 160px;
    height: 40px;
    background: #F39C12;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    transition: .4s ease;
    
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .3s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color:#F39C12;
    font-size: 65px
    
}

.form_login{
    width: 700px;
    height: 500px;
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: -20px;
    left: 870px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form_login h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: #F39C12;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form_login input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #F39C12;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form_login input:focus{
    outline: none;
}

::placeholder{
    color: #fff;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}
.btnn a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.form_login .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}
.form_login .link a{
    text-decoration: none;
    color: #ff7200;
}
.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}


/*End Login page*/

/*SATRT product card  */

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
  width: 430px;
  overflow: hidden;
  border-radius: 10px;
  transition: 0.5s ease;
  cursor: pointer;
  }


.price {
  color: grey;
  font-size: 28px;
}
.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
.card button:hover {
  opacity: 0.7;
}
/*END product card  */


/* User Account *



/*START FOOTER  */


.footer {
    background-color:#D68910;
    color: black;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    margin-top: 24%;
  
}

.footer-title {
    font-size: 25px;
    font-weight: 600;
}

.footer-title span {
    color: black;
;
}




/*END FOOTER */

/*Start check booking page */


.search{
  display: inline;
}

.srch{
    font-family: 'Times New Roman';
    width: 250px;
    height: 40px;
    background: transparent;
    border: 1px solid #ff7200;
    color: #000; 
    font-size: 16px; 
}

.btn{
    width: 150px;
    height: 40px;
    background: #ff7200;
    border: 2px solid #ff7200; 
    color: #fff;
    font-size: 15px;
    text-align: center;
    transition: 0.2s ease;
    cursor: pointer;
}
.btn:hover{
    color: #000;
}

.btn:focus{
    outline: none;
}

.srch:focus{
    outline: none;
}


h3{
color:black;
background-color: #FAD7A0;
}
.table_head{
background-color: #FAD7A0;
text-align: center;

}
.table{
  background-color:#f6f5f7;
 padding:10%;
}
.booking_button{
  color: aliceblue;
  cursor: pointer;
}
.results{
  text-align: center;
  text-decoration: none;
  justify-content: space-around; 
  background: color #000;

}.delete_but{
  display: flex;
  background-color: #F32424;
  height: 30px;
  width: 60px;
  justify-items: center;
  align-items: center;

}.text_del_but{
  margin-right: 50px;
  text-align: center; 
  font-size: 10px;
}.head{
font-family:'Times New Roman', Times, serif;
font-style: italic;
font-size: 27px;
}

/*end check booking page */


/* Start Contact page*/

.con_body{
 
  justify-content: space-around;
  margin-top: 60px;
}
.cards {
  box-shadow: 0 4px 8px 0 gray;
  margin: auto;
  text-align: center;
  font-family: arial;
  width: 480px;
  height: 200px;
  overflow: hidden;
  border-radius: 10px;
  transition: 0.5s ease;
  cursor: pointer;
  background-color: rea;
  display:block;

}
.cards:hover {
   transform: scale(1.1);
} 
.icon_conn{
    font-size: 35PX; 
   margin-top:0.5ch;
   color:black;
}

.con{
    font-size: 35px;
    color: black;
}
.title{
font-size: 50px;
color: red; 
text-align: center;
}

/* End Contact page*/


/* test page */

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}



/**add booking page */
#book_form{
  color:black;
 background-color: red;
}
.form_book{
    width: 550px;
    height: 750px;
    background: linear-gradient(to top, white)50%,rgba(0,0,0,0.8)50%);
    position: absolute;
    top: 180px;
    right: 750px;
    transform: translate(0%,-5%);
    border-radius: 10px;
    padding: 25px;
}

.form_book h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: black;
    font-size: 22px;
    background-color: #e;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}

.form_book input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color:black;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form_book input:focus{
    outline: none;
}

::placeholder{
    color:black;
    font-family: Arial;
}
.head_book{
font-family:'Times New Roman', Times, serif;
font-style: italic;
font-size: 27px;
color:black;
}
.butt_book{
  background-color: #ff7200;

}

.butt_book{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: black;
    transition: 0.4s ease;
}
.butt_book:hover{
    background: #fff;
    color: #ff7200;
}
.butt_book a{
    text-decoration: none;
    color: #000;
    font-weight: bold;
}
.butt_book .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
}
</style>