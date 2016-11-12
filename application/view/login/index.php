<div class="middle-box text-center loginscreen  animated fadeInDown">
    <form action="" method="POST">
        <div class="form-group">
            <input type="text" name="username" class="form-control" aria-autocomplete="both" autocomplete="on" placeholder="Username" required="" />  
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" aria-autocomplete="both" autocomplete="on" placeholder="Password" required="" />
        </div>            
        <div class="text-danger"> <?php echo $this->loginError; ?></div>
        <input type='submit' name='submit' class="btn btn-primary block full-width m-b" value='Login'>
    </form>
</div>
<a href="map/directions">Go</a>