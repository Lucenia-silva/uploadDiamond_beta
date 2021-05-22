

<!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">
            <div class="modal-header logo">
              <a href="/"> <img src="{{asset('public/img/logo/Diamond/2.png')}}" style="width:20rem; margin-left:5rem;" alt="image"></a>
            </div>
    <div class="modal-body">

        <div class="col-md-12 text-center">
        <h6>IF YOU ARE A SUBSCRIBER DIAMOND REVIEW AFRICA</h6>
        <p class="text-center"> Just use your subscriber login </p>
        </div>
     <form action="" method="post" name="login">
            <div class="form-group" style="margin-top: 1rem">
           <label for="exampleInputEmail1">Email address</label>
           <input type="email" name="email"  class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <div class="form-group">
           <label for="exampleInputEmail1">Password</label>
           <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
            </div>
            <div class="form-group">
           <p class="text-center">By signing up you accept our <a href="#">Terms Of Use</a></p>
            </div>
            <div class="col-md-12 text-center ">
          <a href="#" <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button></a>
            </div>
            <div class="col-md-12 ">
            <div class="login-or">
              <hr class="hr-or">
              <span class="span-or">or</span>
            </div>
            </div>
            <div class="col-md-12 mb-3">
             <p class="text-center">
              <a href="https://www.facebook.com/" class=" btn btn-fb mybtn btn-outline-primary"><i class="fa fa-facebook"></i>
              </i> Signup using Facebook
              </a>
           </p>
        </div>

        <div class="col-md-12 mb-3">
         <p class="text-center">
            <a href="https://www.google.com/" class=" btn btn-gplus mybtn btn-outline-danger"><i class="fa fa-google-plus">
            </i> Signup using Google
            </a>
         </p>
        </div>
        <div class="form-group">
           <p class="text-center">Still not registered?  <a href="{{route('subscribe')}}">Sign up for free</a></p>
        </div>

    </form>
    <div class="botao1">
    <button type="button" class="btn btn-danger btn1" data-dismiss="modal">Close</button>
    <button type="button" class="btn btn-success">Save</button>
    </div>

    </div>

    <style>

    .btn1
    {
    background-color: #751eda;
    }

    a{
     text-decoration:none !important;
     }
     h1,h2,h3{
     font-family:roboto,sans-serif;
     font-size: 14px;
     margin-top: 1.5rem;
     font-weight: bold;
     }
     .row{
         margin-right: -16px;
         margin-left: -16px;

     }
      .myform{
    position: relative;
    display: flex;
    padding: 1rem;
    -ms-flex-direction: column;
    flex-direction: column;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    outline: 0;
    max-width: 500px;
     font-size: 16px;
     }
     .mybtn{
     border-radius:50rem;
     width:100%;


     }
     .login-or {
     position: relative;
     color: #aaa;
     margin-top: 10px;
     margin-bottom: 10px;
     padding-top: 10px;
     padding-bottom: 10px;
     }
     .span-or {
     display: block;
     position: absolute;
     left: 50%;
     top: -2px;
     margin-left: -25px;
     background-color: #fff;
     width: 50px;
     text-align: center;
     }
     .hr-or {
     height: 1px;
     margin-top: 0px !important;
     margin-bottom: 0px !important;
     }
     .google {
     color:#666;
     width:100%;
     height:40px;
     text-align:center;
     outline:none;
     border: 1px solid lightgrey;
     }
     .logomodal{
       background-image: url('public/img/logo/banner.jpg');
       background-size: cover;
       margin-top:-1rem;
      height: 8rem;
      position: relative;

     }
     .logomodal img{
       width: 80%;
       margin-left:3rem;
       margin-top:2rem;

     }
     .botao1{
         margin-left:9.5rem;


     }
      form .error {
     color: #ff0000;
     }
     #second{display:none;}
</style>


<script>

$("#signup").click(function() {
$("#first").fadeOut("fast", function() {
$("#second").fadeIn("fast");
});
});

$("#signin").click(function() {
$("#second").fadeOut("fast", function() {
$("#first").fadeIn("fast");
});
});



     $(function() {
       $("form[name='login']").validate({
         rules: {

           email: {
             required: true,
             email: true
           },
           password: {
             required: true,

           }
         },
          messages: {
           email: "Please enter a valid email address",

           password: {
             required: "Please enter password",

           }

         },
         submitHandler: function(form) {
           form.submit();
         }
       });
     });



    $(function() {

    $("form[name='registration']").validate({
    rules: {
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

    messages: {
      firstname: "Please enter your firstname",
      lastname: "Please enter your lastname",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },

    submitHandler: function(form) {
      form.submit();
    }
    });
    });

    </script>
         </div>


   </div>
 </div>
