
<html lang="en">

<?= $this->include('core/header')  ?> 

<style type="text/css"> 
    .navbar_pivi{
        background-color:#003345;
    }

    .sys_image{
        width: 60%;
        height: auto;
    }

    .card-text{
        font-size:10px;
    }

    .sys_link{
        font-size:70%;
    }

    .cardbody{
        width: 18rem;
    }
    /* .pivi_label{
        
    } */
</style>

<body  >  
    <nav class="container-fluid navbar bg-body-tertiary">
        <div class="container-fluid navbar_pivi"> 
            <a class="navbar-brand"><h1 class="pivi_label text-light">PIVI Central Dashboard</h1></a>
            <!-- <form class="d-flex mt-5" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
                <a href="<?php echo base_url('Home/AdminLogin');?>" class="btn btn-sm btn-primary">Settings</a>
            </form> -->
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-6 mt-5">
                <div class="container-fluid card shadow-lg" style="border-radius: 1rem;">
                    <div class="row g-0"> 
                        <div class="d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">  
                                <div class="form-outline mb-4">
                                    <label class="fw-bold form-label" for="form2Example17">Username:</label>
                                    <input name="Uname" id="Uname" placeholder="Username" type="text" class="form-control"  /> 
                                </div> 
                                <div class="form-outline mb-4">
                                    <label class="fw-bold form-label" for="form2Example27">Password:</label>
                                    <div class="input-group mb-3">
                                        <input  name="password" id="password" placeholder="Password" type="password" class="form-control" value="" />
                                        <button class="btn" type="button" id="showpass"><i class="fas fa-eye"></i></button>
                                    </div>
                                </div> 
                                <div class="text-center">
                                    <button class="btn btn-dark btn-sm" id="LoginUser"><b>Login</b></button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                
            </div>
        </div> 
    </div>
</body>

<?= $this->include('core/footer')  ?>

<script>
    $(document).ready(function(){ 
        var show = true;
        $("#LoginUser").click(function(){


        var username = $("#Uname").val();
        var password = $("#password").val();

        var message  = (username == '' && password == '' ? 'Username and password is empty' : (username == '' ? 'Username is Empty' : 'Password Is Empty') )

        var icon  = (username == '' && password == '' ? 'error' : (username == '' ? 'warning' : 'warning') )


        var AlertResult = {
            'title' : 'Opps',
            'icon'   : icon,
            'Message': message
        };

        var data = {
            Uname: $('#Uname').val(),
            Password: $('#password').val(),
        }

        return (username == '' || password == '' ? Message_Result(AlertResult) : AjaxCall(data))


        }); 


        $('#showpass').click(function() {
            if (show) {
                $('#password').attr('type', 'text');
                $(this).html('<i class="fas fa-eye-slash"></i>');
                show = false;
            } else {
                $('#password').attr('type', 'password');
                $(this).html('<i class="fas fa-eye"></i>');
                show = true;
            }

        });
    });  

    function AjaxCall(data){

        post("<?= route_to('login'); ?>",data, function(res) {

            if(res.status == 200){

                window.location.href = "<?= route_to('Home/Admin'); ?>";
            }

            var AlertResult = {
                'title' : res.title,
                'icon'   : res.status == 200 ? 'success' : 'warning',
                'Message': res.Message
            };
            Message_Result(AlertResult)
        });

    }
</script>
