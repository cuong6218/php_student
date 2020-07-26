<div class="container">
    <div class="row">
        <h1><i class="fa fa-lock" aria-hidden="true"></i> Login</h1>

    </div><br /><br />


    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
        </div>
        <input type="text" name="username" class="form-control" placeholder="username or email" />
    </div><br />

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-key icon"></i></span>
        </div>
        <input type="Password" name="password" class="form-control" placeholder="password" />
    </div><br />
    <div class="checkbox">
        <label><input type="checkbox" value="" /> Remember me</label>
    </div><br />
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-off"></span> Login</button>
    <br />
    <center>
        <div style="border:1px solid black;height:1px;width:300px;"></div>
    </center><br />
    <div class="footer">
        <p>Don't have an Account! <a href="register.php">Sign Up Here</a></p>
    </div>

</div>
<style>
    .container {
        border: 2px solid blue;
        text-align: center;

        height: 500px;
        width: 400px;
    }

    body {
        padding: 70px;
    }

    h1 {
        margin: auto;
    }

    .row {
        height: 90px;
        width: 396px;
        background-color: paleturquoise;
    }
</style>