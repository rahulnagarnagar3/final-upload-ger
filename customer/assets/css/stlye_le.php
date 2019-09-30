body{
    font-size: :14px;
    line-height: 1.42857143;
    color: #333333;
    background: #f0f0f0;
    overflow-x: hidden;
    height: 100px;   
overflow-y : auto;
    
}

/*top menu styles*/
#top{
    background: #555555;
    padding:10px 0;
    
}

#top.offer{
    color:#ffffff;
    
}

#top.offer.btn{
    text-transform: uppercase;
    
}

@media(max-width:991px){
    #top.offer{
        margin-bottom: 10px;
    }
}

@media(max-width:991px){
    #top{
        font-size: 12px;
        text-align: center;
    }
}

#top a{
    color: #ffffff;
}

#top ul.menu{
    padding-top: 5px;
    margin: 0px;
    text-align: right;
    font-size: 12px;
    list-style: none;
}

@media(max-width:991px){
    #top ul.menu{
        text-align: center;
    }
}

#top ul.menu>li{
    display: inline-block;
}

#top ul.menu>li a{
    color:#ffffff;
}

#top ul.menu >li +li:before{
    content: "|\00a0";
    color:#f7f7f7;
    padding: 0 5px;
}


/*Header Style*/

.navbar{
    background: #ffffff;
    
}

.navbar-collapse.right{
    float: right;
}

.navbar-brand{
    float: left;
    padding: 10px 15px;
    font-size: 18px;
    line-height: 20px;
    height: 70px;
    
}

.navbar-brand:hover,
.navbar-brand:focus{
    text-decoration: none;
    
}

.navbar ul.nav > li >a{
    text-transform: uppercase;
    font-weight: bold;
    font-size:14px
}
.navbar ul.nav >li >a:hover{
    background:red;
}

.padding-nav{
    padding-top: 10px;
}

.btn-primary{
    color:rgb(255,255,255);
    background-color: rgb(79,191,168);
    border-color: :rgb(65,179,156);
}
#Search .navbar-form{
    float:right;
    
}
#Search{
    clear:both;
    border-top:solid 1px #9adacd;
    text-align:right;
}

#Search .navbar-form .input-group{
    display: table;
    
}

#Search .navbar-form .input-group .form-control{
    width:100%;
}

#slider{
    margin-bottom: 40px;
}
/* advantages Styles*/

#advantages{
    text-align: center;
    
}

#advantages .box{
    background: #ffffff;
    margin: 0 0 30px;
    border: solid 1px #e6e6e6;
    box-sizing: border-box;
    padding: 20px;
    box-shadow: 0px 2px 5px rgba(0,0,0,.3);
}



#advantages .box h3{
    position: relative;
    margin: 0 0 20px;
    font-weight: 300;
    text-transform: uppercase;
    z-index: 2;
    
}


#advantages .box h3 a{
    color: #4fbfa8;
}

#advantages .box h3 a:hover{
    text-decoration: none;
}

#advantages .box p{
    position: relative;
    z-index: 2;
   color: #555555;
}

/* Latest Products Styles*/

#hot h2{
    font-size: 36px;
    font-weight: 400;
    color: #4fbfa8;
    text-align: center;
    text-transform: uppercase;
}

#content{
    padding-left: 25px;
    
}

.single{
    width: 350px;
    
}

@media(max-width:768px){
    .single{
        width: 60%;
        margin:0 auto;
        
    }
}

#content .product{
    background: #ffffff;
    border: solid 1px #e6e6e6;
    margin-bottom: 30px;
    box-sizing: border-box;
    
}

#content .product .text{
    padding: 10px 10px 0px;
}

#content .product .text p.price{
    font-size: 18px;
    text-align: center;
    font-weight: 400;
    
}

#content .product .text .button{
    text-align: center;
    clear: both;
}

#content .product .text .button .btn{
    margin-bottom: 10px;
    font-family: fantasy;
    font-size: 15px;
}

#content .product .text h5{
    text-align: center;
    font-size: 20px;
}



#content .product .text h5 a{
    color:rgb(0,0,250);
}

/*Services page id Breadcrumb*/

.breadcrumb{
    padding: 8px,15px;
    margin-bottom: 20px;
    background: #ffffff;
    border-radius: 5px;
    box-shadow: 0px 1px 5px rgba(0,0,0,.5);
}

.breadcumb>li+li:before{
    content: ">\00a0";
    color: #cccccc;
    
}
@media(max-width:991px){
    .breadcrumb{
        padding: inherit;
        text-align: center;
    }
}


/*Parts and Services page*/

#content .panel.sidebar-menu{
    box-sizing: border-box;
    box-shadow: 0px 1px 5px rgba(0,0,0,.2);
}


#content .panel.sidebar-menu ul.nav.category-menu{
    margin-bottom: 20px;
}

#content .panel.sidebar-menu ul.nav.category-menu li a{
    text-transform: uppercase;
    font-weight: 600;
}

#content .panel.sidebar-menu h3{
    padding: 5px 0px;
    margin: 0px;
}
/*services products*/

@media(max-width:768px){
    .center-responsive{
        width: 70%;
        margin: 0px auto;
    }
}

@media(max-width:550px){
    .center-responsive{
        width: 70%;
        margin: 0px auto;
    }
}

/*Cart.php Style*/

#content #cart .table tbody tr td img{
    width: 50px;
}

#content #cart .table tbody tr td input{
    width: 40px;
    text-align: right;
}

#content #cart .table tbody tr td{
    vertical-align: middle;
}

#content #cart .table tfoot{
    font-size: 18px;
}

.box .box-footer{
    background-color: #f7f7f7;
    margin: 30px -20px 20px;
    padding: 20px;
    border-top: 1px solid #eeeeee;
}

.box .box-footer:before,
.box .box-footer:after{
    content: "";
    display: table;
}

.box .box-footer:after{
    clear: both;
}

.box .box-header{
    background-color: #f7f7f7;
    margin: -20px -20px 20px;
    padding: 20px;
    border-top: 1px solid #eeeeee;
}

#content #order-summary table{
    margin-top: 20px;
}

#content #order-summary table td{
    color: #999999;
}

#content #order-summary table tr.total td,
#content #order-summary table tr.total th{
    font-size: 18px;
    color: #555555;
    font-weight: 700;
}
    

/*Footer*/

#footer{
    background:#e0e0e0;
    padding: 10px 0;
}

#footer ul{
    list-style: none;
    padding-left: 0px;
}

#footer ul a{
    color: rgb(0,0,250);
    padding: 10px 0;
}

#footer .social{
    text-align: left;
    
}

#footer .social a{
    margin: 0px 10px 0px 0px;
    display: inline-block;
    color: #ffffff;
    width:30px;
    height: 30px;
    border-radius: 15px;
    line-height: 30px;
    font-size: 15px;
    text-align: center;
    vertical-align: bottom;
    background: #555555;
    text-decoration: none;
}

#footer .social a:hover{
    color:#dedede;
    background: #777777;
    
}

/*copyright styles*/
#copyright{
    background:#333333;
    color:#cccccc;
    padding: 20px 0px;
    font-size: 12px;
}

#copyright p{
    margin: 0px;
}


